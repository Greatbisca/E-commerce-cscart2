<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:48:03
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\addons\loyalty_system\views\loyalty\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86625263060c2505314baf7-89474173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '658b047751238ae9d93ac1f2bcaef5e8be957419' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\addons\\loyalty_system\\views\\loyalty\\manage.tpl',
      1 => 1623347278,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '86625263060c2505314baf7-89474173',
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
  'unifunc' => 'content_60c250531580e5_94476820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c250531580e5_94476820')) {function content_60c250531580e5_94476820($_smarty_tpl) {?><style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    th {
      text-align: center;
      border: 5px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    button{
        background-color: rgb(108, 8, 201); 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
    }
</style>
<html>
    <table>
        
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <tr>
            <th>
                <a ref="admin.php?dispatch=loyalty.update&id_user=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 --> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['loyalty_points'], ENT_QUOTES, 'UTF-8');?>
</a>
            </th>
            <th>
            <?php if (count($_smarty_tpl->tpl_vars['value']->value['conta_corrente'])>0) {?>
                <ul> 
                    <?php  $_smarty_tpl->tpl_vars['points'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['points']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['conta_corrente']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['points']->key => $_smarty_tpl->tpl_vars['points']->value) {
$_smarty_tpl->tpl_vars['points']->_loop = true;
?>
                    <br> 
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['data'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['loyalty_points'], ENT_QUOTES, 'UTF-8');?>

                    </br>
                    <?php } ?>
                </ul>
            <?php }?>
            </th>
            <th>
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
            </th>
        </tr>
        <?php } ?>
        
    </table>
</html>
<?php }} ?>
