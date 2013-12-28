<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:12:30
         compiled from "/var/www/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1284027875266c00ee80da9-72329766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab8ff8830b74cd1936ca44c2b2a792bb9a227b6' => 
    array (
      0 => '/var/www/themes/default/category-count.tpl',
      1 => 1382390004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1284027875266c00ee80da9-72329766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c00eee6432_30769437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c00eee6432_30769437')) {function content_5266c00eee6432_30769437($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>