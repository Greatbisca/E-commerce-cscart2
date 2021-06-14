<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:13:10
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\buttons\save_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213629401160c7aa468ab7f1-61682238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0544476186f5d410b42dab7eca2be6bcd47df93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\buttons\\save_changes.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '213629401160c7aa468ab7f1-61682238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7aa468ade29_38194788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7aa468ade29_38194788')) {function content_60c7aa468ade29_38194788($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save_changes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
