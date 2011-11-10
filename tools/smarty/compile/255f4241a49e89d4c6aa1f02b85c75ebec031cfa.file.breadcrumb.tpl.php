<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 15:44:49
         compiled from "/home/www/site2/themes/prestashop/./breadcrumb.tpl" */?>
<?php /*%%SmartyHeaderCode:13649142104eba91e18db085-84412499%%*/
if (! defined('SMARTY_DIR'))
    exit('no direct access allowed');
$_smarty_tpl->decodeProperties(
array(
'file_dependency' => array(
'255f4241a49e89d4c6aa1f02b85c75ebec031cfa' => array(
0 => '/home/www/site2/themes/prestashop/./breadcrumb.tpl', 1 => 1306138304, 
2 => 'file')), 'nocache_hash' => '13649142104eba91e18db085-84412499', 
'function' => array(), 'has_nocache_code' => false)); /*/%%SmartyHeaderCode%%*/?>
<?php

if (! is_callable('smarty_modifier_escape'))
    include '/home/www/site2/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Breadcrumb -->
<?php
if (isset(Smarty::$_smarty_vars['capture']['path'])) {
    ?><?php

    $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(
    Smarty::$_smarty_vars['capture']['path'], null, null);
    ?><?php
}
?>
<div class="breadcrumb"><a
	href="<?php
echo $_smarty_tpl->getVariable('base_dir')->value;
?>
"
	title="<?php
echo smartyTranslate(array('s' => 'return to'), $_smarty_tpl);
?>
 <?php
echo smartyTranslate(array('s' => 'Home'), $_smarty_tpl);
?>
"><?php
echo smartyTranslate(array('s' => 'Home'), $_smarty_tpl);
?>
</a><?php
if (isset($_smarty_tpl->getVariable('path', null, true, false)->value) &&
 $_smarty_tpl->getVariable('path')->value) {
    ?><span
	class="navigation-pipe"><?php
    echo smarty_modifier_escape(
    $_smarty_tpl->getVariable('navigationPipe')->value, 'html', 'UTF-8');
    ?>
</span><?php
    if (! strpos($_smarty_tpl->getVariable('path')->value, 'span')) {
        ?><span
	class="navigation_page"><?php
        echo $_smarty_tpl->getVariable('path')->value;
        ?>
</span><?php
    } else {
        ?><?php

        echo $_smarty_tpl->getVariable('path')->value;
        ?>
<?php
    }
    ?><?php
}
?>
</div>
<!-- /Breadcrumb -->