<?php /* Smarty version 3.1.27, created on 2016-12-06 19:07:01
         compiled from "\svoya-tropa\manager\templates\default\element\tv\renders\input\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2448358470c551ff891_14021326%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e2727d2869bfa4a6a682163ce21525e944d517' => 
    array (
      0 => '\\svoya-tropa\\manager\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2448358470c551ff891_14021326',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58470c55208ce3_57003233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58470c55208ce3_57003233')) {
function content_58470c55208ce3_57003233 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2448358470c551ff891_14021326';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>