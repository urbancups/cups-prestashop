<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:01:35
         compiled from "/var/www/modules/addhomefeatured/addhomefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203184864526d54ff8ff247-94387107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb7253d79eb36f6ba3e63f478fb635b91b53540' => 
    array (
      0 => '/var/www/modules/addhomefeatured/addhomefeatured.tpl',
      1 => 1382895855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1203184864526d54ff8ff247-94387107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'totModulo' => 0,
    'product' => 0,
    'link' => 0,
    'addimages' => 0,
    'k' => 0,
    'v' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d54ffb6e4a9_14559107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d54ffb6e4a9_14559107')) {function content_526d54ffb6e4a9_14559107($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/tools/smarty/plugins/modifier.date_format.php';
?><!-- MODULE Home Featured Products -->

<section id="addhomefeatured" class="main_page_products block">
  <h4><span><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</span></h4>
  <?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
  <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
  <?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

  <ul class="row">
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']++;
?>
    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0){?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
    <li class="ajax_block_product span3  num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration'];?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0){?> omega<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1){?> alpha<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)){?>last_line<?php }?>"> <a class="product_image" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?>  <?php echo smartyTranslate(array('s'=>'New!','mod'=>'addhomefeatured'),$_smarty_tpl);?>
<?php }?>" rel="tooltip" data-placement="bottom" data-original-title="<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],45,'...'), 'htmlall', 'UTF-8');?>
" > <img  src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" class="main-img"/> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addimages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['product']->value['id_product']&&$_smarty_tpl->tpl_vars['v']->value!=''){?> <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['v']->value),'home_default');?>
"  alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" style="display:none;"  class="next-img" /> <?php }?>
      <?php } ?> </a>
      <div>          
          <p class="product_desc"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),65,'...');?>
</p>
          <div class="clearfix"> 
          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?> <span class="price"> <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?> </span> <?php }?>   
                 <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                     <span class="price price-new"> <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>
                     <span class="price-old"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span>
                 <?php }?> 
             </div>
             <div class="block-sale">           
           <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
            <?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices'], null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>
                <span class="sale"><?php echo smartyTranslate(array('s'=>'On sale!'),$_smarty_tpl);?>
</span>
            <?php }?>
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
            <?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices'], null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='amount'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>
                <span class="sale"><?php echo smartyTranslate(array('s'=>'On sale!'),$_smarty_tpl);?>
</span>
            <?php }?>
           <?php }?>         
         </div>
             <h5><a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title=""><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],25,'...'), 'htmlall', 'UTF-8');?>
</a></h5>
        <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
        <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])){?> <a class="exclusive ajax_add_to_cart_button btn_add_cart" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart.php');?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add"><span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</span> </a> <?php }else{ ?> <span class="exclusive"><?php echo smartyTranslate(array('s'=>'','mod'=>'addhomefeatured'),$_smarty_tpl);?>
<i class="icon-shopping-cart"></i></span> <?php }?>
        <?php }?> <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
"  rel="tooltip" data-placement="bottom"><?php echo smartyTranslate(array('s'=>'View','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</a> 
  <div class="clear"></div>
      </div>
    </li>
    <?php } ?>
  </ul>
  <?php }else{ ?>
  <p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</p>
  <?php }?> </section>
<!-- /MODULE Home Featured Products --><?php }} ?>