<?php /* Smarty version Smarty-3.1.14, created on 2013-10-28 23:19:08
         compiled from "/var/www/admincups/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228086210526ed4cc409e08-01524261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '359c9381c335fe3f046afb2e8be639f28d70590b' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1382386719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228086210526ed4cc409e08-01524261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ed4cc450383_97217390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ed4cc450383_97217390')) {function content_526ed4cc450383_97217390($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>