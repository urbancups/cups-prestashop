<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 22:48:29
         compiled from "/var/www/admincups/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15267200275271709d8139f5-43711657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da5fa2e164a17fdbc8e670602fe74456e6ce346c' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1382386726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15267200275271709d8139f5-43711657',
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
  'unifunc' => 'content_5271709d825587_50129232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271709d825587_50129232')) {function content_5271709d825587_50129232($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/transfer_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>