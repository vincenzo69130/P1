<?php
/*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 7732 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
include (dirname(__FILE__) . '/../../config/config.inc.php');
include (dirname(__FILE__) . '/../../init.php');
include (dirname(__FILE__) . '/cashticket.php');
$module = new CashTicket();
if (! $cart->id or $cart->id_customer == 0 or $cart->id_address_delivery == 0 or
 $cart->id_address_invoice == 0 or ! $module->active)
    Tools::redirect('order.php?step=3');
$currency = new Currency($cart->id_currency);
if (! $module->isCurrencyActive($currency->iso_code))
    Tools::redirect('order.php?step=3');
$amount = number_format((float) ($cart->getOrderTotal(true, Cart::BOTH)), 2, 
'.', '');
if (Tools::getValue('hash') != md5(
Configuration::get($module->prefix . 'SALT') + $amount + $currency->iso_code))
    die(Tools::displayError());
$result = $module->getDispositionState((int) ($cart->id));
$state = Configuration::get('PS_OS_ERROR');
$disposition = Disposition::getByCartId((int) ($cart->id));
$message = 'Transaction ID #' . $disposition['mtid'] . ': ' .
 $disposition['amount'] . $disposition['currency'] . '<br />' . date('Y-m-d') .
 ' ';
if ($result[0] == 0) {
    list ($rc, $errorcode, $error_message, $amount, $used_currency, $state) = $result;
    if ($state == PrepaidServicesAPI::DISPOSITION_DISPOSED ||
     $state == PrepaidServicesAPI::DISPOSITION_DEBITED) {
        $state = Configuration::get('PS_OS_PAYMENT');
        $message .= $module->getL('disposition_created');
    } else {
        $message .= $module->getL('disposition_invalid') . ' ' . $state;
    }
} else {
    $message .= 'payment_error' . ' ' . $result[2];
}
if ($state != Configuration::get('PS_OS_ERROR')) {
    $state = (int) (Configuration::get($module->prefix . 'ORDER_STATE_ID'));
    if (Configuration::get($module->prefix . 'IMMEDIAT_PAYMENT')) {
        $message .= '<br />' . date('Y-m-d') . ' ';
        $result = $module->executeDebit((int) ($cart->id));
        if ($result[0] != 0) {
            $message .= $module->getL('payment_error') . ' ' . $result[2];
            $state = Configuration::get('PS_OS_ERROR');
        } else {
            $message .= $module->getL('payment_accepted');
            $state = Configuration::get('PS_OS_PAYMENT');
        }
    }
}
$module->validateOrder((int) ($cart->id), $state, 
(float) ($cart->getOrderTotal(true, Cart::BOTH)), $module->displayName, $message, 
NULL, (int) ($currency->id), false, $cart->secure_key);
if ($state == Configuration::get('PS_OS_ERROR')) {
    include (dirname(__FILE__) . '/../../header.php');
    echo $message;
    include (dirname(__FILE__) . '/../../footer.php');
} else {
    $order = new Order($module->currentOrder);
    Tools::redirect(
    'order-confirmation.php?id_cart=' . (int) ($cart->id) . '&id_module=' .
     (int) ($module->id) . '&id_order=' . (int) ($module->currentOrder) . '&key=' .
     $order->secure_key);
}



