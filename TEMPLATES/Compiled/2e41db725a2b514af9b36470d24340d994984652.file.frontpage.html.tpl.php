<?php /* Smarty version Smarty-3.1.8, created on 2012-03-11 22:17:01
         compiled from "/home/michael/htdocs/cchits2/CLASSES/../TEMPLATES/Source/frontpage.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13989394564f5d245d60c8e8-47990422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e41db725a2b514af9b36470d24340d994984652' => 
    array (
      0 => '/home/michael/htdocs/cchits2/CLASSES/../TEMPLATES/Source/frontpage.html.tpl',
      1 => 1331392338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13989394564f5d245d60c8e8-47990422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseURL' => 0,
    'ShowDaily' => 0,
    'ShowWeekly' => 0,
    'ShowMonthly' => 0,
    'jquery' => 0,
    'jplayer' => 0,
    'jquerysparkline' => 0,
    'daily_player_json' => 0,
    'weekly_player_json' => 0,
    'monthly_player_json' => 0,
    'ServiceName' => 0,
    'Slogan' => 0,
    'chart' => 0,
    'daily' => 0,
    'weekly' => 0,
    'monthly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5d245d936a96_94839837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5d245d936a96_94839837')) {function content_4f5d245d936a96_94839837($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/michael/htdocs/cchits2/EXTERNALS/SMARTY/3.0.8/libs/plugins/function.cycle.php';
?><html>
	<head>
		<link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
daily/rss" title="The <?php echo $_smarty_tpl->tpl_vars['ShowDaily']->value;?>
" />
		<link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
weekly/rss" title="The <?php echo $_smarty_tpl->tpl_vars['ShowWeekly']->value;?>
" />
		<link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
monthly/rss" title="The <?php echo $_smarty_tpl->tpl_vars['ShowMonthly']->value;?>
" />
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
EXTERNALS/JQUERY/<?php echo $_smarty_tpl->tpl_vars['jquery']->value;?>
/jquery.min.js"></script>
		<link href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
EXTERNALS/JPLAYER/<?php echo $_smarty_tpl->tpl_vars['jplayer']->value;?>
/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
EXTERNALS/JPLAYER/<?php echo $_smarty_tpl->tpl_vars['jplayer']->value;?>
/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
JAVASCRIPT/playlist.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
EXTERNALS/JQUERY.SPARKLINE/<?php echo $_smarty_tpl->tpl_vars['jquerysparkline']->value;?>
/jquery.sparkline.min.js"></script>
		<script type="text/javascript">//<![CDATA[
		$(document).ready(function() {
			$('.inlinesparkline').sparkline();
<?php echo $_smarty_tpl->getSubTemplate ("player.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('player_id'=>"1",'playlist'=>$_smarty_tpl->tpl_vars['daily_player_json']->value), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("player.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('player_id'=>"2",'playlist'=>$_smarty_tpl->tpl_vars['weekly_player_json']->value), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("player.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('player_id'=>"3",'playlist'=>$_smarty_tpl->tpl_vars['monthly_player_json']->value), 0);?>

                        
		});//]]></script>
		<title><?php echo $_smarty_tpl->tpl_vars['ServiceName']->value;?>
</title>
	</head>
	<body>
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
">Welcome to <?php echo $_smarty_tpl->tpl_vars['ServiceName']->value;?>
</a></h1>
		<h2><?php echo $_smarty_tpl->tpl_vars['Slogan']->value;?>
</h2>
		<div id="chart">
			<h3>The Chart</h3>
			<table>
				<thead>
					<tr>
						<th>Position</th>
						<th>Movement</th>
						<th>60 Days Movement</th>
						<th>Track</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
<?php  $_smarty_tpl->tpl_vars['track'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['track']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['track']->key => $_smarty_tpl->tpl_vars['track']->value){
$_smarty_tpl->tpl_vars['track']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['track']->key;
?><tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eeeeee,#dddddd"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getSubTemplate ("show_track_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</tr><?php } ?>
					<tr>
						<td colspan="3"><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
chart">More...</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="daily">
			<h3>The most recent Daily Exposure show</h3>
<?php echo $_smarty_tpl->getSubTemplate ("player.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('player_id'=>"1",'playlist'=>$_smarty_tpl->tpl_vars['daily']->value), 0);?>

			<p><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
daily">More...</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
daily/rss">Feed</a></p>
		</div>
		<div id="weekly">
			<h3>The most recent Weekly Review show</h3>
<?php echo $_smarty_tpl->getSubTemplate ("player.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('player_id'=>"2",'playlist'=>$_smarty_tpl->tpl_vars['weekly']->value), 0);?>

			<p><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
weekly">More...</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
weekly/rss">Feed</a></p>
		</div>
		<div id="daily">
			<h3>The most recent Monthly Chart show</h3>
<?php echo $_smarty_tpl->getSubTemplate ("player.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('player_id'=>"3",'playlist'=>$_smarty_tpl->tpl_vars['monthly']->value), 0);?>

			<p><a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
monthly">More...</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
monthly/rss">Feed</a></p>
		</div>
	</body>
</html><?php }} ?>