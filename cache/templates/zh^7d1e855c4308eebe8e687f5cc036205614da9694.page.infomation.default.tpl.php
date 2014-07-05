<?php /*%%SmartyHeaderCode:169853b7a47c99edf1-59009203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d1e855c4308eebe8e687f5cc036205614da9694' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\page.infomation.default.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    '926e4012a563142143189b079a9fd6f7a39f19c5' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\layout.popup.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    '7438a635451ada52ad51ba6c4acc9b8df3648c0f' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\main.header.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
    '05bfd01198fc4cfbd893809bb5d732444ead58cc' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\shared.information.shipInfo.tpl',
      1 => 1404287946,
      2 => 'file',
    ),
    '7b0e357b40a13a08e59ff6ba836b83aac806c4da' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\main.footer.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169853b7a47c99edf1-59009203',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b7a47cf01bd1_84091168',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b7a47cf01bd1_84091168')) {function content_53b7a47cf01bd1_84091168($_smarty_tpl) {?><!DOCTYPE html>

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
	<title>資料 - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
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
<body id="information" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><div id="content">
<table style="width:100%;">
	<tbody>
	<tr>
		<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</th>
	</tr>
	<tr>
		<td>
			<table>
				<tr>
					<td class="transparent" style="width:120px"><img width="120" height="120" src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
.<?php if ($_smarty_tpl->tpl_vars['elementID']->value>=600&&$_smarty_tpl->tpl_vars['elementID']->value<=699){?>jpg<?php }else{ ?>gif<?php }?>" alt=""></td>
					<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['longDescription'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</p>
					<?php if (!empty($_smarty_tpl->tpl_vars['Bonus']->value)){?><p>
					<b><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_bonus'];?>
</b><br>
					<?php  $_smarty_tpl->tpl_vars['elementBouns'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elementBouns']->_loop = false;
 $_smarty_tpl->tpl_vars['BonusName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Bonus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elementBouns']->key => $_smarty_tpl->tpl_vars['elementBouns']->value){
$_smarty_tpl->tpl_vars['elementBouns']->_loop = true;
 $_smarty_tpl->tpl_vars['BonusName']->value = $_smarty_tpl->tpl_vars['elementBouns']->key;
?><?php if ($_smarty_tpl->tpl_vars['elementBouns']->value[0]<0){?>-<?php }else{ ?>+<?php }?><?php if ($_smarty_tpl->tpl_vars['elementBouns']->value[1]==0){?><?php echo abs($_smarty_tpl->tpl_vars['elementBouns']->value[0]*100);?>
%<?php }else{ ?><?php echo floatval($_smarty_tpl->tpl_vars['elementBouns']->value[0]);?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['bonus'][$_smarty_tpl->tpl_vars['BonusName']->value];?>
<br><?php } ?>
					</p><?php }?>	
					<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value)){?>
					<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['to'])){?><p>
					<?php  $_smarty_tpl->tpl_vars['shoots'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shoots']->_loop = false;
 $_smarty_tpl->tpl_vars['rapidfireID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shoots']->key => $_smarty_tpl->tpl_vars['shoots']->value){
$_smarty_tpl->tpl_vars['shoots']->_loop = true;
 $_smarty_tpl->tpl_vars['rapidfireID']->value = $_smarty_tpl->tpl_vars['shoots']->key;
?>
					<?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_rf_again'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['rapidfireID']->value];?>
: <span style="color:#00ff00"><?php echo pretty_number($_smarty_tpl->tpl_vars['shoots']->value);?>
</span><br>
					<?php } ?>
					</p><?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['from'])){?><p>
					<?php  $_smarty_tpl->tpl_vars['shoots'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shoots']->_loop = false;
 $_smarty_tpl->tpl_vars['rapidfireID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FleetInfo']->value['rapidfire']['from']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shoots']->key => $_smarty_tpl->tpl_vars['shoots']->value){
$_smarty_tpl->tpl_vars['shoots']->_loop = true;
 $_smarty_tpl->tpl_vars['rapidfireID']->value = $_smarty_tpl->tpl_vars['shoots']->key;
?>
					<?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_rf_from'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['rapidfireID']->value];?>
: <span style="color:#ff0000"><?php echo pretty_number($_smarty_tpl->tpl_vars['shoots']->value);?>
</span><br>
					<?php } ?>
					</p><?php }?>
					<?php }?>				
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<?php if (!empty($_smarty_tpl->tpl_vars['productionTable']->value['production'])){?>
<?php echo $_smarty_tpl->getSubTemplate ("shared.information.production.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['productionTable']->value['storage'])){?>
<?php echo $_smarty_tpl->getSubTemplate ("shared.information.storage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate ("shared.information.shipInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['gateData']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate ("shared.information.gate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['MissileList']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate ("shared.information.missiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>