<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 15:43:23
         compiled from "/home/www/site2/themes/prestashop/footer.tpl" */?>
<?php /*%%SmartyHeaderCode:8225869714eba918bc59d48-59078067%%*/
if (! defined('SMARTY_DIR'))
    exit('no direct access allowed');
$_smarty_tpl->decodeProperties(
array(
'file_dependency' => array(
'7ad1a3b2a4d539826355fd9d8bf6680c1cce9e61' => array(
0 => '/home/www/site2/themes/prestashop/footer.tpl', 1 => 1306138304, 
2 => 'file')), 'nocache_hash' => '8225869714eba918bc59d48-59078067', 
'function' => array(), 'has_nocache_code' => false)); /*/%%SmartyHeaderCode%%*/?>


		<?php
if (! $_smarty_tpl->getVariable('content_only')->value) {
    ?>
</div>

<!-- Right -->
<div id="right_column" class="column">
					<?php
    echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;
    ?>

				</div>
</div>

<!-- Footer -->
<div id="footer"><?php
    echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;
    ?>
</div>
</div>
<?php
}
?>
</body>
</html>
