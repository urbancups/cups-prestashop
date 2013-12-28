<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 20:02:58
         compiled from "/var/www/modules/minicslider/views/templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1721159674526d5552ee3956-97640642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c49b1f85ef25b49b1c1ebf73423e9625ac2c26' => 
    array (
      0 => '/var/www/modules/minicslider/views/templates/admin/admin.tpl',
      1 => 1382895979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1721159674526d5552ee3956-97640642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slider' => 0,
    'minic' => 0,
    'error' => 0,
    'confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526d55530abdd0_19671680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d55530abdd0_19671680')) {function content_526d55530abdd0_19671680($_smarty_tpl) {?><script type="text/javascript">
    $(document).ready(function() {

        // Sortable
        $("ul.languages").sortable({
            opacity: 0.6,
            cursor: 'move',
            handle: '.orderer',
            update: function(event, ui) {
                var list = $(this);
                var number;
                var response;
                $.getJSON(
                    "<?php echo $_smarty_tpl->tpl_vars['slider']->value['sortUrl'];?>
", 
                    {slides: $(this).sortable("serialize")}, 
                    function(response){
                        if(response.success == "true"){
                            showResponse($("#sortable"), "<?php echo smartyTranslate(array('s'=>'Saved successfull','mod'=>'minicslider'),$_smarty_tpl);?>
", 'conf');
                            var i = 1;
                            list.children("li").each(function(){
                                number = i;
                                if(i < 10){ 
                                    number = "0"+i; 
                                }
                                $(this).find(".order").text(number);
                                i++;
                            });
                        }else{
                            showResponse($("#sortable"), "<?php echo smartyTranslate(array('s'=>'Something went wrong, please refresh the page and try again','mod'=>'minicslider'),$_smarty_tpl);?>
", 'error'); 
                        }
                  }
                );
            }
        });         
    });
</script>
		
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="minic">
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['error']->value,'class'=>'error'), 0);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['confirmation']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['confirmation']->value,'class'=>'conf'), 0);?>

    <?php }?>
    <div class="header">
        <div id="menu-top">
            <a href="http://module.minic.ro" id="minic-studio" class="social" title="Minic studio module site" target="_blank">minic studio</a>
            <a href="https://plus.google.com/114549918965076938738" class="social" title="Minic studio Google+ page" target="_blank"><i class="icon-googleplus"></i></a>
            <a href="https://github.com/minicstudio" class="social" title="Minic studio Github page" target="_blank"><i class="icon-github"></i></a>
            <a href="https://twitter.com/minicstudio" class="social" title="Minic studio Twitter page" target="_blank"><i class="icon-twitter"></i></a>
            <a href="https://www.facebook.com/minicmodule" class="social" title="Minic studio Facebook page" target="_blank"><i class="icon-facebook"></i></a>
            <div id="more-module">
                <span>Top Modules</span>
                <ul id="module-list">
                    <li><?php echo smartyTranslate(array('s'=>'No data available','mod'=>'minicslider'),$_smarty_tpl);?>
</li>
                </ul>
            </div>
            <a href="#newsletter" id="open-newsletter" class="open-popup" data-popup="#newsletter"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
            <a href="#bug" id="open-bug" class="minic-open"><?php echo smartyTranslate(array('s'=>'Bug Report','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
            <a href="#feedback" id="open-feedback" class="minic-open"><?php echo smartyTranslate(array('s'=>'Feedback','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
        </div>
        <div id="banner"></div>
        <div id="navigation">
            <a href="#new" id="new-button" class="minic-open"><?php echo smartyTranslate(array('s'=>'Add New','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
            <a href="#options" id="options-button" class="minic-open"><?php echo smartyTranslate(array('s'=>'Options','mod'=>'minicslider'),$_smarty_tpl);?>
</a>
        </div>
    </div>
    <!-- feedback -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- bug report -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."bug.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- Options -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- New -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- Slides -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."slides.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- newsletter popup -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minic']->value['admin_tpl_path'])."popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('newsletter'=>'1'), 0);?>

</div><?php }} ?>