<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:12:45
         compiled from "/var/www/admin/themes/default/template/controllers/shop/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21022171025266c01d324978-71857980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f52287495b6994480386dcf811d2cf477cabd0c' => 
    array (
      0 => '/var/www/admin/themes/default/template/controllers/shop/tree.tpl',
      1 => 1382386654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21022171025266c01d324978-71857980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_tree_id' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c01e231d66_45342645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c01e231d66_45342645')) {function content_5266c01e231d66_45342645($_smarty_tpl) {?>

<ul id="multishop-tree">
</ul>

<script type="text/javascript">
function check_selected_tree_node(d)
{
	<?php if (isset($_smarty_tpl->tpl_vars['selected_tree_id']->value)){?>
		$.each(d, function(k, v)
		{
			if (v.attr.id == '<?php echo $_smarty_tpl->tpl_vars['selected_tree_id']->value;?>
')
			{
				setTimeout(function()
				{
					$('#<?php echo $_smarty_tpl->tpl_vars['selected_tree_id']->value;?>
').children('a').addClass('selected');
				}, 100);
			}

			if (v.children)
			{
				check_selected_tree_node(v.children);
			}
		});
	<?php }?>
}

function customMenu(node)
{
	var node_id = node.attr('id');

	// Click on a group
	if (new RegExp(/^tree-group-[0-9]+$/).exec(node_id))
	{
		var id = node_id.substr(11);
		return {
			"edit_shop_group" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Edit this shop group'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/edit.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopGroup');?>
&updateshop_group&id_shop_group='+id;
				}
			},
			"add_shop_group" : {
				"separator_before"	: false,
				"separator_after"	: false,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add a new shop group'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopGroup');?>
&addshop_group';
				}
			},
			"add_shop" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&addshop&id_shop_group='+id;
				}
			}
		};
	}
	// Click on a shop
	else if (new RegExp(/^tree-shop-[0-9]+$/).exec(node_id))
	{
		var id = node_id.substr(10);
		var id_parent = node.parent().parent().attr('id').substr(11);
		return {
			"edit_shop" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Edit this shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/edit.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&updateshop&id_shop='+id;
				}
			},
			"add_shop" : {
				"separator_before"	: false,
				"separator_after"	: false,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&addshop&id_shop_group='+id_parent;
				}
			},
			"add_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&addshop_url&id_shop='+id;
				}
			}
		};
	}
	// Click on an URL
	else if (new RegExp(/^tree-url-[0-9]+$/).exec(node_id))
	{
		var id = node_id.substr(9);
		var id_parent = node.parent().parent().attr('id').substr(10);
		return {
			"edit_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Edit this URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/edit.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&updateshop_url&id_shop_url='+id;
				}
			},
			"add_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&addshop_url&id_shop='+id_parent;
				}
			}
		};
	}
	// Click on root node
	else
	{
		return {
			"add_shop_group" : {
				"separator_before"	: false,
				"separator_after"	: false,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add a new shop group'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopGroup');?>
&addshop_group';
				}
			},
			"add_shop" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&addshop';
				}
			},
			"add_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&addshop_url';
				}
			}
		};
	}
}

$("#multishop-tree").jstree({
	'plugins': ["themes","json_data","cookies","contextmenu"],
	'json_data': {
		'ajax': {
			'url': "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop'));?>
",
			'data': function(n)
			{
				return {
					'ajax': 'true',
					'action': 'tree',
					'id': n.attr ? n.attr('id').replace(/tree-(group|shop|url)-/i, '') : '0'
				};
			},
			'success': check_selected_tree_node
		}
	},
	'cookies': {
		'save_selected': false
	},
	'core': {
		'html_titles': true,
		'animation': 300
	},
	'contextmenu': {
		items : customMenu
	},
	'themes': {
		'theme': 'classic'
	}
});
</script><?php }} ?>