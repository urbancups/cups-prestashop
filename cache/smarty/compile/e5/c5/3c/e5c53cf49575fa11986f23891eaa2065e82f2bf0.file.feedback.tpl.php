<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:02:59
         compiled from "/var/www/modules/minicslider/views/templates/admin/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116603429526d555319d578-60286798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c53cf49575fa11986f23891eaa2065e82f2bf0' => 
    array (
      0 => '/var/www/modules/minicslider/views/templates/admin/feedback.tpl',
      1 => 1382895979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116603429526d555319d578-60286798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'minic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d555320f7d4_73125642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d555320f7d4_73125642')) {function content_526d555320f7d4_73125642($_smarty_tpl) {?><div id="feedback" class="minic-container">
	<form id="form-feed" class="" method="post">
        <div class="minic-top">
            <h3><?php echo smartyTranslate(array('s'=>'Feedback','mod'=>'minicslider'),$_smarty_tpl);?>

                <a href="http://module.minic.ro/how-to-use-feedback-and-bug-report-in-our-modules/" target="_blank" class="help"><?php echo smartyTranslate(array('s'=>'help & tips','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
            </h3>
            <a href="#feedback" class="minic-close">x</a>
        </div>
        <div class="minic-content">
            <!-- Response -->
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>'feedback'), 0);?>

    		<div class="input-holder">
    			<label><?php echo smartyTranslate(array('s'=>'Your name','mod'=>'minicslider'),$_smarty_tpl);?>
:</label>
    			<input id="feedback-name" class="name" type="text" name="name" placeholder="John Doe" value="" />
    		</div>
    		<div class="input-holder">
    			<label><?php echo smartyTranslate(array('s'=>'Your email','mod'=>'minicslider'),$_smarty_tpl);?>
:</label>
    			<input id="feedback-email" class="" type="text" name="email" placeholder="example@example.com" value="<?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['email'];?>
" />
    		</div>
    		<div class="input-holder">
    			<label><?php echo smartyTranslate(array('s'=>'Site address','mod'=>'minicslider'),$_smarty_tpl);?>
:</label>
    			<input id="feedback-domain" class="" type="text" name="domain" placeholder="mydomain.com" value="<?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['domain'];?>
" />
    		</div>
            <div class="input-holder">
                <label><?php echo smartyTranslate(array('s'=>'Message','mod'=>'minicslider'),$_smarty_tpl);?>
:</label>
                <textarea id="feedback-message" class="" name="message" placeholder="Your message, request, suggestion, etc." rows="10" cols="49"></textarea>
            </div>
            <div class="minic-comments"> 
                <h3><?php echo smartyTranslate(array('s'=>'Notes','mod'=>'minicslider'),$_smarty_tpl);?>
</h3>
                <p><?php echo smartyTranslate(array('s'=>'Feel free to give us a feedback about our work (we really like to hear few good words) or write down your idea / request and if we think its good we`ll concider to implement into future versions.','mod'=>'minicslider'),$_smarty_tpl);?>
</p>
                <h3><?php echo smartyTranslate(array('s'=>'Important!','mod'=>'minicslider'),$_smarty_tpl);?>
</h3>
                <p><?php echo smartyTranslate(array('s'=>'By clicking to the "Send" button you agree that we will get some basic information. If you do not wish to send your e-mail address uncheck the checkbox.','mod'=>'minicslider'),$_smarty_tpl);?>
</p>
                <ul>
                    <li><?php echo smartyTranslate(array('s'=>'By default this is the shop email address, feel free to modify.'),$_smarty_tpl);?>
: <span><?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['email'];?>
</span></li>
                    <li><?php echo smartyTranslate(array('s'=>'Your shops domain','mod'=>'minicslider'),$_smarty_tpl);?>
: <span><?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['domain'];?>
</span></li>
                    <li><?php echo smartyTranslate(array('s'=>'Prestashop version','mod'=>'minicslider'),$_smarty_tpl);?>
: <span><?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['psVersion'];?>
</span></li>
                    <li><?php echo smartyTranslate(array('s'=>'Module version','mod'=>'minicslider'),$_smarty_tpl);?>
: <span><?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['version'];?>
</span></li>
                </ul>
            </div>
        </div>
        <div class="minic-bottom">
            <a href="#feedback" id="send-feedback" class="button-large green"><?php echo smartyTranslate(array('s'=>'Send','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
            <a href="#feedback" class="minic-close button-large lgrey"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
        </div>
	</form>
</div><?php }} ?>