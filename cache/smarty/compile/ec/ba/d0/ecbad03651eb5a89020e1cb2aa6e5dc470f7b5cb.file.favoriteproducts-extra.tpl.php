<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:12:53
         compiled from "/var/www/themes/theme762/modules/favoriteproducts/favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1588598940526d57a5bf3012-93190277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecbad03651eb5a89020e1cb2aa6e5dc470f7b5cb' => 
    array (
      0 => '/var/www/themes/theme762/modules/favoriteproducts/favoriteproducts-extra.tpl',
      1 => 1382895740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1588598940526d57a5bf3012-93190277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d57a5c1c6b7_85773776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d57a5c1c6b7_85773776')) {function content_526d57a5c1c6b7_85773776($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_add" class="add favorite">
	<i class="icon-heart-empty"></i><?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_remove" class="favorite">
	<i class="icon-heart-empty"></i><?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added" class="favorite">
	<i class="icon-heart"></i><?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed" class="favorite">
	<i class="icon-heart-empty"></i><?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>