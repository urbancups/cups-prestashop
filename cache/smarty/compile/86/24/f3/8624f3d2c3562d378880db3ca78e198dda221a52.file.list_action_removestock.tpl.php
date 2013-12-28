<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:41
         compiled from "/var/www/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3036228035266c055ef71c3-04823100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8624f3d2c3562d378880db3ca78e198dda221a52' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1382386722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3036228035266c055ef71c3-04823100',
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
  'unifunc' => 'content_5266c055f05ae2_71102932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c055f05ae2_71102932')) {function content_5266c055f05ae2_71102932($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>