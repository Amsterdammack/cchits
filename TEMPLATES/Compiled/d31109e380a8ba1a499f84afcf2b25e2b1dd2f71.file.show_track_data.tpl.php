<?php /* Smarty version Smarty-3.1.8, created on 2012-03-11 22:51:19
         compiled from "/home/michael/htdocs/cchits/CLASSES/../TEMPLATES/Source/show_track_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6521070144f5d2c6785ec47-06813899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd31109e380a8ba1a499f84afcf2b25e2b1dd2f71' => 
    array (
      0 => '/home/michael/htdocs/cchits/CLASSES/../TEMPLATES/Source/show_track_data.tpl',
      1 => 1331392338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6521070144f5d2c6785ec47-06813899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'position' => 0,
    'track' => 0,
    'baseURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5d2c67a143f1_06730881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5d2c67a143f1_06730881')) {function content_4f5d2c67a143f1_06730881($_smarty_tpl) {?>				    	<td><?php echo $_smarty_tpl->tpl_vars['position']->value;?>
</td>
				    	<td><?php echo $_smarty_tpl->tpl_vars['track']->value['strPositionYesterday'];?>
</td>
				    	<td><?php echo $_smarty_tpl->getSubTemplate ("sparkline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
				    	<td><a name="<?php echo $_smarty_tpl->tpl_vars['track']->value['intTrackID'];?>
"></a>"<a href="<?php echo $_smarty_tpl->tpl_vars['track']->value['strTrackUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['track']->value['strTrackName'];?>
</a>" by "<a href="<?php echo $_smarty_tpl->tpl_vars['track']->value['strArtistUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['track']->value['strArtistName'];?>
</a>"</td>
				    	<td><abbr title="<?php echo $_smarty_tpl->tpl_vars['track']->value['strLicenseName'];?>
"><?php echo $_smarty_tpl->tpl_vars['track']->value['enumTrackLicense'];?>
</abbr><?php if ($_smarty_tpl->tpl_vars['track']->value['isNSFW']==1){?>, <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
about#nsfw">Not Work/Family Safe</a><?php }?>, <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
track/<?php echo $_smarty_tpl->tpl_vars['track']->value['intTrackID'];?>
">More Details...</a></td>
<?php }} ?>