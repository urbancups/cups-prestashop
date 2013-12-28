<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 22:04:24
         compiled from "/var/www/modules/browsi/views/templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1773697605527166481e9f77-26265287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fdbfca592c9d0ad4f56f2f0e337e02b65030f74' => 
    array (
      0 => '/var/www/modules/browsi/views/templates/admin/admin.tpl',
      1 => 1383163463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1773697605527166481e9f77-26265287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'browsi_tracking' => 0,
    'browsi_message' => 0,
    'browsi_register_link' => 0,
    'browsi_form' => 0,
    'browsi_site_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527166482a9217_70464631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527166482a9217_70464631')) {function content_527166482a9217_70464631($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/tools/smarty/plugins/modifier.escape.php';
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
css/browsi.css" rel="stylesheet" type="text/css">
<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['browsi_tracking']->value, 'htmlall', 'UTF-8');?>
" alt="" style="display: none;"/>
<div class="browsi-wrap">
    <?php echo $_smarty_tpl->tpl_vars['browsi_message']->value;?>

    <div class="br-header">
        <div class="br-content">
            <div class="br-device"></div>
            <div class="br-logo">Brow.si</div>
            <p class="br-tagline"><?php echo smartyTranslate(array('s'=>'Drive more customer engagement, generate more traffic and sell more on mobile with Brow.si.','mod'=>'browsi'),$_smarty_tpl);?>
</p>
            <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['browsi_register_link']->value, 'htmlall', 'UTF-8');?>
" class="br-button" title="<?php echo smartyTranslate(array('s'=>'Register to Brow.si for free','mod'=>'browsi'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Register for free','mod'=>'browsi'),$_smarty_tpl);?>
</a>
        </div>
        <div class="br-features" <?php if (version_compare(@constant('_PS_VERSION_'),'1.5','<')){?>style="padding: 1em 1em"<?php }?>>
            <div class="br-features-list">
                <div class="br-col">
                    <div class="br-feature"><div class="br-i br-i-cart"></div><div class="br-li-caption"><?php echo smartyTranslate(array('s'=>'Always on shopping cart','mod'=>'browsi'),$_smarty_tpl);?>
</div></div>
                    <div class="br-feature"><div class="br-i br-i-cloud"></div><div class="br-li-caption"><?php echo smartyTranslate(array('s'=>'Continuous engagement across desktop and mobile','mod'=>'browsi'),$_smarty_tpl);?>
</div></div>
                </div>
                <div class="br-col">
                    <div class="br-feature"><div class="br-i br-i-share"></div><div class="br-li-caption"><?php echo smartyTranslate(array('s'=>'Superior social sharing','mod'=>'browsi'),$_smarty_tpl);?>
</div></div>
                    <div class="br-feature"><div class="br-i br-i-push"></div><div class="br-li-caption"><?php echo smartyTranslate(array('s'=>'Stay in touch with customers through push notifications','mod'=>'browsi'),$_smarty_tpl);?>
</div></div>
                </div>
                <div class="br-col">
                    <div class="br-feature"><div class="br-i br-i-analytics"></div><div class="br-li-caption"><?php echo smartyTranslate(array('s'=>'Front-end analytics','mod'=>'browsi'),$_smarty_tpl);?>
</div></div>
                    <div class="br-feature"><div class="br-i br-i-customizability"></div><div class="br-li-caption"><?php echo smartyTranslate(array('s'=>'Customizable and localized','mod'=>'browsi'),$_smarty_tpl);?>
</div></div>
                </div>
            </div>
        </div>
    </div>
    <form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['browsi_form']->value, 'htmlall', 'UTF-8');?>
" id="browsi-settings" method="post">
        <fieldset class="br-fieldset">
            <legend><?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'browsi'),$_smarty_tpl);?>
</legend>
            <div class="br-col br-form-col">
                <p class="MB10"><?php echo smartyTranslate(array('s'=>'Brow.si works out-of-the-box, no further action required.','mod'=>'browsi'),$_smarty_tpl);?>

                    <strong><?php echo smartyTranslate(array('s'=>'Want to customize your Brow.si, access analytics and get updates on new features? Then, please register your site with us. It\'s Free!','mod'=>'browsi'),$_smarty_tpl);?>
</strong>
                </p>
                <label for="browsi_site_id"><?php echo smartyTranslate(array('s'=>'Brow.si Site ID:','mod'=>'browsi'),$_smarty_tpl);?>
</label>
                <div class="margin-form">
                    <input type="text" class="text" name="browsi_site_id" id="browsi_site_id" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['browsi_site_id']->value, 'htmlall', 'UTF-8');?>
" />
                </div>
                <div class="margin-form">
                    <input type="submit" class="button" name="submitBrowsi" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'browsi'),$_smarty_tpl);?>
" />
                </div>
            </div>
            <div class="br-col br-form-col br-sep">
                <h4><?php echo smartyTranslate(array('s'=>'How to get your Brow.si Site ID?','mod'=>'browsi'),$_smarty_tpl);?>
</h4>
                <ol class="br-steps-list">
                    <li><p><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['browsi_register_link']->value, 'htmlall', 'UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Register - It\'s Free!','mod'=>'browsi'),$_smarty_tpl);?>
</a></p></li>
                    <li><p><?php echo smartyTranslate(array('s'=>'When prompted enter your website\'s URL.','mod'=>'browsi'),$_smarty_tpl);?>
</p></li>
                    <li><p><?php echo smartyTranslate(array('s'=>'Copy your unique ID and paste it into the Brow.si Site ID field on this page. Your unique ID is under Dashboard > Website Info > Website Brow.si Site ID.','mod'=>'browsi'),$_smarty_tpl);?>
</p></li>
                </ol>
                <p><small>(<?php echo smartyTranslate(array('s'=>'To register a new site, simply sign in to Brow.si and add the site from your','mod'=>'browsi'),$_smarty_tpl);?>

 <a href="https://brow.si/dashboard" target="_blank"><?php echo smartyTranslate(array('s'=>'dashboard','mod'=>'browsi'),$_smarty_tpl);?>
</a>)</small></p>
            </div>
        </fieldset>
    </form>
</div><?php }} ?>