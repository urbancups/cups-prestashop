<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:42
         compiled from "/var/www/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5373553245266c0566f9d69-51317812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61acdbd278dba12a9d52dbcfdbab3a890548006e' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1382386725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5373553245266c0566f9d69-51317812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c05670c547_64230510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c05670c547_64230510')) {function content_5266c05670c547_64230510($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>