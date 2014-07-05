<?php /*%%SmartyHeaderCode:1407353b7a46f2141f8-35062950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d8e7a1832ada66f9bfdf2c660855b940727e8d3' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\page.techtree.default.tpl',
      1 => 1404224072,
      2 => 'file',
    ),
    '048ff89d2653854678a978770488dea6f002e5f8' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\layout.full.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    '7438a635451ada52ad51ba6c4acc9b8df3648c0f' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\main.header.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    'a99451e9a3ed4c66a404dc6163c7fbbcdd884bb9' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\main.navigation.tpl',
      1 => 1404362074,
      2 => 'file',
    ),
    'bdef42e05f8eef76cca7cb30417bdeb420c25e86' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\main.topnav.tpl',
      1 => 1404109373,
      2 => 'file',
    ),
    '7b0e357b40a13a08e59ff6ba836b83aac806c4da' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\main.footer.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1407353b7a46f2141f8-35062950',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b7a46fd8d4d3_87349912',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b7a46fd8d4d3_87349912')) {function content_53b7a46fd8d4d3_87349912($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>科技 - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "準備";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "資訊";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["\u661f\u671f\u65e5","\u661f\u671f\u4e00","\u661f\u671f\u4e8c","\u661f\u671f\u4e09","\u661f\u671f\u56db","\u661f\u671f\u4e94","\u661f\u671f\u516d"] 
	var months 		= ["01","02","03","04","05","06","07","08","09","10","11","12"] ;
	var tdformat	= "[Y]年[m]月[d]日 [D] [H]時[i]分[s]秒";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="techtree" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value){?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog">更新日誌</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview">概況</a></li>
		<li><a href="game.php?page=imperium">帝國</a></li>		<li><a href="game.php?page=research">研究</a></li>		<li><a href="game.php?page=buildings">建築</a></li>		<li><a href="game.php?page=shipyard&amp;mode=fleet">造船廠</a></li>		<li><a href="game.php?page=shipyard&amp;mode=defense">防禦</a></li>		<li><a href="game.php?page=officier">事務官</a></li>		<li><a href="game.php?page=trader">市場</a></li>		<li><a href="game.php?page=fleetDealer">艦隊回收商</a></li>		<li><a href="game.php?page=fleetTable">艦隊</a></li>		<li><a href="game.php?page=techtree">科技</a></li>		<li><a href="game.php?page=resources">資源</a></li>		<li><a href="game.php?page=achievements">成就</a></li>
		<li><a href="game.php?page=moonbuy">月球商人</a></li>
		<li><a href="game.php?page=findDebris">搜索廢墟</a></li>
		<li><a href="game.php?page=market"style="color:yellow"><em>資源交易市場</em><em><font size="1" color="lime">   現有 <?php echo $_smarty_tpl->tpl_vars['ddd']->value;?>
</font></em></a></li>		<li class="menucat2-head"></li>
		<li><a href="game.php?page=galaxy">銀河系</a></li>		<li><a href="game.php?page=alliance">聯盟</a></li>        <?php if (!empty($_smarty_tpl->tpl_vars['hasBoard']->value)){?><li><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a></li><?php }?>
		<li><a href="game.php?page=statistics">統計</a></li>		<li><a href="game.php?page=records">記錄</a></li>		<li><a href="game.php?page=battleHall">名人堂</a></li>		<li><a href="game.php?page=search">搜索</a></li>		<li><a href="game.php?page=chat">聊天</a></li>		<li><a href="game.php?page=ticket">客服系統</a></li>		<li><a href="game.php?page=questions">新手教學</a></li>
		<li><a href="game.php?page=banList">封鎖名單</a></li>		<li><a href="index.php?page=rules" target="rules">遊戲規則</a></li>
		<li><a href="game.php?page=battleSimulator">戰鬥模擬器</a></li>
		<li class="menucat3-head"></li>
		<li><a href="game.php?page=messages">訊息<?php if ($_smarty_tpl->tpl_vars['new_message']->value>0){?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></li>		<li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);">筆記</a></li>		<li><a href="game.php?page=buddyList">好友名單</a></li>		<li><a href="game.php?page=settings">設置</a></li>
		<li><a href="game.php?page=logout">登出</a></li>
		<?php if ($_smarty_tpl->tpl_vars['authlevel']->value>0){?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_administration'];?>
 (<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
)</a></li><?php }?>
		<li class="menu-footer"></li>
	</ul>
</div><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
						<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg" alt=""> 
					</td>
					<td id="planetSelectorWrapper">
						<select id="planetSelector">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PlanetSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['current_pid']->value),$_smarty_tpl);?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
.gif" alt=""></td>
									<?php } ?>
								</tr>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['resourceID']->value];?>
</td>
									<?php } ?>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['shortlyNumber']->value){?>
								<tr>
                                    <?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])){?>
                                    <?php $_smarty_tpl->createLocalArrayVariable('resouceData', true, 0);
$_smarty_tpl->tpl_vars['resouceData']->value['current'] = $_smarty_tpl->tpl_vars['resouceData']->value['max']+$_smarty_tpl->tpl_vars['resouceData']->value['used'];?>
                                    <td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['resouceData']->value['current']<0){?> style="color:red"<?php }?>><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</span></td>
                                    <?php }else{ ?>
                                    <td class="res_current tooltip" id="current_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['current'];?>
" data-tooltip-content="
              <span>Produc <?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
</span><br /><br />
              Production daily: <?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['daily']);?>
<br />
              Production weekly: <?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['weekly']);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
</td>
                                    <?php }?>
                                    <?php } ?>
                                </tr>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])||!isset($_smarty_tpl->tpl_vars['resouceData']->value['max'])){?>
									<td>&nbsp;</td>
									<?php }else{ ?>
									<td class="res_max tooltip" id="max_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['max'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</td>
									<?php }?>
									<?php } ?>
								</tr>
								<?php }else{ ?>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])){?>
                                    <?php $_smarty_tpl->createLocalArrayVariable('resouceData', true, 0);
$_smarty_tpl->tpl_vars['resouceData']->value['current'] = $_smarty_tpl->tpl_vars['resouceData']->value['max']+$_smarty_tpl->tpl_vars['resouceData']->value['used'];?>
                                    <td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['resouceData']->value['current']<0){?> style="color:red"<?php }?>><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</span></td>
                                    <?php }else{ ?>
                                    <td class="res_current tooltip" id="current_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['current'];?>
" data-tooltip-content="
									<?php echo $_smarty_tpl->tpl_vars['LNG']->value['rs_daily'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['daily']);?>
<br />
									<?php echo $_smarty_tpl->tpl_vars['LNG']->value['rs_weekly'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['weekly']);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
</td>
                                    <?php }?>
                                    <?php } ?>
								</tr>
								<tr>
									<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['resouceData']->value['current'])||!isset($_smarty_tpl->tpl_vars['resouceData']->value['max'])){?>
                                    <td>&nbsp;</td>
                                    <?php }else{ ?>
                                    <td class="res_max tooltip" id="max_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['current'];?>
" data-tooltip-content="
									<?php echo $_smarty_tpl->tpl_vars['LNG']->value['rs_daily'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['daily']);?>
<br />
									<?php echo $_smarty_tpl->tpl_vars['LNG']->value['rs_weekly'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['weekly']);?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
</td>
                                    <?php }?>
                                    <?php } ?>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php if (!$_smarty_tpl->tpl_vars['vmode']->value){?>
		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo json_encode($_smarty_tpl->tpl_vars['shortlyNumber']->value);?>

		var vacation			= <?php echo $_smarty_tpl->tpl_vars['vmode']->value;?>
;
		<?php  $_smarty_tpl->tpl_vars['resouceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resouceData']->_loop = false;
 $_smarty_tpl->tpl_vars['resourceID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resouceData']->key => $_smarty_tpl->tpl_vars['resouceData']->value){
$_smarty_tpl->tpl_vars['resouceData']->_loop = true;
 $_smarty_tpl->tpl_vars['resourceID']->value = $_smarty_tpl->tpl_vars['resouceData']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['resouceData']->value['production'])){?>
		resourceTicker({
			available: <?php echo json_encode($_smarty_tpl->tpl_vars['resouceData']->value['current']);?>
,
			limit: [0, <?php echo json_encode($_smarty_tpl->tpl_vars['resouceData']->value['max']);?>
],
			production: <?php echo json_encode($_smarty_tpl->tpl_vars['resouceData']->value['production']);?>
,
			valueElem: "current_<?php echo $_smarty_tpl->tpl_vars['resouceData']->value['name'];?>
"
		}, true);
		<?php }?>
		<?php } ?>
		</script>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['closed']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_closed'];?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['delete']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['vacation']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tn_vacation_mode'];?>
 <?php echo $_smarty_tpl->tpl_vars['vacation']->value;?>
</div>
	<?php }?><div id="content">


<table>
        <tr>
            <td><a href="game.php?page=techtree&mode=build">建築</a></td>
            <td><a href="game.php?page=techtree&mode=tech">研究</a></td>
            <td><a href="game.php?page=techtree&mode=officier">事務官</a></td>
        </tr>
        <tr>
            <td><a href="game.php?page=techtree&mode=fleet">艦隊</a></td>
            <td><a href="game.php?page=techtree&mode=defense">防禦</a></td>
            <td><a href="game.php?page=techtree">所有</a></td>
        </tr>
</table>

<table style="min-width:600px;width:600px;">

<?php  $_smarty_tpl->tpl_vars['requireList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['requireList']->_loop = false;
 $_smarty_tpl->tpl_vars['elementID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TechTreeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['requireList']->key => $_smarty_tpl->tpl_vars['requireList']->value){
$_smarty_tpl->tpl_vars['requireList']->_loop = true;
 $_smarty_tpl->tpl_vars['elementID']->value = $_smarty_tpl->tpl_vars['requireList']->key;
?>
<?php if (!is_array($_smarty_tpl->tpl_vars['requireList']->value)){?>

<tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['requireList']->value];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tt_requirements'];?>
</th>
</tr>

<?php }else{ ?>

<tr>
	<td><a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
)">
	<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>

	.<?php if ($_smarty_tpl->tpl_vars['elementID']->value>=600&&$_smarty_tpl->tpl_vars['elementID']->value<=699){?>jpg<?php }else{ ?>gif<?php }?>" width="100" height="100"></a>
	</td>

	<td>
	<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</a>
	</td>

	<td>
	<?php if ($_smarty_tpl->tpl_vars['requireList']->value){?>
		<?php  $_smarty_tpl->tpl_vars['NeedLevel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NeedLevel']->_loop = false;
 $_smarty_tpl->tpl_vars['requireID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['requireList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['NeedLevel']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['NeedLevel']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['NeedLevel']->key => $_smarty_tpl->tpl_vars['NeedLevel']->value){
$_smarty_tpl->tpl_vars['NeedLevel']->_loop = true;
 $_smarty_tpl->tpl_vars['requireID']->value = $_smarty_tpl->tpl_vars['NeedLevel']->key;
 $_smarty_tpl->tpl_vars['NeedLevel']->iteration++;
 $_smarty_tpl->tpl_vars['NeedLevel']->last = $_smarty_tpl->tpl_vars['NeedLevel']->iteration === $_smarty_tpl->tpl_vars['NeedLevel']->total;
?>
			<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
)">
			<span style="color:<?php if ($_smarty_tpl->tpl_vars['NeedLevel']->value['own']<$_smarty_tpl->tpl_vars['NeedLevel']->value['count']){?>red<?php }else{ ?>lime<?php }?>;
			"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['requireID']->value];?>
 (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tt_lvl'];?>
 <?php echo min($_smarty_tpl->tpl_vars['NeedLevel']->value['count'],$_smarty_tpl->tpl_vars['NeedLevel']->value['own']);?>
/<?php echo $_smarty_tpl->tpl_vars['NeedLevel']->value['count'];?>
)</span></a>
			<?php if (!$_smarty_tpl->tpl_vars['NeedLevel']->last){?><br><?php }?>
		<?php } ?>
	<?php }?>
	</td>

</tr>
<?php }?>
<?php } ?>

</table>

</div>
<?php  $_smarty_tpl->tpl_vars['cronjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->key => $_smarty_tpl->tpl_vars['cronjob']->value){
$_smarty_tpl->tpl_vars['cronjob']->_loop = true;
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>