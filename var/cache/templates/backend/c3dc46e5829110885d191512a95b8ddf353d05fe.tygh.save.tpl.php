<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:35:36
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\buttons\save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209690190860c7af88e38e59-03085736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3dc46e5829110885d191512a95b8ddf353d05fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\buttons\\save.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '209690190860c7af88e38e59-03085736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7af88e4d801_28079764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7af88e4d801_28079764')) {function content_60c7af88e4d801_28079764($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
