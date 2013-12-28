<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:49
         compiled from "/var/www/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18087489135266c05d322a94-81999746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9273457365a4250d63dfe79d8b14e6e88b79ffc3' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1382386719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18087489135266c05d322a94-81999746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c05d3fdfb9_34264705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c05d3fdfb9_34264705')) {function content_5266c05d3fdfb9_34264705($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>