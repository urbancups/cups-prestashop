<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:33:34
         compiled from "/var/www/themes/theme762/modules/blockpermanentlinks/blockpermanentlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718316430526d5c7e7a9c98-92638693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4027a2c124f961fc7cbfc4bf02d677ab0cc9d0b9' => 
    array (
      0 => '/var/www/themes/theme762/modules/blockpermanentlinks/blockpermanentlinks.tpl',
      1 => 1382895689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718316430526d5c7e7a9c98-92638693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d5c7e828f57_21830633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d5c7e828f57_21830633')) {function content_526d5c7e828f57_21830633($_smarty_tpl) {?>

<!-- Block permanent links module -->
<section id="permanent_links" class="block column_box">
<h4><span><?php echo smartyTranslate(array('s'=>'Link','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
<ul class="store_list toggle_content">
	<li class="sitemap"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap');?>
"><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li class="contact"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li class="add_bookmark"><script type="text/javascript">writeBookmarkLink('<?php echo $_smarty_tpl->tpl_vars['come_from']->value;?>
', '<?php echo addslashes(addslashes($_smarty_tpl->tpl_vars['meta_title']->value));?>
', '<?php echo smartyTranslate(array('s'=>'bookmark','mod'=>'blockpermanentlinks','js'=>1),$_smarty_tpl);?>
');</script></li>
</ul>
</section>
<!-- /Block permanent links module --><?php }} ?>