<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 22:46:34
         compiled from "/var/www/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8524944945268279a084d17-27025103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8144e543b28fdbfa4264edc8f950bbd044669391' => 
    array (
      0 => '/var/www/modules/blocksharefb/blocksharefb.tpl',
      1 => 1382389217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8524944945268279a084d17-27025103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268279a0eda72_42223756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268279a0eda72_42223756')) {function content_5268279a0eda72_42223756($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>