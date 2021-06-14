<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:13:10
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\help_center\hooks\index\toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152491041060c7aa46f24597-45716662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717b1dba632c31b94f504d52555846ac34e99ec5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\toolbar.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152491041060c7aa46f24597-45716662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7aa46f26521_65026271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7aa46f26521_65026271')) {function content_60c7aa46f26521_65026271($_smarty_tpl) {?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <i class="help-center__show-help-center--icon icon-question-sign"></i>
        </a>
    </div>
<?php }?>
<?php }} ?>
