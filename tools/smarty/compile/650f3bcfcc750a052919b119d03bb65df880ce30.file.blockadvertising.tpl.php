<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 15:43:23
         compiled from "/home/www/site2/modules/blockadvertising/blockadvertising.tpl" */?>
<?php /*%%SmartyHeaderCode:2192267074eba918b33a813-05045254%%*/
if (! defined('SMARTY_DIR'))
    exit('no direct access allowed');
$_smarty_tpl->decodeProperties(
array(
'file_dependency' => array(
'650f3bcfcc750a052919b119d03bb65df880ce30' => array(
0 => '/home/www/site2/modules/blockadvertising/blockadvertising.tpl', 
1 => 1308042146, 2 => 'file')), 
'nocache_hash' => '2192267074eba918b33a813-05045254', 
'function' => array(), 'has_nocache_code' => false)); /*/%%SmartyHeaderCode%%*/?>


<!-- MODULE Block advertising -->
<div class="advertising_block"><a
	href="<?php
echo $_smarty_tpl->getVariable('adv_link')->value;
?>
"
	title="<?php
echo $_smarty_tpl->getVariable('adv_title')->value;
?>
"><img src="<?php
echo $_smarty_tpl->getVariable('image')->value;
?>
"
	alt="<?php
echo $_smarty_tpl->getVariable('adv_title')->value;
?>
"
	title="<?php
echo $_smarty_tpl->getVariable('adv_title')->value;
?>
"
	width="155" height="163" /></a></div>
<!-- /MODULE Block advertising -->
