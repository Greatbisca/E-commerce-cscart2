<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:13:10
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\product_reviews\hooks\index\actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10911749260c7aa46d9eca5-76715374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d399078703b10b9e958230e93a1eec65f07fb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\product_reviews\\hooks\\index\\actions.pre.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10911749260c7aa46d9eca5-76715374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7aa46da4fc2_03973483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7aa46da4fc2_03973483')) {function content_60c7aa46da4fc2_03973483($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\modifier.enum.php';
?>


<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']==='reviews'&&($_smarty_tpl->tpl_vars['runtime']->value['mode']==='manage'&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['runtime']->value['mode']==='update')) {?>
    <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_storefront'] = clone $_smarty_tpl->tpl_vars['select_storefront'];?>
<?php }?>
<?php }} ?>
