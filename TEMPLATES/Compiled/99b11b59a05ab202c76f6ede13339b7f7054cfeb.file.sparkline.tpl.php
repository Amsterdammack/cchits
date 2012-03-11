<?php /* Smarty version Smarty-3.1.8, created on 2012-03-11 22:17:01
         compiled from "/home/michael/htdocs/cchits2/CLASSES/../TEMPLATES/Source/sparkline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16192373784f5d245db80483-02691806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b11b59a05ab202c76f6ede13339b7f7054cfeb' => 
    array (
      0 => '/home/michael/htdocs/cchits2/CLASSES/../TEMPLATES/Source/sparkline.tpl',
      1 => 1331392338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16192373784f5d245db80483-02691806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'track' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5d245dc97c32_94356375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5d245dc97c32_94356375')) {function content_4f5d245dc97c32_94356375($_smarty_tpl) {?><span class="inlinesparkline" values="<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['track']->value['arrChartData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sparkline']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sparkline']['first']){?>,<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['intPositionID']!='null'){?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['item']->value['intPositionID'];?>
<?php } ?>"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['track']->value['arrChartData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sparkline']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sparkline']['first']){?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['item']->value['datChart'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['intPositionID'];?>
<?php } ?></span> (H:<?php echo $_smarty_tpl->tpl_vars['track']->value['60dayhighest'];?>
, L:<?php echo $_smarty_tpl->tpl_vars['track']->value['60daylowest'];?>
)<?php }} ?>