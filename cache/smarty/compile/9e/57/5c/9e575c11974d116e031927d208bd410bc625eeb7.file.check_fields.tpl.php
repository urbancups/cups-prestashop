<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:13:03
         compiled from "/var/www/admin/themes/default/template/controllers/products/multishop/check_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5496195295266c02f31b372-91188031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e575c11974d116e031927d208bd410bc625eeb7' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/products/multishop/check_fields.tpl',
      1 => 1382386808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5496195295266c02f31b372-91188031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'product_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c02f6b4308_43694530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c02f6b4308_43694530')) {function content_5266c02f6b4308_43694530($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value){?>
	<label style="float: none">
		<input type="checkbox" style="vertical-align: text-bottom" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', this.checked); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()" />
		<?php echo smartyTranslate(array('s'=>'Check/uncheck all. (If you are editing this page for several shops, some fields like "name" or "price" are may be disabled. You will need check these fields in order to edit them)'),$_smarty_tpl);?>

	</label>
<?php }?><?php }} ?>