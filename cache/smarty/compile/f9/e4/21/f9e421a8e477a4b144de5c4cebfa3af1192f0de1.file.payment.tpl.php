<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 21:33:26
         compiled from "/var/www/themes/theme762/modules/cheque/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100994139552715f06705fd6-70570393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9e421a8e477a4b144de5c4cebfa3af1192f0de1' => 
    array (
      0 => '/var/www/themes/theme762/modules/cheque/payment.tpl',
      1 => 1382895734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100994139552715f06705fd6-70570393',
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
  'unifunc' => 'content_52715f0675fd10_81923921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52715f0675fd10_81923921')) {function content_52715f0675fd10_81923921($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="54" />
		<?php echo smartyTranslate(array('s'=>'Pay by check (order processing will take more time).','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>