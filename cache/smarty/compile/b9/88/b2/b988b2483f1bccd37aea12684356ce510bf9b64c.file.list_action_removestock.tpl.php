<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 22:48:29
         compiled from "/var/www/admincups/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8173333745271709d7b9352-71473597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b988b2483f1bccd37aea12684356ce510bf9b64c' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1382386722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8173333745271709d7b9352-71473597',
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
  'unifunc' => 'content_5271709d80da40_80983485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271709d80da40_80983485')) {function content_5271709d80da40_80983485($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>