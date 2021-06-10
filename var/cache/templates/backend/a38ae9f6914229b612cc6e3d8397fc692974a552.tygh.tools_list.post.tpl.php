<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:52:34
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\vendor_communication\hooks\companies\tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130073989160c25162c864d7-01897029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a38ae9f6914229b612cc6e3d8397fc692974a552' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\companies\\tools_list.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '130073989160c25162c864d7-01897029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'id' => 0,
    'divider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c25162ca2de2_38090032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c25162ca2de2_38090032')) {function content_60c25162ca2de2_38090032($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
    <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['id']->value,'menu_button'=>true,'divider'=>$_smarty_tpl->tpl_vars['divider']->value), 0);?>
<?php }} ?>
