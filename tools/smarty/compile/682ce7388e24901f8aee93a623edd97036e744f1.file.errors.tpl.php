<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 15:44:49
         compiled from "/home/www/site2/themes/prestashop/./errors.tpl" */?>
<?php /*%%SmartyHeaderCode:17780869594eba91e191b201-67664106%%*/
if (! defined('SMARTY_DIR'))
    exit('no direct access allowed');
$_smarty_tpl->decodeProperties(
array(
'file_dependency' => array(
'682ce7388e24901f8aee93a623edd97036e744f1' => array(
0 => '/home/www/site2/themes/prestashop/./errors.tpl', 1 => 1313502128, 
2 => 'file')), 'nocache_hash' => '17780869594eba91e191b201-67664106', 
'function' => array(), 'has_nocache_code' => false)); /*/%%SmartyHeaderCode%%*/?>
<?php

if (! is_callable('smarty_modifier_escape'))
    include '/home/www/site2/tools/smarty/plugins/modifier.escape.php';
?>

<?php
if (isset($_smarty_tpl->getVariable('errors', null, true, false)->value) &&
 $_smarty_tpl->getVariable('errors')->value) {
    ?>
<div class="error">
<p><?php
    if (count($_smarty_tpl->getVariable('errors')->value) > 1) {
        ?><?php

        echo smartyTranslate(array('s' => 'There are'), $_smarty_tpl);
        ?>
<?php
    } else {
        ?><?php

        echo smartyTranslate(array('s' => 'There is'), $_smarty_tpl);
        ?>
<?php
    }
    ?> <?php
    echo count($_smarty_tpl->getVariable('errors')->value);
    ?>
 <?php
    if (count($_smarty_tpl->getVariable('errors')->value) > 1) {
        ?><?php

        echo smartyTranslate(array('s' => 'errors'), $_smarty_tpl);
        ?>
<?php
    } else {
        ?><?php

        echo smartyTranslate(array('s' => 'error'), $_smarty_tpl);
        ?>
<?php
    }
    ?> :</p>
<ol>
		<?php
    $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
    $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
    $_from = $_smarty_tpl->getVariable('errors')->value;
    if (! is_array($_from) && ! is_object($_from)) {
        settype($_from, 'array');
    }
    if ($_smarty_tpl->_count($_from) > 0) {
        foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
            $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
            ?>
			<li><?php
            echo $_smarty_tpl->tpl_vars['error']->value;
            ?>
</li>
		<?php
        }
    }
    ?>
		</ol>
		<?php
    if (isset($_SERVER['HTTP_REFERER']) &&
     ! strstr($_smarty_tpl->getVariable('request_uri')->value, 'authentication') &&
     preg_replace('#^https?://[^/]+/#', '/', $_SERVER['HTTP_REFERER']) !=
     $_smarty_tpl->getVariable('request_uri')->value) {
        ?>
			<p class="align_right"><a
	href="<?php
        echo Tools::secureReferrer(
        smarty_modifier_escape($_SERVER['HTTP_REFERER'], 'htmlall', 'UTF-8'));
        ?>
"
	class="button_small"
	title="<?php
        echo smartyTranslate(array('s' => 'Back'), $_smarty_tpl);
        ?>
">&laquo; <?php
        echo smartyTranslate(array('s' => 'Back'), $_smarty_tpl);
        ?>
</a></p>
		<?php
    }
    ?>
	</div>
<?php
}
?>