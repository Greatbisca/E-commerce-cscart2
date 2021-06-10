<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:54:36
         compiled from "C:\xampp\htdocs\cscart2\design\themes\responsive\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198251197060c251dc7f4d97-27386360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '427d42603e1111d8b276bb011632429e04b2a330' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1623172720,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '198251197060c251dc7f4d97-27386360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location_data' => 0,
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c251dc84d740_42974109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c251dc84d740_42974109')) {function content_60c251dc84d740_42974109($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
<?php }?><?php }} ?>
