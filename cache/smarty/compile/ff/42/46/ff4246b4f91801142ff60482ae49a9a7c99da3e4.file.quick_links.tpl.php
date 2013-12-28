<?php /* Smarty version Smarty-3.1.14, created on 2013-11-03 21:21:52
         compiled from "/var/www/modules/minicslider/views/templates/hooks/quick_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2149977885276a250941a72-57232916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4246b4f91801142ff60482ae49a9a7c99da3e4' => 
    array (
      0 => '/var/www/modules/minicslider/views/templates/hooks/quick_links.tpl',
      1 => 1382895987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2149977885276a250941a72-57232916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'minicslider' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5276a250b38c92_90491279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5276a250b38c92_90491279')) {function content_5276a250b38c92_90491279($_smarty_tpl) {?><li>
  <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=<?php echo $_smarty_tpl->tpl_vars['minicslider']->value;?>
" style="background: url('<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
logo.png') no-repeat center 25px #F8F8F8">
    <h4><?php echo smartyTranslate(array('s'=>'Minic Slider Module','mod'=>'minicslider'),$_smarty_tpl);?>
</h4>
    <p><?php echo smartyTranslate(array('s'=>'Powerfull image slider for advertising','mod'=>'minicslider'),$_smarty_tpl);?>
</p>
  </a>
</li><?php }} ?>