<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 20:42:12
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\views\addons\components\detailed_page\tabs\addon_subscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168827354860bfabf4653f13-24095446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '491cc1932759fe80719cd035306c323befca89a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\views\\addons\\components\\detailed_page\\tabs\\addon_subscription.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '168827354860bfabf4653f13-24095446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bfabf4671d90_66513350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bfabf4671d90_66513350')) {function content_60bfabf4671d90_66513350($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('license','license_number','addon_license_key_tooltip'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:subscription_tab")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:subscription_tab"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="hidden cm-hide-save-button" id="content_subscription">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_subs_form" class=" form-edit form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="addon" value="<?php echo htmlspecialchars($_REQUEST['addon'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars($_REQUEST['storefront_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_REQUEST['return_url']) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("license"),'target'=>"#license"), 0);?>

        <div id="license" class="collapse in collapse-visible">
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("license_number");?>
:</label>
                <div class="controls">
                    <input type="text" name="marketplace_license_key"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['marketplace_license_key'], ENT_QUOTES, 'UTF-8');?>
"
                            size="30"/>
                    <p class="muted description"><?php echo $_smarty_tpl->__("addon_license_key_tooltip");?>
</p>
                </div>
            </div>
        </div>

    </form>
<!--content_subscription--></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:subscription_tab"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
