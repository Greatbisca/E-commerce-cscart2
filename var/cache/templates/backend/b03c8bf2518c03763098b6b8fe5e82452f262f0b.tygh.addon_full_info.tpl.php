<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 20:40:31
         compiled from "C:\xampp\htdocs\cscart2\design\backend\templates\views\addons\components\addons\addon_full_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62914053860bfab8faee700-92989020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03c8bf2518c03763098b6b8fe5e82452f262f0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_full_info.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '62914053860bfab8faee700-92989020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'a' => 0,
    'ADDON_NAME_LIMIT' => 0,
    'key' => 0,
    'installed_version' => 0,
    'actual_version' => 0,
    'latest_version' => 0,
    'settings' => 0,
    'install_datetime_format' => 0,
    'verified_developer' => 0,
    'status_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bfab8fb14b58_91026995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bfab8fb14b58_91026995')) {function content_60bfab8fb14b58_91026995($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('active','disabled','not_installed','na','na','verified','installed_version','addons.latest_version','installed_version','addons.latest_version','addons.latest_available_for_installation_version','installed_version','version','installed_date','developer','addon_id','status','installed_date'));
?>



<?php $_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT'] = new Smarty_variable(50, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['ADDON_NAME_LIMIT'] = clone $_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT'];?>

<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->tpl_vars['status_description'] = new Smarty_variable($_smarty_tpl->__("active"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['status']===smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>
    <?php $_smarty_tpl->tpl_vars['status_description'] = new Smarty_variable($_smarty_tpl->__("disabled"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['status']===smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
    <?php $_smarty_tpl->tpl_vars['status_description'] = new Smarty_variable($_smarty_tpl->__("not_installed"), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['installed_version'] = new Smarty_variable($_smarty_tpl->tpl_vars['addon']->value['version'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['latest_version'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['latest_upgrade_version'])===null||$tmp==='' ? $_smarty_tpl->__("na") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['actual_version'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['actual_version'])===null||$tmp==='' ? $_smarty_tpl->__("na") : $tmp), null, 0);?>
<?php ob_start();
echo $_smarty_tpl->__("verified");
$_tmp14=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['verified_developer'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value['identified']||$_smarty_tpl->tpl_vars['a']->value['is_core_addon'] ? " (".$_tmp14.")" : '', null, 0);?>


<?php $_smarty_tpl->createLocalArrayVariable('a', null, 1);
$_smarty_tpl->tpl_vars['a']->value['is_long_name'] = (mb_strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['a']->value['name']), 'UTF-8')>$_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['a'] = clone $_smarty_tpl->tpl_vars['a'];?>
<?php $_smarty_tpl->createLocalArrayVariable('a', null, 1);
$_smarty_tpl->tpl_vars['a']->value['short_name'] = (($tmp = @smarty_modifier_truncate($_smarty_tpl->tpl_vars['a']->value['name'],$_smarty_tpl->tpl_vars['ADDON_NAME_LIMIT']->value,"...",true))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['a'] = clone $_smarty_tpl->tpl_vars['a'];?>



<?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']||!$_smarty_tpl->tpl_vars['addon']->value['actual_version']) {?>
    <?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_version_info'] = new Smarty_variable($_tmp15.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_version_info'] = clone $_smarty_tpl->tpl_vars['addon_full_version_info'];?>

<?php } elseif ($_smarty_tpl->tpl_vars['actual_version']->value===$_smarty_tpl->tpl_vars['latest_version']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_tmp16=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_tmp17=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_version_info'] = new Smarty_variable($_tmp16.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_tmp17.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_version_info'] = clone $_smarty_tpl->tpl_vars['addon_full_version_info'];?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("addons.latest_version");
$_tmp18=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("addons.latest_available_for_installation_version");
$_tmp19=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("installed_version");
$_tmp20=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_version_info'] = new Smarty_variable($_tmp18.":
".((string)$_smarty_tpl->tpl_vars['actual_version']->value)."

".$_tmp19.":
".((string)$_smarty_tpl->tpl_vars['latest_version']->value)."

".$_tmp20.":
".((string)$_smarty_tpl->tpl_vars['installed_version']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_version_info'] = clone $_smarty_tpl->tpl_vars['addon_full_version_info'];?>

<?php }?>


<?php $_smarty_tpl->tpl_vars['install_datetime_format'] = new Smarty_variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), null, 0);?>



<?php ob_start();
echo $_smarty_tpl->__("version");
$_tmp21=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("installed_date");
$_tmp22=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("developer");
$_tmp23=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("addon_id");
$_tmp24=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("status");
$_tmp25=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addon_full_description'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['addon']->value['name'])."

".((string)strip_tags($_smarty_tpl->tpl_vars['addon']->value['description']))."

".$_tmp21.": ".((string)(($tmp = @$_smarty_tpl->tpl_vars['addon']->value['version'])===null||$tmp==='' ? 0.1 : $tmp))."
".$_tmp22.": ".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value)."
".$_tmp23.": ".((string)$_smarty_tpl->tpl_vars['a']->value['supplier']).((string)$_smarty_tpl->tpl_vars['verified_developer']->value)."
".$_tmp24.": ".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])."
".$_tmp25.": ".((string)$_smarty_tpl->tpl_vars['status_description']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['addon_full_description'] = clone $_smarty_tpl->tpl_vars['addon_full_description'];?>



<?php ob_start();
echo $_smarty_tpl->__("installed_date");
$_tmp26=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['install_datetime_full_info'] = new Smarty_variable($_tmp26.":
".((string)$_smarty_tpl->tpl_vars['install_datetime_format']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['install_datetime_full_info'] = clone $_smarty_tpl->tpl_vars['install_datetime_full_info'];?>
<?php }} ?>
