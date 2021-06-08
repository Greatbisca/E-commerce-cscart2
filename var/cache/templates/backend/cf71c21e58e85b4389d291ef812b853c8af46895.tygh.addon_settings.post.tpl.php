<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 20:42:12
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\reward_points\hooks\addons\addon_settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101325605260bfabf4263a52-03402346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf71c21e58e85b4389d291ef812b853c8af46895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\reward_points\\hooks\\addons\\addon_settings.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101325605260bfabf4263a52-03402346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bfabf427c6f4_14641062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bfabf427c6f4_14641062')) {function content_60bfabf427c6f4_14641062($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['_addon']->value==="reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
