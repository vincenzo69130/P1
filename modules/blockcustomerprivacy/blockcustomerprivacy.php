<?php
/*
* 2007-2010 PrestaShop 
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
*  @author Prestashop SA <contact@prestashop.com>
*  @copyright  2007-2010 Prestashop SA
*  @version  Release: $Revision: 1.4 $
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
if (! defined('_PS_VERSION_'))
    exit();
class blockcustomerprivacy extends Module
{
    public function __construct ()
    {
        $this->name = 'blockcustomerprivacy';
        if (version_compare(_PS_VERSION_, '1.4.0.0') >= 0)
            $this->tab = 'front_office_features';
        else
            $this->tab = 'Blocks';
        $this->version = '1.0';
        $this->author = 'PrestaShop';
        $this->need_instance = 0;
        parent::__construct();
        $this->displayName = $this->l('Block customer data privacy');
        $this->description = $this->l(
        'Adds a block to display a message about customer data privacy.');
    }
    public function install ()
    {
        return (parent::install() and $this->registerHook('createAccountForm') and
         Configuration::updateValue('CUSTPRIV_MESSAGE', array()));
    }
    public function getContent ()
    {
        global $cookie;
        $defaultLanguage = (int) (Configuration::get('PS_LANG_DEFAULT'));
        $languages = Language::getLanguages(false);
        $iso = Language::getIsoById((int) $cookie->id_lang);
        if (Tools::isSubmit('submitCustPrivMess')) {
            $message_trads = array();
            foreach ($_POST as $key => $value)
                if (preg_match("/custpriv_message_/i", $key)) {
                    $id_lang = preg_split("/custpriv_message_/i", $key);
                    $message_trads[(int) $id_lang[1]] = $value;
                }
            Configuration::updateValue('CUSTPRIV_MESSAGE', $message_trads, true);
            echo '<div class="conf confirm"><img src="../img/admin/ok.gif"/>' .
             $this->l('Configuration updated') . '</div>';
        }
        $content = '';
        if (version_compare(_PS_VERSION_, '1.4.0.0') >= 0)
            $content .= '
			<script type="text/javascript">	
				var iso = \'' .
             (file_exists(_PS_ROOT_DIR_ . '/js/tiny_mce/langs/' . $iso . '.js') ? $iso : 'en') . '\' ;
				var pathCSS = \'' . _THEME_CSS_DIR_ . '\' ;
				var ad = \'' . dirname($_SERVER['PHP_SELF']) . '\' ;
			</script>
			<script type="text/javascript" src="' . __PS_BASE_URI__ . 'js/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript" src="' . __PS_BASE_URI__ . 'js/tinymce.inc.js"></script>
			<script language="javascript">id_language = Number(' . $defaultLanguage .
             ');</script>';
        else {
            $content .= '
			<script type="text/javascript" src="' . __PS_BASE_URI__ . 'js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
				tinyMCE.init({
					mode : "textareas",
					theme : "advanced",
					plugins : "safari,pagebreak,style,layer,table,advimage,advlink,inlinepopups,media,searchreplace,contextmenu,paste,directionality,fullscreen",
					theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
					theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,,|,forecolor,backcolor",
					theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,media,|,ltr,rtl,|,fullscreen",
					theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,pagebreak",
					theme_advanced_toolbar_location : "top",
					theme_advanced_toolbar_align : "left",
					theme_advanced_statusbar_location : "bottom",
					theme_advanced_resizing : false,
					content_css : "' . __PS_BASE_URI__ . 'themes/' . _THEME_NAME_ . '/css/global.css",
					document_base_url : "' . __PS_BASE_URI__ . '",
					width: "600",
					height: "auto",
					font_size_style_values : "8pt, 10pt, 12pt, 14pt, 18pt, 24pt, 36pt",
					template_external_list_url : "lists/template_list.js",
					external_link_list_url : "lists/link_list.js",
					external_image_list_url : "lists/image_list.js",
					media_external_list_url : "lists/media_list.js",
					elements : "nourlconvert",
					entity_encoding: "raw",
					convert_urls : false,
					language : "' .
             (file_exists(
            _PS_ROOT_DIR_ . '/js/tinymce/jscripts/tiny_mce/langs/' . $iso . '.js') ? $iso : 'en') . '"
				});
				id_language = Number(' . $defaultLanguage . ');
			</script>';
        }
        $values = Configuration::getInt('CUSTPRIV_MESSAGE');
        $content .= '
		<fieldset><legend><img src="../modules/' . $this->name . '/logo.gif" /> ' .
         $this->displayName . '</legend>
			<form action="' . htmlentities($_SERVER['REQUEST_URI']) . '" method="post">				
				<label>' . $this->l('Message for customer data privacy') . '</label>
				<div class="margin-form">';
        foreach ($languages as $language)
            $content .= '					
					<div id="ccont_' . $language['id_lang'] . '" style="display: ' .
             ($language['id_lang'] == $defaultLanguage ? 'block' : 'none') . ';float: left;">
						<textarea class="rte" cols="70" rows="30" id="custpriv_message_' .
             $language['id_lang'] . '" name="custpriv_message_' .
             $language['id_lang'] . '">' .
             (isset($values[$language['id_lang']]) ? $values[$language['id_lang']] : '') . '</textarea>
					</div>';
        $content .= $this->displayFlags($languages, $defaultLanguage, 'ccont', 
        'ccont', true) . '
					<div class="clear">
					</div>
					<p>
						' . $this->l(
        'Message that will be displayed in the account creation form.') . '<br />
						' .
         $this->l(
        'Tips: Remember that if the text is too long to be written directly in the form, you can add a link to one of your pages created via the CMS tab.') . '
					</p>
				</div>
				<div class="clear">&nbsp;</div>
				<div class="margin-form">
					<input type="submit" class="button" name="submitCustPrivMess" value="' .
         $this->l('Save') . '" />
				</div>
			</form>
		</fieldset>';
        return $content;
    }
    public function hookCreateAccountForm ($params)
    {
        if (! $this->active)
            return;
        global $smarty, $cookie;
        /* Languages preliminaries */
        $defaultLanguage = (int) (Configuration::get('PS_LANG_DEFAULT'));
        $languages = Language::getLanguages(false);
        $iso = Language::getIsoById((int) ($cookie->id_lang));
        $smarty->assign(
        array(
        'privacy_message' => Configuration::get('CUSTPRIV_MESSAGE', 
        (int) ($cookie->id_lang)), 
        'error_message' => $this->l(
        'Please agree with the customer data privacy by ticking the checkbox below.')));
        return $this->display(__FILE__, 'blockcustomerprivacy.tpl');
    }
}
