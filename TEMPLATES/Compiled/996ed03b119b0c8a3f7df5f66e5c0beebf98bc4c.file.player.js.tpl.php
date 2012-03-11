<?php /* Smarty version Smarty-3.1.8, created on 2012-03-11 22:51:19
         compiled from "/home/michael/htdocs/cchits/CLASSES/../TEMPLATES/Source/player.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10444753314f5d2c67783368-87866597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '996ed03b119b0c8a3f7df5f66e5c0beebf98bc4c' => 
    array (
      0 => '/home/michael/htdocs/cchits/CLASSES/../TEMPLATES/Source/player.js.tpl',
      1 => 1331392338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10444753314f5d2c67783368-87866597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player_id' => 0,
    'playlist' => 0,
    'baseURL' => 0,
    'jplayer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5d2c67853287_83552751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5d2c67853287_83552751')) {function content_4f5d2c67853287_83552751($_smarty_tpl) {?>                      var audioPlaylist<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
 = new Playlist(
                                                      "<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
",
                                                      <?php echo $_smarty_tpl->tpl_vars['playlist']->value;?>
,
                                                       {
                                                          ready: function() {
                                                              audioPlaylist<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
.displayPlaylist();
                                                              audioPlaylist<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
.playlistInit(false);
                                                          },
                                                          ended: function() {
                                                              audioPlaylist<?php echo $_smarty_tpl->tpl_vars['player_id']->value;?>
.playlistNext();
                                                          },
                                                          play: function() {
                                                              $(this).jPlayer("pauseOthers");
                                                          },
                                                          timeupdate: function(event) {
                                                          	  currentTime=event.jPlayer.status.currentTime*1000; 
                                                          },
                                                          swfPath: "<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
EXTERNALS/JPLAYER/<?php echo $_smarty_tpl->tpl_vars['jplayer']->value;?>
/",
                                                          supplied: "mp3,oga"
                                                      });
<?php }} ?>