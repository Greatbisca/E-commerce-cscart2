<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 17:43:18
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\loyalty_system\views\loyalty\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143386710260c22506b0f0e3-57383481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '658b047751238ae9d93ac1f2bcaef5e8be957419' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\loyalty_system\\views\\loyalty\\manage.tpl',
      1 => 1623335515,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '143386710260c22506b0f0e3-57383481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'value' => 0,
    'points' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c22506b19e31_06004476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c22506b19e31_06004476')) {function content_60c22506b19e31_06004476($_smarty_tpl) {?><div class="bananas">
    <ul>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <li>
            <button onclick="$('#frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points').toggle();">
                points   
            </button>
            <form id="frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">
                <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                <label>
                    points
                </label>
                <input type="number" name="loyalty_points"/>
                <input type="submit" value="OK"/> 
            </form>


            <a ref="admin.php?dispatch=loyalty.update&id_user=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 > <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['loyalty_points'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <?php if (count($_smarty_tpl->tpl_vars['value']->value['conta_corrente'])>0) {?>
            <ul> 
                <?php  $_smarty_tpl->tpl_vars['points'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['points']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['conta_corrente']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['points']->key => $_smarty_tpl->tpl_vars['points']->value) {
$_smarty_tpl->tpl_vars['points']->_loop = true;
?>
                <li> 
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['data'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['loyalty_points'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <?php } ?>
            </ul>
        <?php }?>
    <?php } ?>
    </ul>
</div>
<?php }} ?>
