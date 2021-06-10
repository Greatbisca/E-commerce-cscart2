<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:52:34
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\discussion\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42435330060c25162a140e6-93512675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5cd9cd2382d8a7eb1427617de5f44fa2cbfde5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\discussion\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42435330060c25162a140e6-93512675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c25162a29506_04416984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c25162a29506_04416984')) {function content_60c25162a29506_04416984($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
