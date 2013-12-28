<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 20:47:52
         compiled from "/var/www/admincups/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102384628952680bc8e29e54-75025655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb7ee4f4559475cb496b04994fd26db20482086' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1382386726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102384628952680bc8e29e54-75025655',
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
  'unifunc' => 'content_52680bc8e38043_16319676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52680bc8e38043_16319676')) {function content_52680bc8e38043_16319676($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>