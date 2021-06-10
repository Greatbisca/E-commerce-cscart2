<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:52:33
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\views\storefronts\components\access_only_for_authorized_customers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11099831660c251615a3a60-96152634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9921aa5a828ef0fdea4c649cb65323b961fa170' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\views\\storefronts\\components\\access_only_for_authorized_customers.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11099831660c251615a3a60-96152634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'is_accessible_for_authorized_customers_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c251615c2ae7_29404239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c251615c2ae7_29404239')) {function content_60c251615c2ae7_29404239($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('access_for_authorized_customers_only'));
?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[is_accessible_for_authorized_customers_only]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="is_accessible_for_authorized_customers_only_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
        <?php echo $_smarty_tpl->__("access_for_authorized_customers_only");?>

    </label>
    <div class="controls">
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />

        <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>$_smarty_tpl->tpl_vars['is_accessible_for_authorized_customers_only']->value,'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value),'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_id'=>"is_accessible_for_authorized_customers_only_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>

    </div>
</div><?php }} ?>
