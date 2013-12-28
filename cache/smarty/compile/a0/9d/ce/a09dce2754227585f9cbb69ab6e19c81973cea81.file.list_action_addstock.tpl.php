<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:49
         compiled from "/var/www/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17548913525266c05d400ad5-59141094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09dce2754227585f9cbb69ab6e19c81973cea81' => 
    array (
      0 => '/var/www/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1382386719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17548913525266c05d400ad5-59141094',
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
  'unifunc' => 'content_5266c05d40eee0_81128390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c05d40eee0_81128390')) {function content_5266c05d40eee0_81128390($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>