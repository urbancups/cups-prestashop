<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:12:45
         compiled from "/var/www/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6001211045266c01d148515-24387167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7275e849e264c66d6f8033511a5a455a4f3fb2' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1382386652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6001211045266c01d148515-24387167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'selected_tree_id' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c01d321cf8_08530132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c01d321cf8_08530132')) {function content_5266c01d321cf8_08530132($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['toolbar_btn']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<div class="multishop-left">
	<div class="multishop-title"><?php echo smartyTranslate(array('s'=>'Multistore tree'),$_smarty_tpl);?>
</div>
	<?php echo $_smarty_tpl->getSubTemplate ("controllers/shop/tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('selected_tree_id'=>$_smarty_tpl->tpl_vars['selected_tree_id']->value), 0);?>

</div>
<div class="multishop-right"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>

<script type="text/javascript">
	$().ready(function(){
		if (parseInt($('.multishop-right').css('height')) > 200)
			$('.multishop-left').css('height', $('.multishop-right').css('height'));
	})
</script><?php }} ?>