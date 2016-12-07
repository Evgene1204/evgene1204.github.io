<?php /* Smarty version 3.1.27, created on 2016-12-06 19:07:28
         compiled from "\svoya-tropa\manager\templates\default\element\chunk\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3182658470c7084ba42_79630177%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4287bafc2d72365727923531408b973ecab75a' => 
    array (
      0 => '\\svoya-tropa\\manager\\templates\\default\\element\\chunk\\update.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3182658470c7084ba42_79630177',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58470c70873d12_86948371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58470c70873d12_86948371')) {
function content_58470c70873d12_86948371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3182658470c7084ba42_79630177';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>