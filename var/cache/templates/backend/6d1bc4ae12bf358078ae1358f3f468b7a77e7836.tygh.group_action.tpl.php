<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:35:36
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\components\context_menu\items\group_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156683753060c7af88d9f7f1-35729603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d1bc4ae12bf358078ae1358f3f468b7a77e7836' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\components\\context_menu\\items\\group_action.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '156683753060c7af88d9f7f1-35729603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7af88dbccd9_63239146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7af88dbccd9_63239146')) {function content_60c7af88dbccd9_63239146($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>
 class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
">
    <a <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['action_attributes']);?>

        class="cm-process-items cm-submit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['action_class'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dispatch="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
]"
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

    </a>
</li>
<?php }} ?>
