<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:02:59
         compiled from "/var/www/modules/minicslider/views/templates/admin/popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:338133662526d55537099d9-95358887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fccb4f3eca40a4c6079b1b45e0d8efd291b2da05' => 
    array (
      0 => '/var/www/modules/minicslider/views/templates/admin/popup.tpl',
      1 => 1382895982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338133662526d55537099d9-95358887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newsletter' => 0,
    'minic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d5553746f86_00660465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d5553746f86_00660465')) {function content_526d5553746f86_00660465($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['newsletter']->value){?>
<div id="newsletter" class="popup">
	<div class="inner">
	    <div class="header">
	        <h4><?php echo smartyTranslate(array('s'=>'Help Us!','mod'=>'minicslider'),$_smarty_tpl);?>
</h4> <!-- Title -->
	        <span class="close-popup" data-popup="#newsletter">x</span> <!-- Close Button -->
	    </div>
	    <div class="popup-content"> <!-- Content -->
	        <div class="container"> <!-- Container -->
	            <p><?php echo smartyTranslate(array('s'=>'By clicking to the YES button you agree to share some basic information with us.','mod'=>'minicslider'),$_smarty_tpl);?>
</p>
	            <p><b><?php echo smartyTranslate(array('s'=>'Don`t worry we`ll be discrete with this information','mod'=>'minicslider'),$_smarty_tpl);?>
:</b></p>
	            <ul>
	                <li><?php echo smartyTranslate(array('s'=>'Domain','mod'=>'minicslider'),$_smarty_tpl);?>
: <b><?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['domain'];?>
</b></li>
	                <li><?php echo smartyTranslate(array('s'=>'Version','mod'=>'minicslider'),$_smarty_tpl);?>
: <b><?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['version'];?>
</b></li>
	                <li><?php echo smartyTranslate(array('s'=>'PS Version','mod'=>'minicslider'),$_smarty_tpl);?>
: <b><?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['psVersion'];?>
</b></li>
	            </ul>
	            <form>
	                <p><?php echo smartyTranslate(array('s'=>'If you want to riecive news about our updates, new modules, give us your e-mail address.','mod'=>'minicslider'),$_smarty_tpl);?>
</p>
	                <div>
	                    <label><?php echo smartyTranslate(array('s'=>'Email','mod'=>'minicslider'),$_smarty_tpl);?>
:</label>
	                    <input type="text" id="sendInfoEmail" name="infoEmail" />
	                </div>  
	            </form>
	            <h3><?php echo smartyTranslate(array('s'=>'Thank you for your help!','mod'=>'minicslider'),$_smarty_tpl);?>
</h3>
	        </div> <!-- /END Container -->
	        <div class="buttons"> <!-- Buttons Holder -->
	            <a href="#" id="sendInfo" class="submit-popup button-small green" data-popup="#newsletter"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'minicslider'),$_smarty_tpl);?>
</a>  <!-- Action Button -->
	            <a href="#" id="cancelInfo" class="close-popup button-small grey" data-popup="#newsletter"><?php echo smartyTranslate(array('s'=>'No','mod'=>'minicslider'),$_smarty_tpl);?>
</a>  <!-- Close Button -->
	        </div> <!-- /END Buttons Holder -->
	    </div> <!-- /END Content -->
	</div>
</div>
<?php }?><?php }} ?>