<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:01:35
         compiled from "/var/www/modules/customcontent/views/templates/hook/customcontent_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328206246526d54ff62aac1-30599369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d877ad141d1e7aec2f35b735ec0b75262120571' => 
    array (
      0 => '/var/www/modules/customcontent/views/templates/hook/customcontent_top.tpl',
      1 => 1382895892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328206246526d54ff62aac1-30599369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'xml' => 0,
    'itemPos' => 0,
    'TopHook' => 0,
    'item' => 0,
    'img_path' => 0,
    'html_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d54ff6b7e94_63519020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d54ff6b7e94_63519020')) {function content_526d54ff6b7e94_63519020($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<?php  $_smarty_tpl->tpl_vars['itemPos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemPos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['itemPos']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['itemPos']->iteration=0;
 $_smarty_tpl->tpl_vars['itemPos']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['itemPos']->key => $_smarty_tpl->tpl_vars['itemPos']->value){
$_smarty_tpl->tpl_vars['itemPos']->_loop = true;
 $_smarty_tpl->tpl_vars['itemPos']->iteration++;
 $_smarty_tpl->tpl_vars['itemPos']->index++;
 $_smarty_tpl->tpl_vars['itemPos']->first = $_smarty_tpl->tpl_vars['itemPos']->index === 0;
 $_smarty_tpl->tpl_vars['itemPos']->last = $_smarty_tpl->tpl_vars['itemPos']->iteration === $_smarty_tpl->tpl_vars['itemPos']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['first'] = $_smarty_tpl->tpl_vars['itemPos']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['last'] = $_smarty_tpl->tpl_vars['itemPos']->last;
?>
  <?php if ($_smarty_tpl->tpl_vars['itemPos']->value->hook=='top'){?><?php $_smarty_tpl->tpl_vars['TopHook'] = new Smarty_variable('true', null, 0);?><?php }?>
<?php } ?>
<?php if (isset($_smarty_tpl->tpl_vars['TopHook']->value)&&$_smarty_tpl->tpl_vars['TopHook']->value=='true'){?>
<div id="customcontent_top" class=" clearfix">
  <ul class="customcontent-top">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['first'] = $_smarty_tpl->tpl_vars['item']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
      <?php if ($_smarty_tpl->tpl_vars['item']->value->hook=='top'){?>
      <li class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first']){?> first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['last']){?> last_item<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['item']->value->img&&$_smarty_tpl->tpl_vars['item']->value->url){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value->img;?>
" alt=""/>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->img&&!$_smarty_tpl->tpl_vars['item']->value->url){?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value->img;?>
" alt=""/>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->html->{$_smarty_tpl->tpl_vars['html_lang']->value}){?>    
        <div class="item_html">
          <?php echo $_smarty_tpl->tpl_vars['item']->value->html->{$_smarty_tpl->tpl_vars['html_lang']->value};?>

        </div>
        <?php }?>
      </li>
      <?php }?>
    <?php } ?>
  </ul>
</div>
<?php }?>
<?php }?><?php }} ?>