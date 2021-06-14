<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:34:08
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\reward_points\hooks\profiles\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114282781160c7af302258c2-27149237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2bcd29340ae491f61c3e1be79acf7a48e0a866b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\reward_points\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '114282781160c7af302258c2-27149237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7af3023fe75_47623220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7af3023fe75_47623220')) {function content_60c7af3023fe75_47623220($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_user_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C"&&fn_check_permissions("reward_points","userlog","admin","GET")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_user_points");?>
</a></li>
<?php }?><?php }} ?>
