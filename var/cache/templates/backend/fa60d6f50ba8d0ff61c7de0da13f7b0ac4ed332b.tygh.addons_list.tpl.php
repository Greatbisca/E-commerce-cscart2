<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 20:40:31
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\views\addons\components\addons_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2537893260bfab8f9daf09-02691628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa60d6f50ba8d0ff61c7de0da13f7b0ac4ed332b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\views\\addons\\components\\addons_list.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2537893260bfab8f9daf09-02691628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons_list' => 0,
    'a' => 0,
    'addon_filter_source_suffix' => 0,
    'additional_class' => 0,
    'key' => 0,
    'addon_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bfab8f9ea419_10581889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bfab8f9ea419_10581889')) {function content_60bfab8f9ea419_10581889($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('favorites','name','installed_date','developer','status','no_data'));
?>
<?php if ($_smarty_tpl->tpl_vars['addons_list']->value) {?>
    <div class="table-responsive-wrapper" id="addon_table">
        <table class="table table-addons table-middle cm-filter-table ty-table--sorter
            table-responsive table-responsive-w-titles"
            data-ca-sortable="true"
            data-ca-sort-list="[[1, 0]]"
            data-ca-input-id="elm_addon"
            data-ca-clear-id="elm_addon_clear"
            data-ca-empty-id="elm_addon_no_items"
            data-ca-filter-table-is-logical-and="true"
        >
            <thead>
                <tr>
                    <th width="1%" class="left mobile-hide">
                    </th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%">
                        <i class="icon-star-empty"
                            title="<?php echo $_smarty_tpl->__("favorites");?>
"
                        ></i>
                    </th>
                    <th class="sorter-false" width="8%"></th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="40%"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%" title="<?php echo $_smarty_tpl->__("installed_date");?>
">
                        <i class="icon-calendar muted"></i>
                    </th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="18%"><?php echo $_smarty_tpl->__("developer");?>
</th>
                    <th class="sorter-false" width="7%"></th>
                    <th class="cm-tablesorter right" data-ca-sortable-column="true" width="20%"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
            </thead>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['a']->key;
?>

            
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_full_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>$_smarty_tpl->tpl_vars['a']->value), 0);?>


            <?php $_smarty_tpl->tpl_vars['addon_filter_source_suffix'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value['is_core_addon'] ? "built_in" : "third_party", null, 0);?>

            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-row-item
                filter_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['status'], ENT_QUOTES, 'UTF-8');?>
 filter_source_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_filter_source_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-supplier="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
"
                data-category="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['category'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td class="left mobile-hide">
                </td>
                <td>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_favorite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('result_ids'=>"addon_table",'detailed'=>false), 0);?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>$_smarty_tpl->tpl_vars['a']->value,'href'=>true,'show_description'=>true), 0);?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/addon_description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/addon_install_datetime.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_supplier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </td>
                <td class="nowrap">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </td>
                <td class="nowrap right">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </td>
            <!--addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
        <?php } ?>
        </table>
    <!--addon_table--></div>
<?php } else { ?>
    <p id="elm_addon_no_items" class="no-items <?php if ($_smarty_tpl->tpl_vars['addon_list']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<?php }} ?>