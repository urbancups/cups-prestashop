<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 19:43:04
         compiled from "/var/www/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10512633355267fc9885fa62-35196877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66933d3b214ee5f248f02ed638dc72a964547d0d' => 
    array (
      0 => '/var/www/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1382389242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10512633355267fc9885fa62-35196877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5267fc988c6305_55140967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5267fc988c6305_55140967')) {function content_5267fc988c6305_55140967($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	
	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
<?php }?><?php }} ?>