<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:12:27
         compiled from "/var/www/admin/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175244145266c00b447cc0-75776288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '279e29c6e4fdff0f3b5e2a662454e3de074dea47' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/localization/content.tpl',
      1 => 1382386597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175244145266c00b447cc0-75776288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c00b46e767_35386738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c00b46e767_35386738')) {function content_5266c00b46e767_35386738($_smarty_tpl) {?>

<div class="width4">
	<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
</div>
<br />
<div class="width4">
	<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
</div><?php }} ?>