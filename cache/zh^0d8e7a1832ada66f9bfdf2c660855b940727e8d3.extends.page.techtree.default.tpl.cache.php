<?php /* Smarty version Smarty-3.1.13, created on 2014-07-05 07:08:31
         compiled from "C:\wamp\www\styles\templates\game\page.techtree.default.tpl" */ ?>
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
  ),
  'nocache_hash' => '1407353b7a46f2141f8-35062950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b7a46fd0b1b6_99372088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b7a46fd0b1b6_99372088')) {function content_53b7a46fd0b1b6_99372088($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '1407353b7a46f2141f8-35062950');
content_53b7a46f266273_78663073($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</a><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1407353b7a46f2141f8-35062950');
content_53b7a46f4b3e12_63395385($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '1407353b7a46f2141f8-35062950');
content_53b7a46f85df59_45490714($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">


<table>
        <tr>
            <td><a href="game.php?page=techtree&mode=build"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></td>
            <td><a href="game.php?page=techtree&mode=tech"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></td>
            <td><a href="game.php?page=techtree&mode=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a></td>
        </tr>
        <tr>
            <td><a href="game.php?page=techtree&mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></td>
            <td><a href="game.php?page=techtree&mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></td>
            <td><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ma_all'];?>
</a></td>
        </tr>
</table>

<table style="min-width:600px;width:600px;">

<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'requireList\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'requireList\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'elementID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'TechTreeList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'requireList\']->key => $_smarty_tpl->tpl_vars[\'requireList\']->value){
$_smarty_tpl->tpl_vars[\'requireList\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'elementID\']->value = $_smarty_tpl->tpl_vars[\'requireList\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!is_array($_smarty_tpl->tpl_vars[\'requireList\']->value)){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>


<tr>
	<th colspan="2"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'requireList\']->value];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tt_requirements\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</th>
</tr>

<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>


<tr>
	<td><a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'elementID\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
)">
	<img src="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
gebaeude/<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'elementID\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	.<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementID\']->value>=600&&$_smarty_tpl->tpl_vars[\'elementID\']->value<=699){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
jpg<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
gif<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" width="100" height="100"></a>
	</td>

	<td>
	<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'elementID\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
)"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</a>
	</td>

	<td>
	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'requireList\']->value){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'NeedLevel\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'NeedLevel\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'requireID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'requireList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'NeedLevel\']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars[\'NeedLevel\']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars[\'NeedLevel\']->key => $_smarty_tpl->tpl_vars[\'NeedLevel\']->value){
$_smarty_tpl->tpl_vars[\'NeedLevel\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'requireID\']->value = $_smarty_tpl->tpl_vars[\'NeedLevel\']->key;
 $_smarty_tpl->tpl_vars[\'NeedLevel\']->iteration++;
 $_smarty_tpl->tpl_vars[\'NeedLevel\']->last = $_smarty_tpl->tpl_vars[\'NeedLevel\']->iteration === $_smarty_tpl->tpl_vars[\'NeedLevel\']->total;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

			<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'elementID\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
)">
			<span style="color:<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'NeedLevel\']->value[\'own\']<$_smarty_tpl->tpl_vars[\'NeedLevel\']->value[\'count\']){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
red<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
lime<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
;
			"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'requireID\']->value];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 (<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tt_lvl\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo min($_smarty_tpl->tpl_vars[\'NeedLevel\']->value[\'count\'],$_smarty_tpl->tpl_vars[\'NeedLevel\']->value[\'own\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
/<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'NeedLevel\']->value[\'count\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
)</span></a>
			<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!$_smarty_tpl->tpl_vars[\'NeedLevel\']->last){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<br><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	</td>

</tr>
<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>


</table>

</div>
<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-07-05 07:08:31
         compiled from "C:\wamp\www\styles\templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53b7a46f266273_78663073')) {function content_53b7a46f266273_78663073($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
 - <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 - <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
, <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
, <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
, <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
, <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
, <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-07-05 07:08:31
         compiled from "C:\wamp\www\styles\templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53b7a46f4b3e12_63395385')) {function content_53b7a46f4b3e12_63395385($_smarty_tpl) {?><div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_changelog'];?>
</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
		<?php if (isModulAvalible(@constant('MODULE_IMPERIUM'))){?><li><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_RESEARCH'))){?><li><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_BUILDING'))){?><li><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_FLEET'))){?><li><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SHIPYARD_DEFENSIVE'))){?><li><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_OFFICIER'))||isModulAvalible(@constant('MODULE_DMEXTRAS'))){?><li><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_TRADER'))){?><li><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_FLEET_TRADER'))){?><li><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_FLEET_TABLE'))){?><li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_TECHTREE'))){?><li><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_RESSOURCE_LIST'))){?><li><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a></li><?php }?>
		<li><a href="game.php?page=achievements"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_achievements'];?>
