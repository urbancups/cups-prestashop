<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 20:06:02
         compiled from "/var/www/admincups/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1296583062526801fae83615-01904138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f9004cc2dc0553f9bb260644eb9c5ff1b245cbe' => 
    array (
      0 => '/var/www/admincups/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1382387067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296583062526801fae83615-01904138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526801faec9a76_26676769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526801faec9a76_26676769')) {function content_526801faec9a76_26676769($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;" href="#"><img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" /></a><?php }} ?>