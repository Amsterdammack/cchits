<?php /* Smarty version Smarty-3.1.8, created on 2012-03-11 22:17:01
         compiled from "/home/michael/htdocs/cchits2/CLASSES/../TEMPLATES/Source/player.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6914887194f5d245dda1ef1-97739537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd254155505a5e02b579ded7424bd7088521e1a54' => 
    array (
      0 => '/home/michael/htdocs/cchits2/CLASSES/../TEMPLATES/Source/player.html.tpl',
      1 => 1331392338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6914887194f5d245dda1ef1-97739537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player_id' => 0,
    'playlist' => 0,
    'listitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5d245e11b659_98324635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5d245e11b659_98324635')) {function content_4f5d245e11b659_98324635($_smarty_tpl) {?><div id="jquery_jplayer_<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
" class="jp-jplayer"></div>
			<div class="jp-audio">
				<div class="jp-type-playlist">
				<div id="jp_interface_<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
" class="jp-interface">
					<ul class="jp-controls">
						<li><a href="#" class="jp-play" tabindex="1">Play Media</a></li>
						<li><a href="#" class="jp-pause" tabindex="1">Pause Media</a></li>
						<li><a href="#" class="jp-stop" tabindex="1">Stop Media</a></li>
						<li><a href="#" class="jp-mute" tabindex="1">Mute Media</a></li>
						<li><a href="#" class="jp-unmute" tabindex="1">Unmute Media</a></li>
<?php if (isset($_smarty_tpl->tpl_vars['playlist']->value['player_data'])){?><?php }elseif(is_array($_smarty_tpl->tpl_vars['playlist']->value)){?>
						<li><a href="#" class="jp-previous" tabindex="1">Previous Track</a></li>
						<li><a href="#" class="jp-next" tabindex="1">Next Track</a></li>
<?php }?>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
				</div>
				<div id="jp_playlist_<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
" class="jp-playlist">
					<ul>
<?php if (isset($_smarty_tpl->tpl_vars['playlist']->value['player_data'])){?>
                        <li><?php echo $_smarty_tpl->tpl_vars['playlist']->value['player_data']['name'];?>
 (<?php if (isset($_smarty_tpl->tpl_vars['playlist']->value['player_data']['mp3'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['player_data']['mp3'];?>
">mp3</a> | <?php }?><?php if (isset($_smarty_tpl->tpl_vars['playlist']->value['player_data']['oga'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['player_data']['oga'];?>
">ogg</a> | <?php }?><?php if (isset($_smarty_tpl->tpl_vars['playlist']->value['player_data']['m4a'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['player_data']['m4a'];?>
">M4A</a> | <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['player_data']['link'];?>
">link</a>)</li>
<?php }elseif(is_array($_smarty_tpl->tpl_vars['playlist']->value)){?><?php  $_smarty_tpl->tpl_vars['listitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listitem']->key => $_smarty_tpl->tpl_vars['listitem']->value){
$_smarty_tpl->tpl_vars['listitem']->_loop = true;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['listitem']->value['player_data']['name'];?>
 (<?php if (isset($_smarty_tpl->tpl_vars['listitem']->value['player_data']['mp3'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['listitem']->value['player_data']['mp3'];?>
">mp3</a> | <?php }?><?php if (isset($_smarty_tpl->tpl_vars['listitem']->value['player_data']['oga'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['listitem']->value['player_data']['oga'];?>
">ogg</a> | <?php }?><?php if (isset($_smarty_tpl->tpl_vars['playlist']->value['player_data']['m4a'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['player_data']['m4a'];?>
">M4A</a> | <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['listitem']->value['player_data']['link'];?>
">link</a>)</li>
<?php } ?><?php }?>
					</ul>
				</div>
			</div>
		</div><?php }} ?>