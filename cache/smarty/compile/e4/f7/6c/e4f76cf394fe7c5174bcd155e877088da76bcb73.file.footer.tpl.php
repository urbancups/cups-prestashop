<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 22:14:47
         compiled from "/var/www/modules/browsi/views/templates/hook/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1376873597527168b7602f61-38271692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f76cf394fe7c5174bcd155e877088da76bcb73' => 
    array (
      0 => '/var/www/modules/browsi/views/templates/hook/footer.tpl',
      1 => 1383163463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1376873597527168b7602f61-38271692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'browsi_site_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527168b76859c1_24663878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527168b76859c1_24663878')) {function content_527168b76859c1_24663878($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/tools/smarty/plugins/modifier.escape.php';
?>
<script type="text/javascript">
    var _brPrestashop = {
        checkout: '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order.php',true,null,'step=1'), 'htmlall', 'UTF-8');?>
',
        cart: '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order.php',true), 'htmlall', 'UTF-8');?>
',
        cartAjax: <?php if ((@constant('_PS_VERSION_')<1.5)){?>'<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart.php',true), 'htmlall', 'UTF-8');?>
'<?php }else{ ?>baseDir<?php }?>
    };
    (function(w, d){
<?php if (!empty($_smarty_tpl->tpl_vars['browsi_site_id']->value)){?>        w['_brSiteId'] = '<?php echo $_smarty_tpl->tpl_vars['browsi_site_id']->value;?>
';
<?php }?>        w['_brPlatform'] = ['prestashop', '<?php echo smarty_modifier_escape(@constant('_PS_VERSION_'), 'htmlall', 'UTF-8');?>
'];
        function br() {
            var i='browsi-js'; if (d.getElementById(i)) {return;}
            var siteId = /^[a-zA-Z0-9]{1,7}$/.test(w['_brSiteId']) ? w['_brSiteId'] : null;
            var js=d.createElement('script'); js.id=i; js.async=true;
            js.src='//js.brow.si/' + ( siteId != null ? siteId + '/' : '' ) + 'br.js';
            (d.head || d.getElementsByTagName('head')[0]).appendChild(js);
        }
        d.readyState == 'complete' ? br() :
                ( w.addEventListener ? w.addEventListener('load', br, false) : w.attachEvent('onload', br) );
    })(window, document);
</script>
<?php }} ?>