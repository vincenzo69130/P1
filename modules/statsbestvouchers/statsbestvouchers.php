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
*  @version  Release: $Revision: 8783 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
if (! defined('_PS_VERSION_'))
    exit();
class StatsBestVouchers extends ModuleGrid
{
    private $_html;
    private $_query;
    private $_columns;
    private $_defaultSortColumn;
    private $_defaultSortDirection;
    private $_emptyMessage;
    private $_pagingMessage;
    function __construct ()
    {
        $this->name = 'statsbestvouchers';
        $this->tab = 'analytics_stats';
        $this->version = 1.0;
        $this->author = 'PrestaShop';
        $this->need_instance = 0;
        $this->_defaultSortColumn = 'ca';
        $this->_defaultSortDirection = 'DESC';
        $this->_emptyMessage = $this->l('Empty recordset returned');
        $this->_pagingMessage = $this->l('Displaying') . ' {0} - {1} ' .
         $this->l('of') . ' {2}';
        $this->_columns = array(
        array('id' => 'name', 'header' => $this->l('Name'), 
        'dataIndex' => 'name', 'align' => 'left', 'width' => 300), 
        array('id' => 'ca', 'header' => $this->l('Sales'), 'dataIndex' => 'ca', 
        'width' => 30, 'align' => 'right'), 
        array('id' => 'total', 'header' => $this->l('Total used'), 
        'dataIndex' => 'total', 'width' => 30, 'align' => 'right'));
        parent::__construct();
        $this->displayName = $this->l('Best vouchers');
        $this->description = $this->l('A list of the best vouchers');
    }
    public function install ()
    {
        return (parent::install() and $this->registerHook('AdminStatsModules'));
    }
    public function hookAdminStatsModules ($params)
    {
        $engineParams = array('id' => 'id_product', 
        'title' => $this->displayName, 'columns' => $this->_columns, 
        'defaultSortColumn' => $this->_defaultSortColumn, 
        'defaultSortDirection' => $this->_defaultSortDirection, 
        'emptyMessage' => $this->_emptyMessage, 
        'pagingMessage' => $this->_pagingMessage);
        if (Tools::getValue('export'))
            $this->csvExport($engineParams);
        $this->_html = '
		<fieldset class="width3"><legend><img src="../modules/' .
         $this->name . '/logo.gif" /> ' . $this->displayName . '</legend>
			' . ModuleGrid::engine($engineParams) .
         '
			<br /><a href="' .
         Tools::safeOutput($_SERVER['REQUEST_URI']) .
         '&export=1"><img src="../img/admin/asterisk.gif" />' .
         $this->l('CSV Export') . '</a>
		</fieldset>';
        return $this->_html;
    }
    public function getData ()
    {
        $this->_query = '
		SELECT SQL_CALC_FOUND_ROWS od.name, COUNT(od.id_discount) as total, SUM(o.total_paid_real) / o.conversion_rate as ca
		FROM ' . _DB_PREFIX_ . 'order_discount od
		LEFT JOIN ' . _DB_PREFIX_ . 'orders o ON o.id_order = od.id_order
		WHERE o.valid = 1
		AND o.invoice_date BETWEEN ' . $this->getDate() . '
		GROUP BY od.id_discount';
        if (Validate::IsName($this->_sort)) {
            $this->_query .= ' ORDER BY `' . $this->_sort . '`';
            if (isset($this->_direction))
                $this->_query .= ' ' . $this->_direction;
        }
        if (($this->_start === 0 or Validate::IsUnsignedInt($this->_start)) and
         Validate::IsUnsignedInt($this->_limit))
            $this->_query .= ' LIMIT ' . $this->_start . ', ' . ($this->_limit);
        $this->_values = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS(
        $this->_query);
        $this->_totalCount = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue(
        'SELECT FOUND_ROWS()');
    }
}
