<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:52:33
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\views\storefronts\components\access_key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42054577260c251614f8a21-82810453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db98747c1215cf1e5070ad46390c1b890817698e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\views\\storefronts\\components\\access_key.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42054577260c251614f8a21-82810453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'access_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c25161528f39_84545466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c25161528f39_84545466')) {function content_60c25161528f39_84545466($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_access_key'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[access_key]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_access_key");?>

    </label>
    <div class="controls">
        <input type="text"
               id="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="input-large"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>
<?php }} ?>
