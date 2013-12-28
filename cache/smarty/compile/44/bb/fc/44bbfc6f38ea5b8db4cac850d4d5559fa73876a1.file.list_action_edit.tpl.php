<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 19:53:20
         compiled from "/var/www/admincups/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13192026825267ff00c84995-10917668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44bbfc6f38ea5b8db4cac850d4d5559fa73876a1' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1382386721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13192026825267ff00c84995-10917668',
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
  'unifunc' => 'content_5267ff00c95008_27115069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5267ff00c95008_27115069')) {function content_5267ff00c95008_27115069($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>