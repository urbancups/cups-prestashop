<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:49
         compiled from "/var/www/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5925170965266c05da0fba5-75590168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49f425d8332529745e2a447108d590768634535e' => 
    array (
      0 => '/var/www/themes/default/mobile/page-title.tpl',
      1 => 1382390101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5925170965266c05da0fba5-75590168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c05da70087_92178979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c05da70087_92178979')) {function content_5266c05da70087_92178979($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>