<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:47
         compiled from "/var/www/themes/default/mobile/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18767873315266c05b2ea6e8-66523849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9534701238377de3cb49460c7a500b399fa0ea03' => 
    array (
      0 => '/var/www/themes/default/mobile/category.tpl',
      1 => 1382390091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18767873315266c05b2ea6e8-66523849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'categoryNameComplement' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c05c1fed15_55500453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c05c1fed15_55500453')) {function content_5266c05c1fed15_55500453($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['category']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active){?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?>
	<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value->name, 'htmlall', 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categoryNameComplement']->value, 'htmlall', 'UTF-8');?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div data-role="content" id="content">
		<?php if ($_smarty_tpl->tpl_vars['category']->value->description){?>
			<div class="category_desc clearfix">
				<?php if (!empty($_smarty_tpl->tpl_vars['category']->value->short_description)){?>
					<p><?php echo $_smarty_tpl->tpl_vars['category']->value->short_description;?>
</p>
					<p class="hide_desc"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</p>
					<a href="#" data-theme="a" data-role="button" data-mini="true" data-inline="true" data-icon="arrow-d" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide(); return false;" data-ajax="false"><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</a>
				<?php }else{ ?>
					<p><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</p>
				<?php }?>
			</div>
			<hr class="margin_less"/>
		<?php }?>
		<div class="clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ("./category-product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('container_class'=>"container-sort"), 0);?>

			<p class="nbr_result"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</p>
		</div>
		<hr class="margin_less"/>
		
		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("./category-product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }elseif($_smarty_tpl->tpl_vars['category']->value->id){?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div><!-- #content -->
<?php }?>
<?php }} ?>