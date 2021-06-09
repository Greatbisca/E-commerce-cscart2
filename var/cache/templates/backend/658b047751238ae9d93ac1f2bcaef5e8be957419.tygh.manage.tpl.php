<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 16:52:45
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\loyalty_system\views\loyalty\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193920916960c0c7ad73f888-46477833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '658b047751238ae9d93ac1f2bcaef5e8be957419' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\loyalty_system\\views\\loyalty\\manage.tpl',
      1 => 1623246761,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '193920916960c0c7ad73f888-46477833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c0c7ad7461f6_73200546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c0c7ad7461f6_73200546')) {function content_60c0c7ad7461f6_73200546($_smarty_tpl) {?><div class="bananas">
    <ul>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <li><a ref="admin.php?dispatch=loyalty.update&id_user=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 > <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['loyalty_points'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <?php } ?>
    </ul>
</div><?php }} ?>
