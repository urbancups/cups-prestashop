<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:42
         compiled from "/var/www/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19608081485266c05636a572-67960701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '315081c2be1012f565b3bb6054e65e5628367d2f' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1382386726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19608081485266c05636a572-67960701',
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
  'unifunc' => 'content_5266c0566f6cb1_95344045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c0566f6cb1_95344045')) {function content_5266c0566f6cb1_95344045($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>