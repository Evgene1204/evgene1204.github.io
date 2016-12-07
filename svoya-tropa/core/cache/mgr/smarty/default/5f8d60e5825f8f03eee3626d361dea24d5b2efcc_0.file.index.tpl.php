<?php /* Smarty version 3.1.27, created on 2016-12-06 18:37:11
         compiled from "\svoya-tropa\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1833258470557d6c8d2_86496553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f8d60e5825f8f03eee3626d361dea24d5b2efcc' => 
    array (
      0 => '\\svoya-tropa\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833258470557d6c8d2_86496553',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58470557d6e968_99328688',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58470557d6e968_99328688')) {
function content_58470557d6e968_99328688 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1833258470557d6c8d2_86496553';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>