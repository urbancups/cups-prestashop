<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:12:53
         compiled from "/var/www/themes/theme762/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:417778651526d57a5ae9650-82749337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382b60ed778ded8ec1715a615c84be3ae02c4419' => 
    array (
      0 => '/var/www/themes/theme762/modules/blocksharefb/blocksharefb.tpl',
      1 => 1382895700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417778651526d57a5ae9650-82749337',
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
  'unifunc' => 'content_526d57a5b4fd49_21720736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d57a5b4fd49_21720736')) {function content_526d57a5b4fd49_21720736($_smarty_tpl) {?>
<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>