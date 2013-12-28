<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 19:53:20
         compiled from "/var/www/admincups/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10275934795267ff00c97f92-78990308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d86590fa7edd3a4e848e10fa6a9587bf0da004f' => 
    array (
      0 => '/var/www/admincups/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1382386720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10275934795267ff00c97f92-78990308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5267ff00cb42f9_61673721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5267ff00cb42f9_61673721')) {function content_5267ff00cb42f9_61673721($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>