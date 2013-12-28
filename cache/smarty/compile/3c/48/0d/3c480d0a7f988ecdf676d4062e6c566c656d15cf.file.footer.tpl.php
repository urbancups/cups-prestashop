<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 19:58:36
         compiled from "/var/www/themes/theme762/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20381318245269401fc75cc4-30305910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c480d0a7f988ecdf676d4062e6c566c656d15cf' => 
    array (
      0 => '/var/www/themes/theme762/footer.tpl',
      1 => 1382895410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20381318245269401fc75cc4-30305910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5269401fcaff01_45996914',
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'RightColumn' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269401fcaff01_45996914')) {function content_5269401fcaff01_45996914($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&(str_replace(" ",'',$_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value))!=''){?><?php $_smarty_tpl->tpl_vars['RightColumn'] = new Smarty_variable(3, null, 0);?><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['RightColumn']->value)&&$_smarty_tpl->tpl_vars['RightColumn']->value!=0){?>
<aside id="right_column"  class="span3 column right_home">   
              <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</aside>
<?php }?>
</div>
</div>
	</div>
    	</div>
<div class="footer-bg-mob">
    <footer class="container ">
       <div class="row modules">
           <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

      </div>
    </footer> 
</div>          
	</div>
</div>
		</div>
    <div id="toTop"></div>
  <?php }?>
</body>
</html>
<?php }} ?>