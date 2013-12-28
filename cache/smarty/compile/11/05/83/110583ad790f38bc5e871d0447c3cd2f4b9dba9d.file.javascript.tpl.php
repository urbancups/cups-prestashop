<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:02:59
         compiled from "/var/www/modules/minicslider/views/templates/admin/javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142068146526d55530e33b9-43603092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110583ad790f38bc5e871d0447c3cd2f4b9dba9d' => 
    array (
      0 => '/var/www/modules/minicslider/views/templates/admin/javascript.tpl',
      1 => 1382895980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1142068146526d55530e33b9-43603092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'minic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d55531457b3_59890833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d55531457b3_59890833')) {function content_526d55531457b3_59890833($_smarty_tpl) {?><script type="text/javascript">
jQuery(window).load(function(){
    <?php if ($_smarty_tpl->tpl_vars['minic']->value['first_start']){?>
    // First start
    $('#newsletter').fadeIn();
    minic.newsletter(false);
    <?php }?>
});
jQuery(document).ready(function($) {
    // News Feed    
    $.getJSON('http://clients.minic.ro/process/feed?callback=?', function(feed){
        var version = '<?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['version'];?>
';
        var name = '<?php echo $_smarty_tpl->tpl_vars['minic']->value['info']['module'];?>
';
        
        // Banner
        if(feed['modules'][name]['version'] != version){
            $('#banner').empty().html(feed['modules'][name]['update']);
        }else if(feed['modules'][name]['news']){
            $('#banner').empty().html(feed['modules'][name]['news']);
        }else{
            $('#banner').empty().html(feed['news']);
        }

        // Module list
        if(feed.modules){
            list = '';
            $.each(feed.modules, function() {
                
                list += '<li>';
                list += '<a href="'+ this.link +'" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Click for more details','mod'=>'minicslider'),$_smarty_tpl);?>
">';
                list += '<img src="'+ this.logo +'">';
                list += '<p>';
                list += '<span class="title">'+ this.name +'</span>';
                list += '<span class="description">'+ this.description +'</span>';
                list += '<span class="price">'+ this.price +'</span>';
                list += '</p>';
                list += '</a>';
                list += '</li>';
            });
            
        }
        $('ul#module-list').html(list);
    });
});
</script><?php }} ?>