<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 16:01:00
         compiled from "/home/www/site2/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13638468244eba95accb4439-45608714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f0ed30bcc703aa1de1e0b073725e1e90d0a8ca' => 
    array (
      0 => '/home/www/site2/themes/prestashop/./category-count.tpl',
      1 => 1315934548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13638468244eba95accb4439-45608714',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>