</a></li>
		<li><a href="game.php?page=moonbuy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_moonbuy'];?>
</a></li>
		<li><a href="game.php?page=findDebris"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['show_debris'];?>
</a></li>
		<?php if (isModulAvalible(@constant('MODULE_SUPPORT'))){?><li><a href="game.php?page=market"style="color:yellow"><em><?php echo $_smarty_tpl->tpl_vars['LNG']->value['an_anres'];?>
</em><em><font size="1" color="lime">   <?php echo $_smarty_tpl->tpl_vars['LNG']->value['an_lotsum'];?>
 <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'ddd\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</font></em></a></li><?php }?>
		<li class="menucat2-head"></li>
		<?php if (isModulAvalible(@constant('MODULE_GALAXY'))){?><li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_ALLIANCE'))){?><li><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a></li><?php }?>
        <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		<?php if (isModulAvalible(@constant('MODULE_STATISTICS'))){?><li><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_RECORDS'))){?><li><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_BATTLEHALL'))){?><li><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SEARCH'))){?><li><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_CHAT'))){?><li><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_SUPPORT'))){?><li><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a></li><?php }?>
		<li><a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a></li>
		<?php if (isModulAvalible(@constant('MODULE_BANLIST'))){?><li><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a></li><?php }?>
		<li><a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a></li>
		<?php if (isModulAvalible(@constant('MODULE_SIMULATOR'))){?><li><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a></li><?php }?>

		<li class="menucat3-head"></li>
		<?php if (isModulAvalible(@constant('MODULE_MESSAGES'))){?><li><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];?>
<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value>0){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_NOTICE'))){?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@constant('MODULE_BUDDYLIST'))){?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 (<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		<li class="menu-footer"></li>
	</ul>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-07-05 07:08:31
         compiled from "C:\wamp\www\styles\templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53b7a46f85df59_45490714')) {function content_53b7a46f85df59_45490714($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'C:\\\\wamp\\\\www\\\\includes\\\\libs\\\\Smarty\\\\plugins\\\\function.html_options.php\';
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
						<img src="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
.jpg" alt=""> 
					</td>
					<td id="planetSelectorWrapper">
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
images/<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

								<tr>
                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resouceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used\'];?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <td class="res_current"><span<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</span></td>
                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-tooltip-content="
              <span>Produc <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</span><br /><br />
              Production daily: <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'daily\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<br />
              Production weekly: <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'weekly\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</td>
                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                </tr>
								<tr>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'])){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resouceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used\'];?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <td class="res_current"><span<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']<0){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</span></td>
                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-tooltip-content="
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'rs_daily\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'daily\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<br />
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'rs_weekly\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'weekly\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</td>
                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'])){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <td>&nbsp;</td>
                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }else{ ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
" data-tooltip-content="
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'rs_daily\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'daily\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<br />
									<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'rs_weekly\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'weekly\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</td>
                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

                                    <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		var vacation			= <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
;
		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\'])){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		resourceTicker({
			available: <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
,
			limit: [0, <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
],
			production: <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\']);?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
,
			valueElem: "current_<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
"
		}, true);
		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php } ?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

		</script>
		<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'delete\']->value){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'vacation\']->value){?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
 <?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/<?php }?>/*/%%SmartyNocache:1407353b7a46f2141f8-35062950%%*/';?>
<?php }} ?>