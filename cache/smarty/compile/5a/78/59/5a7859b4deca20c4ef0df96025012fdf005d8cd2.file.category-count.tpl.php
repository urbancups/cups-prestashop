<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 21:37:07
         compiled from "/var/www/themes/theme762/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157824621752694a8c59cad9-10168965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a7859b4deca20c4ef0df96025012fdf005d8cd2' => 
    array (
      0 => '/var/www/themes/theme762/category-count.tpl',
      1 => 1382895407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157824621752694a8c59cad9-10168965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52694a8c604017_93445068',
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52694a8c604017_93445068')) {function content_52694a8c604017_93445068($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>