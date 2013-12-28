<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:49
         compiled from "/var/www/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8145785835266c05d310b20-96079195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2032c9e9883fb135f1c92418e09c0c838c82dcfb' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1382386726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8145785835266c05d310b20-96079195',
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
  'unifunc' => 'content_5266c05d31ec72_25857495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c05d31ec72_25857495')) {function content_5266c05d31ec72_25857495($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/transfer_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>