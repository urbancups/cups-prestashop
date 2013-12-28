<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 21:33:26
         compiled from "/var/www/themes/theme762/modules/bankwire/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75831477252715f067709d6-74839468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5ac60232d7248313d0265f99b8f2cfddeb8970d' => 
    array (
      0 => '/var/www/themes/theme762/modules/bankwire/payment.tpl',
      1 => 1382895625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75831477252715f067709d6-74839468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52715f0678a220_14600625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52715f0678a220_14600625')) {function content_52715f0678a220_14600625($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment');?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="54"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p><?php }} ?>