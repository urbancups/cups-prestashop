<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:47:35
         compiled from "/var/www/admincups/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434298085526d5fc76a85b3-68609192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb2b46aa64f5be58199d0f8400eeaf9fbd9e2c5' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1382386721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434298085526d5fc76a85b3-68609192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d5fc76e2aa3_16795557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d5fc76e2aa3_16795557')) {function content_526d5fc76e2aa3_16795557($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>