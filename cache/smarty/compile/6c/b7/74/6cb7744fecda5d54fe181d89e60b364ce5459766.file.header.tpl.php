<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 19:58:36
         compiled from "/var/www/themes/theme762/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6769696325269401fa916f5-09453639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb7744fecda5d54fe181d89e60b364ce5459766' => 
    array (
      0 => '/var/www/themes/theme762/header.tpl',
      1 => 1382895411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6769696325269401fa916f5-09453639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5269401fc6e328_91776763',
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'css_dir' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'js_dir' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_TOP' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'LeftColumn' => 0,
    'RightColumn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269401fc6e328_91776763')) {function content_5269401fc6e328_91776763($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/tools/smarty/plugins/modifier.escape.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>
	<meta name="generator" content="PrestaShop" />
    <meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />
	<meta name="author" content="Prestashop 1.5">   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />    
<script>
    if (navigator.userAgent.match(/Android/i)) {
        var viewport = document.querySelector("meta[name=viewport]");
       	viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
    }
	if(navigator.userAgent.match(/Android/i)){
    window.scrollTo(0,1);
 }
</script> 
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<script type="text/javascript">
			var baseDir = '<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
';
			var baseUri = '<?php echo $_smarty_tpl->tpl_vars['base_uri']->value;?>
';
			var static_token = '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
';
			var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
		</script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,300' rel='stylesheet' type='text/css'>
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
normalize.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
bootstrap-responsive.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
font.css" rel="stylesheet" type="text/css" media="all" />
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
<?php } ?>
<?php }?>   
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
320.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
480.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
768.css" rel="stylesheet" type="text/css" media="all" />
<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
<?php } ?>
<?php }?>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/plugins.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/footable.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/jquery.core-ui-select.js"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/jquery.scrollpane.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/jquery.uniform.js"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/add.js"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/jquery.mousewheel.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/mainscript.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/modernizr-2.5.3.min.js"></script>
<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/jquery.carouFredSel-6.2.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/source/jquery.touchSwipe.min.js"></script>
</head>
    <!--[if lt IE 9]><div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->
	<body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?>hide-left-column <?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?>hide-right-column <?php }?><?php if ($_smarty_tpl->tpl_vars['content_only']->value){?> content_only <?php }?>lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
    	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>
<div id="restricted-country">
  <p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
</div>
<?php }?>
<div id="wrapp">
  <div id="wrapp_2"> 
       <div id="wrapp_3">        
          <header id="header">
            <div  id="header-inner"  class="container ">
       			<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">
                     <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
" <?php }?> />
                  </a>
          <?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

         </div>
           </header> 
            <div class="content-box">       
<div id="columns" class="container ">
                 <div class="row ">  
                 <div class="loader_page"> 
                 			<?php $_smarty_tpl->tpl_vars['LeftColumn'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['RightColumn'] = new Smarty_variable(0, null, 0);?>
                 			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&(str_replace(" ",'',$_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value))!=''){?><?php $_smarty_tpl->tpl_vars['LeftColumn'] = new Smarty_variable(3, null, 0);?><?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&(str_replace(" ",'',$_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value))!=''){?><?php $_smarty_tpl->tpl_vars['RightColumn'] = new Smarty_variable(3, null, 0);?><?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['LeftColumn']->value)&&$_smarty_tpl->tpl_vars['LeftColumn']->value!=0){?>   
                                <aside id="left_column"  class="span3 column">
                                   <?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

                                </aside> 
                            <?php }?>  
                         <div id="center_column" class="center_column span<?php echo 12-$_smarty_tpl->tpl_vars['LeftColumn']->value-$_smarty_tpl->tpl_vars['RightColumn']->value;?>
 clearfix">
<?php }?> <?php }} ?>