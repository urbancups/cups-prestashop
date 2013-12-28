<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 22:35:01
         compiled from "/var/www/admincups/themes/default/template/controllers/translations/helpers/view/translation_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1188799598526824e5a50bb3-84040312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5f1045722398c9f6b893d9bfc6774719128e07' => 
    array (
      0 => '/var/www/admincups/themes/default/template/controllers/translations/helpers/view/translation_errors.tpl',
      1 => 1382387080,
      2 => 'file',
    ),
    'fa06ede8d014160bacf3b5bf5106c9f83cb06a62' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/view/view.tpl',
      1 => 1382386738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188799598526824e5a50bb3-84040312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526824e5bf3582_70010687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526824e5bf3582_70010687')) {function content_526824e5bf3582_70010687($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/tools/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/tools/smarty/plugins/modifier.regex_replace.php';
?>

<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<div class="leadin"></div>



	<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)){?>
	<div class="warn">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type']=='suhosin'){?>
			<?php echo smartyTranslate(array('s'=>'Warning: Your hosting provider is using the suhosin patch for PHP, which limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>


			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.post.max_vars.'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.request.max_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase the suhosin limit to'),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for max_input_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase the this limit to'),$_smarty_tpl);?>

		<?php }?>
		<?php echo smartyTranslate(array('s'=>'%s at least or edit the translation file manually.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),$_smarty_tpl);?>

	</div>
	<?php }else{ ?>

		<div class="hint" style="display:block;">
			<?php echo smartyTranslate(array('s'=>'Some sentences to translate use this syntax: %s... These are variables, and PrestaShop take care of replacing them before displaying your translation. You must leave these in your translations, and place them appropriately in your sentence.','sprintf'=>'%d, %s, %1$s, %2$d'),$_smarty_tpl);?>

		</div><br /><br />

		<p>
			<?php echo smartyTranslate(array('s'=>'Expressions to translate: %d.','sprintf'=>$_smarty_tpl->tpl_vars['count']->value),$_smarty_tpl);?>
<br />
			<?php echo smartyTranslate(array('s'=>'Total missing expresssions: %d.','sprintf'=>array_sum($_smarty_tpl->tpl_vars['missing_translations']->value)),$_smarty_tpl);?>
<br />
		</p>

		<script type="text/javascript">
			$(document).ready(function(){
				$('a.useSpecialSyntax').click(function(){
					var syntax = $(this).find('img').attr('alt');
					$('#BoxUseSpecialSyntax .syntax span').html(syntax+".");
					$('#BoxUseSpecialSyntax').toggle(1000);
				});
				$('#BoxUseSpecialSyntax').click(function(){
					$('#BoxUseSpecialSyntax').toggle(1000);
				});
			});
		</script>

		<div id="BoxUseSpecialSyntax">
			<div class="warn">
				<p class="syntax">
					<?php echo smartyTranslate(array('s'=>'This expression uses this special syntax:'),$_smarty_tpl);?>
 <span>%d.</span><br />
					<?php echo smartyTranslate(array('s'=>'You must use this syntax in your translations. Here are several examples:'),$_smarty_tpl);?>

				</p>
				<ul>
					<li><em>There are <strong>%d</strong> products</em> ("<strong>%d</strong>" <?php echo smartyTranslate(array('s'=>'will be replaced by a number'),$_smarty_tpl);?>
).</li>
					<li><em>List of pages in <strong>%s</strong>:</em> ("<strong>%s</strong>" <?php echo smartyTranslate(array('s'=>'will be replaced by a string'),$_smarty_tpl);?>
).</li>
					<li><em>Feature: <strong>%1$s</strong> (<strong>%2$d</strong> values)</em> ("<strong>n$</strong>" <?php echo smartyTranslate(array('s'=>'is used for the order of the arguments'),$_smarty_tpl);?>
).</li>
				</ul>
			</div>
		</div>

		<form method="post" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" action="<?php echo $_smarty_tpl->tpl_vars['url_submit']->value;?>
" class="form">
			
			<input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
			<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
			<input type="hidden" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
			<input type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" value="<?php echo smartyTranslate(array('s'=>'Update translations'),$_smarty_tpl);?>
" class="button" />
			<br /><br />
			<table cellpadding="0" cellspacing="0" class="table">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errorsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr <?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])){?>style="background-color:#FBB"<?php }else{ ?><?php echo smarty_function_cycle(array('values'=>'class="alt_row",'),$_smarty_tpl);?>
<?php }?>>
					<td><?php echo stripslashes($_smarty_tpl->tpl_vars['key']->value);?>
</td>
					<td style="width: 430px">=
						<input type="text" name="<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'#"#','&quot;'));?>
" style="width: 380px">
						<?php if (isset($_smarty_tpl->tpl_vars['value']->value['use_sprintf'])&&$_smarty_tpl->tpl_vars['value']->value['use_sprintf']){?>
							<a class="useSpecialSyntax" title="<?php echo smartyTranslate(array('s'=>'This expression uses a special syntax:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
" style="cursor:pointer">
								<img src="<?php echo @constant('_PS_IMG_');?>
admin/error.png" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
" />
							</a>
						<?php }?>
					</td>
				</tr>
			<?php } ?>
			</table>
		</form>
	<?php }?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }elseif(isset($_GET['controller'])){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>