<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:09
         compiled from "/var/www/themes/default/mobile/product-quantity-discount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16514480795266c035043fe7-52586422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a8a740e5f14316f6bcbf177eef2185000ab962' => 
    array (
      0 => '/var/www/themes/default/mobile/product-quantity-discount.tpl',
      1 => 1382390105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16514480795266c035043fe7-52586422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'quantity_discounts' => 0,
    'quantity_discount' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c035cd9bd2_46498476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c035cd9bd2_46498476')) {function content_5266c035cd9bd2_46498476($_smarty_tpl) {?>

<?php if ((isset($_smarty_tpl->tpl_vars['quantity_discounts']->value)&&count($_smarty_tpl->tpl_vars['quantity_discounts']->value)>0)){?>
<!-- quantity discount -->
<ul class="idTabs clearfix">
	<li><a href="#discount" style="cursor: pointer" class="selected" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Sliding scale pricing'),$_smarty_tpl);?>
</a></li>
</ul>
<div id="quantityDiscount">
	<table class="std">
		<thead>
			<tr>
				<th><?php echo smartyTranslate(array('s'=>'product'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'from (qty)'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'discount'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<tr id="noQuantityDiscount">
				<td colspan='3'><?php echo smartyTranslate(array('s'=>'There is no quantity discount for this product.'),$_smarty_tpl);?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quantity_discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value){
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
			<tr id="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
">
				<td>
					<?php if ((isset($_smarty_tpl->tpl_vars['quantity_discount']->value['attributes'])&&($_smarty_tpl->tpl_vars['quantity_discount']->value['attributes']))){?>
						<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductName($_smarty_tpl->tpl_vars['quantity_discount']->value['id_product'],$_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute']);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductName($_smarty_tpl->tpl_vars['quantity_discount']->value['id_product']);?>

					<?php }?>
				</td>
				<td><?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']!=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount'){?>
						-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

					<?php }else{ ?>
						-<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
					<?php }?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php }?>
<?php }} ?>