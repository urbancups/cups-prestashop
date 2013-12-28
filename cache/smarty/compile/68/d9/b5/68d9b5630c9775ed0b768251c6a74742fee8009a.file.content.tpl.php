<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:22
         compiled from "/var/www/admin/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6003024955266c0428b9c96-98666911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68d9b5630c9775ed0b768251c6a74742fee8009a' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1382386569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6003024955266c0428b9c96-98666911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c042c1efa9_45281213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c042c1efa9_45281213')) {function content_5266c042c1efa9_45281213($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>