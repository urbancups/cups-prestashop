<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:12:53
         compiled from "/var/www/modules/addsharethis/addsharethis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:535667991526d57a5c23093-76359554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '870b9a2fed756aac0cd02de19f5b0e7f54868263' => 
    array (
      0 => '/var/www/modules/addsharethis/addsharethis.tpl',
      1 => 1382895866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '535667991526d57a5c23093-76359554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'addsharethis_data' => 0,
    'conf_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d57a5c93a86_75598964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d57a5c93a86_75598964')) {function content_526d57a5c93a86_75598964($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
css/addsharethis.css"/>
<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value)){?>
<div id="ShareDiv" class="addsharethis">
<div class="addsharethisinner">
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    
    <script type="text/javascript">stLight.options({publisher: "<?php echo $_smarty_tpl->tpl_vars['conf_row']->value;?>
", nativeCount:true });</script>
    
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['google'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['google'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'];?>

	<?php }?>
</div>
</div>
<?php }?>

<?php }} ?>