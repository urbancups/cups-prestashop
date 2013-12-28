<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:02:59
         compiled from "/var/www/modules/minicslider/views/templates/admin/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:463776738526d5553226409-49263758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65668d7fee25fcb60ce179f12dab32ea12c024d5' => 
    array (
      0 => '/var/www/modules/minicslider/views/templates/admin/messages.tpl',
      1 => 1382895980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '463776738526d5553226409-49263758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d555324c450_40107737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d555324c450_40107737')) {function content_526d555324c450_40107737($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)){?>style="display:none;"<?php }?> class="message <?php if (isset($_smarty_tpl->tpl_vars['class']->value)){?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">
	<div class="content"><?php if (isset($_smarty_tpl->tpl_vars['text']->value)){?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php }?></div>
	<span class="close"><i class="icon-remove-circle"></i></span>
</div><?php }} ?>