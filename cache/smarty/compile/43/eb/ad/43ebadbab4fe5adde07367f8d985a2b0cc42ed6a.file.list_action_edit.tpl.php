<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:42
         compiled from "/var/www/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12907412635266c05635a3d2-14093257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ebadbab4fe5adde07367f8d985a2b0cc42ed6a' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1382386721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12907412635266c05635a3d2-14093257',
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
  'unifunc' => 'content_5266c056368b65_26385117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c056368b65_26385117')) {function content_5266c056368b65_26385117($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>