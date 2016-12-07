<?php /* Smarty version 3.1.27, created on 2016-12-06 18:38:21
         compiled from "\svoya-tropa\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170395847059d993f78_05596511%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f4f4a8f64201b1c5b45a34c7b6a920cb40d197' => 
    array (
      0 => '\\svoya-tropa\\manager\\templates\\default\\welcome.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170395847059d993f78_05596511',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5847059d9f69f4_08084962',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847059d9f69f4_08084962')) {
function content_5847059d9f69f4_08084962 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170395847059d993f78_05596511';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>