<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 18:12:58
         compiled from "/var/www/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13474113665266c02ab4d1b6-81368800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0bb95bf87092718634dd5a54f144ed62c321a7b' => 
    array (
      0 => '/var/www/themes/default/mobile/index.tpl',
      1 => 1382390094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13474113665266c02ab4d1b6-81368800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266c02ab56862_79298487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c02ab56862_79298487')) {function content_5266c02ab56862_79298487($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>