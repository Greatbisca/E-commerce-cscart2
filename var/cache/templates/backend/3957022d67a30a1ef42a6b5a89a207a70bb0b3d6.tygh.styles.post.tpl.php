<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:13:04
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204264512560c7aa40cef147-84686118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3957022d67a30a1ef42a6b5a89a207a70bb0b3d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '204264512560c7aa40cef147-84686118',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7aa40cf2df7_17084379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7aa40cf2df7_17084379')) {function content_60c7aa40cf2df7_17084379($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
