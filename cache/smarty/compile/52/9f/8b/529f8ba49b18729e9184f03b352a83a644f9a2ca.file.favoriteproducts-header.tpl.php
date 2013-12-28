<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 19:58:33
         compiled from "/var/www/themes/theme762/modules/favoriteproducts/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5256772245269401e25ee81-66465788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '529f8ba49b18729e9184f03b352a83a644f9a2ca' => 
    array (
      0 => '/var/www/themes/theme762/modules/favoriteproducts/favoriteproducts-header.tpl',
      1 => 1382895741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5256772245269401e25ee81-66465788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5269401e3e8369_76596549',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269401e3e8369_76596549')) {function content_5269401e3e8369_76596549($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>