<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 19:58:36
         compiled from "/var/www/themes/theme762/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14180280585269401fa5d160-53329614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a0483ac2a646d5419a1be808a3ade685369b1d' => 
    array (
      0 => '/var/www/themes/theme762/layout.tpl',
      1 => 1382895413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14180280585269401fa5d160-53329614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5269401fa8b7e1_63607585',
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269401fa8b7e1_63607585')) {function content_5269401fa8b7e1_63607585($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?><?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>
<?php }?><?php }} ?>