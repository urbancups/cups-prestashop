<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:01:35
         compiled from "/var/www/modules/addsharethis/addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521817685526d54ff37a924-45305741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28bc500892dd23b928ea0446a83edd299f17c44' => 
    array (
      0 => '/var/www/modules/addsharethis/addsharethis_header.tpl',
      1 => 1382895867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521817685526d54ff37a924-45305741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d54ff419f77_18402575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d54ff419f77_18402575')) {function content_526d54ff419f77_18402575($_smarty_tpl) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />

<?php }} ?>