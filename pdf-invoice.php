<?php
/*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
include (dirname(__FILE__) . '/config/config.inc.php');
include (dirname(__FILE__) . '/init.php');
$cookie = new Cookie('ps');
if (! $cookie->isLogged() and ! Tools::getValue('secure_key'))
    Tools::redirect('authentication.php?back=pdf-invoice.php');
if (! (int) (Configuration::get('PS_INVOICE')))
    die(Tools::displayError('Invoices are disabled in this shop.'));
if (isset($_GET['id_order']) and Validate::isUnsignedId($_GET['id_order']))
    $order = new Order((int) ($_GET['id_order']));
if (! isset($order) or ! Validate::isLoadedObject($order))
    die(Tools::displayError('Invoice not found'));
elseif ((isset($cookie->id_customer) and
 $order->id_customer != $cookie->id_customer) or
 (Tools::isSubmit('secure_key') and
 $order->secure_key != Tools::getValue('secure_key')))
    die(Tools::displayError('Invoice not found'));
elseif (! OrderState::invoiceAvailable($order->getCurrentState()) and
 ! $order->invoice_number)
    die(Tools::displayError('No invoice available'));
else
    PDF::invoice($order);
