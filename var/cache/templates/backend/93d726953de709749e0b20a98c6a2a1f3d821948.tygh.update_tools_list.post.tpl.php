<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:34:08
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\gift_certificates\hooks\profiles\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82085184060c7af301b4515-83624737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d726953de709749e0b20a98c6a2a1f3d821948' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82085184060c7af301b4515-83624737',
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
  'unifunc' => 'content_60c7af301cd628_91180582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7af301cd628_91180582')) {function content_60c7af301cd628_91180582($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('create_gift_certificate_for_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C"&&fn_check_view_permissions("gift_certificates.add")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }?>
<?php }} ?>
