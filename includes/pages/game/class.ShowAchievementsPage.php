<?php
	
/*
Queries are on DB-Query.txt
 */
 
class ShowAchievementsPage extends AbstractPage 
{
	public static $requireModule = 0;
	function __construct() 
	{
parent::__construct();
	}

function show()
{
	global $USER, $PLANET, $LNG, $CONF, $reslist, $resource;
	
	/* Dark Matter Rewards - How it works? How i Know Achievement?
	** It's easy, if you see in the queries of one achievement "achievement1_darkmatter" for 
	** example of Bronze Emperor's achievement, where is "achievement" is the achievement
	** subname (Metal Achievements => metal ; Tech Achievements => tech ; ...) and where
	** is the "1" (number) is the number of the achievement of this category.
	** Where is "_darkmatter" is only for distinguish from another "$" commands
	*/
	
	
	$metal1_darkmatter = 1000;
	$metal2_darkmatter = 1000;
	$metal3_darkmatter = 1000;
	$metal4_darkmatter = 1000;
	$tech1_darkmatter = 1000;
	$tech2_darkmatter = 1000;
	$tech3_darkmatter = 1000;
	$tech4_darkmatter = 1000;
	$engine1_darkmatter =1000;
	$engine2_darkmatter =1000;
	$engine3_darkmatter =1000;
	$engine4_darkmatter =1000;
	$colonization1_darkmatter =1000;
	$colonization2_darkmatter =1000;
	$colonization3_darkmatter =1000;
	$moon1_darkmatter =1000;
	$moon2_darkmatter =1000;
	$moon3_darkmatter =1000;
	$war1_darkmatter =1000;
	$war2_darkmatter =1000;
	$war3_darkmatter =1000;
	$destroy1_darkmatter =1000;
	$destroy2_darkmatter =1000;
	$destroy3_darkmatter =1000;
	$destroy4_darkmatter =1000;
	$time1_darkmatter =1000;
	$time2_darkmatter =1000;
	$time3_darkmatter =1000;
	$hof1_darkmatter =1000;
	$hof2_darkmatter =1000;
	$hof3_darkmatter =1000;
	$hof4_darkmatter =1000;
	$community1_darkmatter =1000;
	$community2_darkmatter =1000;
	$community3_darkmatter =1000;
	$fleet1_darkmatter =1000;
	$fleet2_darkmatter =1000;
	$fleet3_darkmatter =1000;
	$darkmatter1_darkmatter =1000;
	$darkmatter2_darkmatter =1000;
	$darkmatter3_darkmatter =1000;
	$darkmatter4_darkmatter =1000;
	$darkmatter5_darkmatter =1000;
	$planet1_darkmatter =1000;
	$planet2_darkmatter =1000;
	$planet3_darkmatter =1000;
	$planet4_darkmatter =1000;
	$lab1_darkmatter =1000;
	$lab2_darkmatter =1000;
	$lab3_darkmatter =1000;
	$lab4_darkmatter =1000;
	
######### Mines Achievements Level 1

	if($USER['achievements_mines1'] == 0)
	{
if($PLANET['metal_mine'] >= 15 && $PLANET['crystal_mine'] >= 14 && $PLANET['deuterium_sintetizer'] >=12)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines` = achievements_mines+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $metal1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_mines1_success']),"?page=achievement",4);
		
}
if($PLANET['metal_mine'] >=15)
	$mines1_req1 = '<span style="color:lime">'.$LNG['achievements_mines1_require_1'].'</span>';
else
	$mines1_req1 = '<span style="color:red">'.$LNG['achievements_mines1_require_1'].'</span>';
if($PLANET['crystal_mine'] >=14)
	$mines1_req2 = '<span style="color:lime">'.$LNG['achievements_mines1_require_2'].'</span>';
else
	$mines1_req2 = '<span style="color:red">'.$LNG['achievements_mines1_require_2'].'</span>';
if($PLANET['deuterium_sintetizer'] >=12)
	$mines1_req3 = '<span style="color:lime">'.$LNG['achievements_mines1_require_3'].'</span>';
else
	$mines1_req3 = '<span style="color:red">'.$LNG['achievements_mines1_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'mines1_req1'    	=> $mines1_req1,
	'mines1_req2'    	=> $mines1_req2,
	'mines1_req3'    	=> $mines1_req3,
	'mines1_title'    => ' <span style="color:red">'.$LNG['achievements_mines1'].'</span>',
	'mines1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_mines1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'mines1_title'    => ' <span style="color:lime">'.$LNG['achievements_mines1'].'</span>',
	'mines1_req1'    => ' <span style="color:lime">'.$LNG['achievements_mines1_done'].'</span>',
	'mines1_req2'    	=> ' <span style="color:lime">'.'</span>',
	'mines1_req3'    	=> ' <span style="color:lime">'.'</span>',
	'mines1_img'    => ' <img border="1" src="styles/achievements/mines1_done.png" align="top" width="80" height="80"></td>',
));
	}

	
######### Mines Achievements Level 2

	if($USER['achievements_mines2'] == 0)
	{
if($PLANET['metal_mine'] >= 27 && $PLANET['crystal_mine'] >= 25 && $PLANET['deuterium_sintetizer'] >=22)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines` = achievements_mines+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $metal2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_mines2_success']),"?page=achievement",4);
		
}
if($PLANET['metal_mine'] >=27)
	$mines2_req1 = '<span style="color:lime">'.$LNG['achievements_mines2_require_1'].'</span>';
else
	$mines2_req1 = '<span style="color:red">'.$LNG['achievements_mines2_require_1'].'</span>';
if($PLANET['crystal_mine'] >=25)
	$mines2_req2 = '<span style="color:lime">'.$LNG['achievements_mines2_require_2'].'</span>';
else
	$mines2_req2 = '<span style="color:red">'.$LNG['achievements_mines2_require_2'].'</span>';
if($PLANET['deuterium_sintetizer'] >=22)
	$mines2_req3 = '<span style="color:lime">'.$LNG['achievements_mines2_require_3'].'</span>';
else
	$mines2_req3 = '<span style="color:red">'.$LNG['achievements_mines2_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'mines2_req1'    	=> $mines2_req1,
	'mines2_req2'    	=> $mines2_req2,
	'mines2_req3'    	=> $mines2_req3,
	'mines2_title'    => ' <span style="color:red">'.$LNG['achievements_mines2'].'</span>',
	'mines2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_mines2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'mines2_title'    => ' <span style="color:lime">'.$LNG['achievements_mines2'].'</span>',
	'mines2_req1'    => ' <span style="color:lime">'.$LNG['achievements_mines2_done'].'</span>',
	'mines2_req2'    	=> ' <span style="color:lime">'.'</span>',
	'mines2_req3'    	=> ' <span style="color:lime">'.'</span>',
	'mines2_img'    => ' <img border="1" src="styles/achievements/mines2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Mines Achievements Level 3

	if($USER['achievements_mines3'] == 0)
	{
if($PLANET['metal_mine'] >= 42 && $PLANET['crystal_mine'] >= 38 && $PLANET['deuterium_sintetizer'] >=33)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines` = achievements_mines+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $metal3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_mines3_success']),"?page=achievement",4);
		
}
if($PLANET['metal_mine'] >=42)
	$mines3_req1 = '<span style="color:lime">'.$LNG['achievements_mines3_require_1'].'</span>';
else
	$mines3_req1 = '<span style="color:red">'.$LNG['achievements_mines3_require_1'].'</span>';
if($PLANET['crystal_mine'] >=38)
	$mines3_req2 = '<span style="color:lime">'.$LNG['achievements_mines3_require_2'].'</span>';
else
	$mines3_req2 = '<span style="color:red">'.$LNG['achievements_mines3_require_2'].'</span>';
if($PLANET['deuterium_sintetizer'] >=33)
	$mines3_req3 = '<span style="color:lime">'.$LNG['achievements_mines3_require_3'].'</span>';
else
	$mines3_req3 = '<span style="color:red">'.$LNG['achievements_mines3_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'mines3_req1'    	=> $mines3_req1,
	'mines3_req2'    	=> $mines3_req2,
	'mines3_req3'    	=> $mines3_req3,
	'mines3_title'    => ' <span style="color:red">'.$LNG['achievements_mines3'].'</span>',
	'mines3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_mines3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'mines3_title'    => ' <span style="color:lime">'.$LNG['achievements_mines3'].'</span>',
	'mines3_req1'    => ' <span style="color:lime">'.$LNG['achievements_mines3_done'].'</span>',
	'mines3_req2'    	=> ' <span style="color:lime">'.'</span>',
	'mines3_req3'    	=> ' <span style="color:lime">'.'</span>',
	'mines3_img'    => ' <img border="1" src="styles/achievements/mines3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Mines Achievements Level 4

	if($USER['achievements_mines4'] == 0)
	{
if($PLANET['metal_mine'] >= 51 && $PLANET['crystal_mine'] >= 48 && $PLANET['deuterium_sintetizer'] >=45)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_mines` = achievements_mines+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $metal4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_mines4_success']),"?page=achievement",4);
		
}
if($PLANET['metal_mine'] >=51)
	$mines4_req1 = '<span style="color:lime">'.$LNG['achievements_mines4_require_1'].'</span>';
else
	$mines4_req1 = '<span style="color:red">'.$LNG['achievements_mines4_require_1'].'</span>';
if($PLANET['crystal_mine'] >=48)
	$mines4_req2 = '<span style="color:lime">'.$LNG['achievements_mines4_require_2'].'</span>';
else
	$mines4_req2 = '<span style="color:red">'.$LNG['achievements_mines4_require_2'].'</span>';
if($PLANET['deuterium_sintetizer'] >=45)
	$mines4_req3 = '<span style="color:lime">'.$LNG['achievements_mines4_require_3'].'</span>';
else
	$mines4_req3 = '<span style="color:red">'.$LNG['achievements_mines4_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'mines4_req1'    	=> $mines4_req1,
	'mines4_req2'    	=> $mines4_req2,
	'mines4_req3'    	=> $mines4_req3,
	'mines4_title'    => ' <span style="color:red">'.$LNG['achievements_mines4'].'</span>',
	'mines4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_mines4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'mines4_title'    => ' <span style="color:lime">'.$LNG['achievements_mines4'].'</span>',
	'mines4_req1'    => ' <span style="color:lime">'.$LNG['achievements_mines4_done'].'</span>',
	'mines4_req2'    	=> ' <span style="color:lime">'.'</span>',
	'mines4_req3'    	=> ' <span style="color:lime">'.'</span>',
	'mines4_img'    => ' <img border="1" src="styles/achievements/mines4_done.png" align="top" width="80" height="80"></td>',
));
	}

######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_mines'] < 4)
	{
$this->tplObj->assign_vars(array(
	'mines_title'    => ' <span style="color:red">'.$LNG['achievements_mines'].'</span>',
));
	}
	
if($USER['achievements_mines'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'mines_title'    => ' <span style="color:lime">'.$LNG['achievements_mines'].'</span>',
));
	}
	
######################################################################################
######### Tech Achievements Level 1

	if($USER['achievements_tech1'] == 0)
	{
if($USER['military_tech'] >= 8 && $USER['defence_tech'] >= 6 && $USER['shield_tech'] >= 8)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech` = achievements_tech+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $tech1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_tech1_success']),"?page=achievement",4);
		
}
if($USER['military_tech'] >=8)
	$tech1_req1 = '<span style="color:lime">'.$LNG['achievements_tech1_require_1'].'</span>';
else
	$tech1_req1 = '<span style="color:red">'.$LNG['achievements_tech1_require_1'].'</span>';
if($USER['defence_tech'] >=6)
	$tech1_req2 = '<span style="color:lime">'.$LNG['achievements_tech1_require_2'].'</span>';
else
	$tech1_req2 = '<span style="color:red">'.$LNG['achievements_tech1_require_2'].'</span>';
if($USER['shield_tech'] >=8)
	$tech1_req3 = '<span style="color:lime">'.$LNG['achievements_tech1_require_3'].'</span>';
else
	$tech1_req3 = '<span style="color:red">'.$LNG['achievements_tech1_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'tech1_req1'    	=> $tech1_req1,
	'tech1_req2'    	=> $tech1_req2,
	'tech1_req3'    	=> $tech1_req3,
	'tech1_title'    => ' <span style="color:red">'.$LNG['achievements_tech1'].'</span>',
	'tech1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_tech1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'tech1_title'    => ' <span style="color:lime">'.$LNG['achievements_tech1'].'</span>',
	'tech1_req1'    => ' <span style="color:lime">'.$LNG['achievements_tech1_done'].'</span>',
	'tech1_req2'    	=> ' <span style="color:lime">'.'</span>',
	'tech1_req3'    	=> ' <span style="color:lime">'.'</span>',
	'tech1_img'    => ' <img border="1" src="styles/achievements/tech1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Tech Achievements Level 2

	if($USER['achievements_tech2'] == 0)
	{
if($USER['military_tech'] >= 15 && $USER['defence_tech'] >= 12 && $USER['shield_tech'] >=15)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech` = achievements_tech+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $tech2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_tech2_success']),"?page=achievement",4);
		
}
if($USER['military_tech'] >=15)
	$tech2_req1 = '<span style="color:lime">'.$LNG['achievements_tech2_require_1'].'</span>';
else
	$tech2_req1 = '<span style="color:red">'.$LNG['achievements_tech2_require_1'].'</span>';
if($USER['defence_tech'] >=12)
	$tech2_req2 = '<span style="color:lime">'.$LNG['achievements_tech2_require_2'].'</span>';
else
	$tech2_req2 = '<span style="color:red">'.$LNG['achievements_tech2_require_2'].'</span>';
if($USER['shield_tech'] >=15)
	$tech2_req3 = '<span style="color:lime">'.$LNG['achievements_tech2_require_3'].'</span>';
else
	$tech2_req3 = '<span style="color:red">'.$LNG['achievements_tech2_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'tech2_req1'    	=> $tech2_req1,
	'tech2_req2'    	=> $tech2_req2,
	'tech2_req3'    	=> $tech2_req3,
	'tech2_title'    => ' <span style="color:red">'.$LNG['achievements_tech2'].'</span>',
	'tech2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_tech2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'tech2_title'    => ' <span style="color:lime">'.$LNG['achievements_tech2'].'</span>',
	'tech2_req1'    => ' <span style="color:lime">'.$LNG['achievements_tech2_done'].'</span>',
	'tech2_req2'    	=> ' <span style="color:lime">'.'</span>',
	'tech2_req3'    	=> ' <span style="color:lime">'.'</span>',
	'tech2_img'    => ' <img border="1" src="styles/achievements/tech2_done.png" align="top" width="80" height="80"></td>',
));
	}

######################################################################################
######### Tech Achievements Level 3

	if($USER['achievements_tech3'] == 0)
	{
if($USER['military_tech'] >= 20 && $USER['defence_tech'] >= 16 && $USER['shield_tech'] >=20)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech` = achievements_tech+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $tech3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_tech3_success']),"?page=achievement",4);
		
}
if($USER['military_tech'] >=20)
	$tech3_req1 = '<span style="color:lime">'.$LNG['achievements_tech3_require_1'].'</span>';
else
	$tech3_req1 = '<span style="color:red">'.$LNG['achievements_tech3_require_1'].'</span>';
if($USER['defence_tech'] >=16)
	$tech3_req2 = '<span style="color:lime">'.$LNG['achievements_tech3_require_2'].'</span>';
else
	$tech3_req2 = '<span style="color:red">'.$LNG['achievements_tech3_require_2'].'</span>';
if($USER['shield_tech'] >=20)
	$tech3_req3 = '<span style="color:lime">'.$LNG['achievements_tech3_require_3'].'</span>';
else
	$tech3_req3 = '<span style="color:red">'.$LNG['achievements_tech3_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'tech3_req1'    	=> $tech3_req1,
	'tech3_req2'    	=> $tech3_req2,
	'tech3_req3'    	=> $tech3_req3,
	'tech3_title'    => ' <span style="color:red">'.$LNG['achievements_tech3'].'</span>',
	'tech3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_tech3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'tech3_title'    => ' <span style="color:lime">'.$LNG['achievements_tech3'].'</span>',
	'tech3_req1'    => ' <span style="color:lime">'.$LNG['achievements_tech3_done'].'</span>',
	'tech3_req2'    	=> ' <span style="color:lime">'.'</span>',
	'tech3_req3'    	=> ' <span style="color:lime">'.'</span>',
	'tech3_img'    => ' <img border="1" src="styles/achievements/tech3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Tech Achievements Level 4

	if($USER['achievements_tech4'] == 0)
	{
if($USER['military_tech'] >= 25 && $USER['defence_tech'] >= 22 && $USER['shield_tech'] >=25)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_tech` = achievements_tech+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $tech4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_tech4_success']),"?page=achievement",4);
		
}
if($USER['military_tech'] >=25)
	$tech4_req1 = '<span style="color:lime">'.$LNG['achievements_tech4_require_1'].'</span>';
else
	$tech4_req1 = '<span style="color:red">'.$LNG['achievements_tech4_require_1'].'</span>';
if($USER['defence_tech'] >=22)
	$tech4_req2 = '<span style="color:lime">'.$LNG['achievements_tech4_require_2'].'</span>';
else
	$tech4_req2 = '<span style="color:red">'.$LNG['achievements_tech4_require_2'].'</span>';
if($USER['shield_tech'] >=25)
	$tech4_req3 = '<span style="color:lime">'.$LNG['achievements_tech4_require_3'].'</span>';
else
	$tech4_req3 = '<span style="color:red">'.$LNG['achievements_tech4_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'tech4_req1'    	=> $tech4_req1,
	'tech4_req2'    	=> $tech4_req2,
	'tech4_req3'    	=> $tech4_req3,
	'tech4_title'    => ' <span style="color:red">'.$LNG['achievements_tech4'].'</span>',
	'tech4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_tech4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'tech4_title'    => ' <span style="color:lime">'.$LNG['achievements_tech4'].'</span>',
	'tech4_req1'    => ' <span style="color:lime">'.$LNG['achievements_tech4_done'].'</span>',
	'tech4_req2'    	=> ' <span style="color:lime">'.'</span>',
	'tech4_req3'    	=> ' <span style="color:lime">'.'</span>',
	'tech4_img'    => ' <img border="1" src="styles/achievements/tech4_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_tech'] < 4)
	{
$this->tplObj->assign_vars(array(
	'tech_title'    => ' <span style="color:red">'.$LNG['achievements_tech'].'</span>',
));
	}
	
if($USER['achievements_tech'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'tech_title'    => ' <span style="color:lime">'.$LNG['achievements_tech'].'</span>',
));
	}
	
######################################################################################
######### Engine Achievements Level 1

	if($USER['achievements_engine1'] == 0)
	{
if($USER['combustion_tech'] >= 6 && $USER['impulse_motor_tech'] >= 6 && $USER['hyperspace_motor_tech'] >= 4)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine` = achievements_engine+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $engine1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_engine1_success']),"?page=achievement",4);
		
}
if($USER['combustion_tech'] >=6)
	$engine1_req1 = '<span style="color:lime">'.$LNG['achievements_engine1_require_1'].'</span>';
else
	$engine1_req1 = '<span style="color:red">'.$LNG['achievements_engine1_require_1'].'</span>';
if($USER['impulse_motor_tech'] >=6)
	$engine1_req2 = '<span style="color:lime">'.$LNG['achievements_engine1_require_2'].'</span>';
else
	$engine1_req2 = '<span style="color:red">'.$LNG['achievements_engine1_require_2'].'</span>';
if($USER['hyperspace_motor_tech'] >=4)
	$engine1_req3 = '<span style="color:lime">'.$LNG['achievements_engine1_require_3'].'</span>';
else
	$engine1_req3 = '<span style="color:red">'.$LNG['achievements_engine1_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'engine1_req1'    	=> $engine1_req1,
	'engine1_req2'    	=> $engine1_req2,
	'engine1_req3'    	=> $engine1_req3,
	'engine1_title'    => ' <span style="color:red">'.$LNG['achievements_engine1'].'</span>',
	'engine1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_engine1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'engine1_title'    => ' <span style="color:lime">'.$LNG['achievements_engine1'].'</span>',
	'engine1_req1'    => ' <span style="color:lime">'.$LNG['achievements_engine1_done'].'</span>',
	'engine1_req2'    	=> ' <span style="color:lime">'.'</span>',
	'engine1_req3'    	=> ' <span style="color:lime">'.'</span>',
	'engine1_img'    => ' <img border="1" src="styles/achievements/engine1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Engine Achievements Level 2

	if($USER['achievements_engine2'] == 0)
	{
if($USER['combustion_tech'] >= 12 && $USER['impulse_motor_tech'] >= 12 && $USER['hyperspace_motor_tech'] >=10)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine` = achievements_engine+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $engine2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_engine2_success']),"?page=achievement",4);
		
}
if($USER['combustion_tech'] >=12)
	$engine2_req1 = '<span style="color:lime">'.$LNG['achievements_engine2_require_1'].'</span>';
else
	$engine2_req1 = '<span style="color:red">'.$LNG['achievements_engine2_require_1'].'</span>';
if($USER['impulse_motor_tech'] >=12)
	$engine2_req2 = '<span style="color:lime">'.$LNG['achievements_engine2_require_2'].'</span>';
else
	$engine2_req2 = '<span style="color:red">'.$LNG['achievements_engine2_require_2'].'</span>';
if($USER['hyperspace_motor_tech'] >=10)
	$engine2_req3 = '<span style="color:lime">'.$LNG['achievements_engine2_require_3'].'</span>';
else
	$engine2_req3 = '<span style="color:red">'.$LNG['achievements_engine2_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'engine2_req1'    	=> $engine2_req1,
	'engine2_req2'    	=> $engine2_req2,
	'engine2_req3'    	=> $engine2_req3,
	'engine2_title'    => ' <span style="color:red">'.$LNG['achievements_engine2'].'</span>',
	'engine2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_engine2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'engine2_title'    => ' <span style="color:lime">'.$LNG['achievements_engine2'].'</span>',
	'engine2_req1'    => ' <span style="color:lime">'.$LNG['achievements_engine2_done'].'</span>',
	'engine2_req2'    	=> ' <span style="color:lime">'.'</span>',
	'engine2_req3'    	=> ' <span style="color:lime">'.'</span>',
	'engine2_img'    => ' <img border="1" src="styles/achievements/engine2_done.png" align="top" width="80" height="80"></td>',
));
	}

######################################################################################
######### Engine Achievements Level 3

	if($USER['achievements_engine3'] == 0)
	{
if($USER['combustion_tech'] >= 16 && $USER['impulse_motor_tech'] >= 16 && $USER['hyperspace_motor_tech'] >=14)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine` = achievements_engine+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $engine3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_engine3_success']),"?page=achievement",4);
		
}
if($USER['combustion_tech'] >=16)
	$engine3_req1 = '<span style="color:lime">'.$LNG['achievements_engine3_require_1'].'</span>';
else
	$engine3_req1 = '<span style="color:red">'.$LNG['achievements_engine3_require_1'].'</span>';
if($USER['impulse_motor_tech'] >=16)
	$engine3_req2 = '<span style="color:lime">'.$LNG['achievements_engine3_require_2'].'</span>';
else
	$engine3_req2 = '<span style="color:red">'.$LNG['achievements_engine3_require_2'].'</span>';
if($USER['hyperspace_motor_tech'] >=14)
	$engine3_req3 = '<span style="color:lime">'.$LNG['achievements_engine3_require_3'].'</span>';
else
	$engine3_req3 = '<span style="color:red">'.$LNG['achievements_engine3_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'engine3_req1'    	=> $engine3_req1,
	'engine3_req2'    	=> $engine3_req2,
	'engine3_req3'    	=> $engine3_req3,
	'engine3_title'    => ' <span style="color:red">'.$LNG['achievements_engine3'].'</span>',
	'engine3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_engine3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'engine3_title'    => ' <span style="color:lime">'.$LNG['achievements_engine3'].'</span>',
	'engine3_req1'    => ' <span style="color:lime">'.$LNG['achievements_engine3_done'].'</span>',
	'engine3_req2'    	=> ' <span style="color:lime">'.'</span>',
	'engine3_req3'    	=> ' <span style="color:lime">'.'</span>',
	'engine3_img'    => ' <img border="1" src="styles/achievements/engine3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Engine Achievements Level 4

	if($USER['achievements_engine4'] == 0)
	{
if($USER['combustion_tech'] >= 22 && $USER['impulse_motor_tech'] >= 22 && $USER['hyperspace_motor_tech'] >=18)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_engine` = achievements_engine+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $engine4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_engine4_success']),"?page=achievement",4);
		
}
if($USER['combustion_tech'] >=22)
	$engine4_req1 = '<span style="color:lime">'.$LNG['achievements_engine4_require_1'].'</span>';
else
	$engine4_req1 = '<span style="color:red">'.$LNG['achievements_engine4_require_1'].'</span>';
if($USER['impulse_motor_tech'] >=22)
	$engine4_req2 = '<span style="color:lime">'.$LNG['achievements_engine4_require_2'].'</span>';
else
	$engine4_req2 = '<span style="color:red">'.$LNG['achievements_engine4_require_2'].'</span>';
if($USER['hyperspace_motor_tech'] >=18)
	$engine4_req3 = '<span style="color:lime">'.$LNG['achievements_engine4_require_3'].'</span>';
else
	$engine4_req3 = '<span style="color:red">'.$LNG['achievements_engine4_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'engine4_req1'    	=> $engine4_req1,
	'engine4_req2'    	=> $engine4_req2,
	'engine4_req3'    	=> $engine4_req3,
	'engine4_title'    => ' <span style="color:red">'.$LNG['achievements_engine4'].'</span>',
	'engine4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_engine4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'engine4_title'    => ' <span style="color:lime">'.$LNG['achievements_engine4'].'</span>',
	'engine4_req1'    => ' <span style="color:lime">'.$LNG['achievements_engine4_done'].'</span>',
	'engine4_req2'    	=> ' <span style="color:lime">'.'</span>',
	'engine4_req3'    	=> ' <span style="color:lime">'.'</span>',
	'engine4_img'    => ' <img border="1" src="styles/achievements/engine4_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_engine'] < 4)
	{
$this->tplObj->assign_vars(array(
	'engine_title'    => ' <span style="color:red">'.$LNG['achievements_engine'].'</span>',
));
	}
	
if($USER['achievements_engine'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'engine_title'    => ' <span style="color:lime">'.$LNG['achievements_engine'].'</span>',
));
	}
	
######################################################################################
######### Colonization Achievements Level 1

	if($USER['achievements_colonization1'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `planet_type` = '". 1 ."' AND `id_owner` = '". $USER['id'] ."';");
	$planet_count = $query['planet_count'];
	if($planet_count >=2)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colonization1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colonization` = achievements_colonization+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $colonization1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_colonization1_success']),"?page=achievement",4);
		
}
if($planet_count >=2)
	$colonization1_req1 = '<span style="color:lime">'.$LNG['achievements_colonization1_require_1'].'</span>';
else
	$colonization1_req1 = '<span style="color:red">'.$LNG['achievements_colonization1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'colonization1_req1'    	=> $colonization1_req1,
	'colonization1_title'    => ' <span style="color:red">'.$LNG['achievements_colonization1'].'</span>',
	'colonization1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_colonization1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'colonization1_title'    => ' <span style="color:lime">'.$LNG['achievements_colonization1'].'</span>',
	'colonization1_req1'    => ' <span style="color:lime">'.$LNG['achievements_colonization1_done'].'</span>',
	'colonization1_img'    => ' <img border="1" src="styles/achievements/colonization1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Colonization Achievements Level 2

	if($USER['achievements_colonization2'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `planet_type` = '". 1 ."' AND `id_owner` = '". $USER['id'] ."';");
	$planet_count = $query['planet_count'];
	if($planet_count >=5)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colonization2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colonization` = achievements_colonization+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $colonization2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_colonization2_success']),"?page=achievement",4);
		
}
if($planet_count >=5)
	$colonization2_req1 = '<span style="color:lime">'.$LNG['achievements_colonization2_require_1'].'</span>';
else
	$colonization2_req1 = '<span style="color:red">'.$LNG['achievements_colonization2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'colonization2_req1'    	=> $colonization2_req1,
	'colonization2_title'    => ' <span style="color:red">'.$LNG['achievements_colonization2'].'</span>',
	'colonization2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_colonization2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'colonization2_title'    => ' <span style="color:lime">'.$LNG['achievements_colonization2'].'</span>',
	'colonization2_req1'    => ' <span style="color:lime">'.$LNG['achievements_colonization2_done'].'</span>',
	'colonization2_img'    => ' <img border="1" src="styles/achievements/colonization2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Colonization Achievements Level 2

	if($USER['achievements_colonization3'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `planet_type` = '". 1 ."' AND `id_owner` = '". $USER['id'] ."';");
	$planet_count = $query['planet_count'];
	if($planet_count == $CONF['min_player_planets'] + $CONF['planets_tech'] + $CONF['planets_officier'])
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colonization3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_colonization` = achievements_colonization+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $colonization3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_colonization3_success']),"?page=achievement",4);
		
}
if($planet_count == $CONF['planets_tech'])
	$colonization3_req1 = '<span style="color:lime">'.$LNG['achievements_colonization3_require_1'].'</span>';
else
	$colonization3_req1 = '<span style="color:red">'.$LNG['achievements_colonization3_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'colonization3_req1'    	=> $colonization3_req1,
	'colonization3_title'    => ' <span style="color:red">'.$LNG['achievements_colonization3'].'</span>',
	'colonization3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_colonization3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'colonization3_title'    => ' <span style="color:lime">'.$LNG['achievements_colonization3'].'</span>',
	'colonization3_req1'    => ' <span style="color:lime">'.$LNG['achievements_colonization3_done'].'</span>',
	'colonization3_img'    => ' <img border="1" src="styles/achievements/colonization3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_colonization'] < 3)
	{
$this->tplObj->assign_vars(array(
	'colonization_title'    => ' <span style="color:red">'.$LNG['achievements_colonization'].'</span>',
));
	}
	
if($USER['achievements_colonization'] >= 3)
	{
$this->tplObj->assign_vars(array(
	'colonization_title'    => ' <span style="color:lime">'.$LNG['achievements_colonization'].'</span>',
));
	}
	
######################################################################################
######### Moon Achievements Level 1

	if($USER['achievements_moon1'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS moon_count FROM ".PLANETS." WHERE `planet_type` = '". 3 ."' AND `id_owner` = '". $USER['id'] ."';");
	$moon_count = $query['moon_count'];
	if($moon_count >=1)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon` = achievements_moon+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $moon1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_moon1_success']),"?page=achievement",4);
		
}
if($moon_count >=1)
	$moon1_req1 = '<span style="color:lime">'.$LNG['achievements_moon1_require_1'].'</span>';
else
	$moon1_req1 = '<span style="color:red">'.$LNG['achievements_moon1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'moon1_req1'    	=> $moon1_req1,
	'moon1_title'    => ' <span style="color:red">'.$LNG['achievements_moon1'].'</span>',
	'moon1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_moon1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'moon1_title'    => ' <span style="color:lime">'.$LNG['achievements_moon1'].'</span>',
	'moon1_req1'    => ' <span style="color:lime">'.$LNG['achievements_moon1_done'].'</span>',
	'moon1_img'    => ' <img border="1" src="styles/achievements/moon1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Moon Achievements Level 2

	if($USER['achievements_moon2'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS moon_count FROM ".PLANETS." WHERE `planet_type` = '". 3 ."' AND `id_owner` = '". $USER['id'] ."';");
	$moon_count = $query['moon_count'];
	if($moon_count >=5)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon` = achievements_moon+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $moon2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_moon2_success']),"?page=achievement",4);
		
}
if($moon_count >=5)
	$moon2_req1 = '<span style="color:lime">'.$LNG['achievements_moon2_require_1'].'</span>';
else
	$moon2_req1 = '<span style="color:red">'.$LNG['achievements_moon2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'moon2_req1'    	=> $moon2_req1,
	'moon2_title'    => ' <span style="color:red">'.$LNG['achievements_moon2'].'</span>',
	'moon2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_moon2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'moon2_title'    => ' <span style="color:lime">'.$LNG['achievements_moon2'].'</span>',
	'moon2_req1'    => ' <span style="color:lime">'.$LNG['achievements_moon2_done'].'</span>',
	'moon2_img'    => ' <img border="1" src="styles/achievements/moon2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Moon Achievements Level 3

	if($USER['achievements_moon3'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS moon_count FROM ".PLANETS." WHERE `planet_type` = '". 3 ."' AND `id_owner` = '". $USER['id'] ."';");
	$moon_count = $query['moon_count'];
	if($moon_count == $CONF['planets_tech'] + $CONF['min_player_planets'])
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_moon` = achievements_moon+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $moon3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_moon3_success']),"?page=achievement",4);
		
}
if($moon_count == $CONF['planets_tech'])
	$moon3_req1 = '<span style="color:lime">'.$LNG['achievements_moon3_require_1'].'</span>';
else
	$moon3_req1 = '<span style="color:red">'.$LNG['achievements_moon3_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'moon3_req1'    	=> $moon3_req1,
	'moon3_title'    => ' <span style="color:red">'.$LNG['achievements_moon3'].'</span>',
	'moon3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_moon3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'moon3_title'    => ' <span style="color:lime">'.$LNG['achievements_moon3'].'</span>',
	'moon3_req1'    => ' <span style="color:lime">'.$LNG['achievements_moon3_done'].'</span>',
	'moon3_img'    => ' <img border="1" src="styles/achievements/moon3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_moon'] < 3)
	{
$this->tplObj->assign_vars(array(
	'moon_title'    => ' <span style="color:red">'.$LNG['achievements_moon'].'</span>',
));
	}
	
if($USER['achievements_moon'] >= 3)
	{
$this->tplObj->assign_vars(array(
	'moon_title'    => ' <span style="color:lime">'.$LNG['achievements_moon'].'</span>',
));
	}
	
######################################################################################
######### War Achievements Level 1

	if($USER['achievements_war1'] == 0)
	{
	if($USER['wons'] >= 50)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_war1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_war` = achievements_war+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $war1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_war1_success']),"?page=achievement",4);
		
}
	if($USER['wons'] >= 50)
	$war1_req1 = '<span style="color:lime">'.$LNG['achievements_war1_require_1'].'</span>';
else
	$war1_req1 = '<span style="color:red">'.$LNG['achievements_war1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'war1_req1'    	=> $war1_req1,
	'war1_title'    => ' <span style="color:red">'.$LNG['achievements_war1'].'</span>',
	'war1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_war1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'war1_title'    => ' <span style="color:lime">'.$LNG['achievements_war1'].'</span>',
	'war1_req1'    => ' <span style="color:lime">'.$LNG['achievements_war1_done'].'</span>',
	'war1_img'    => ' <img border="1" src="styles/achievements/war1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### War Achievements Level 2

	if($USER['achievements_war2'] == 0)
	{
	if($USER['wons'] >= 100)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_war2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_war` = achievements_war+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $war2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_war2_success']),"?page=achievement",4);
		
}
if($USER['wons'] >= 100)
	$war2_req1 = '<span style="color:lime">'.$LNG['achievements_war2_require_1'].'</span>';
else
	$war2_req1 = '<span style="color:red">'.$LNG['achievements_war2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'war2_req1'    	=> $war2_req1,
	'war2_title'    => ' <span style="color:red">'.$LNG['achievements_war2'].'</span>',
	'war2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_war2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'war2_title'    => ' <span style="color:lime">'.$LNG['achievements_war2'].'</span>',
	'war2_req1'    => ' <span style="color:lime">'.$LNG['achievements_war2_done'].'</span>',
	'war2_img'    => ' <img border="1" src="styles/achievements/war2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### War Achievements Level 3

	if($USER['achievements_war3'] == 0)
	{
	if($USER['wons'] >= 250 && $USER['loos'] <= 100)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_war3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_war` = achievements_war+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $war3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_war3_success']),"?page=achievement",4);
		
}
if($USER['wons'] >= 250 && $USER['loos'] <= 100)
	$war3_req1 = '<span style="color:lime">'.$LNG['achievements_war3_require_1'].'</span>';
else
	$war3_req1 = '<span style="color:red">'.$LNG['achievements_war3_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'war3_req1'    	=> $war3_req1,
	'war3_title'    => ' <span style="color:red">'.$LNG['achievements_war3'].'</span>',
	'war3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_war3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'war3_title'    => ' <span style="color:lime">'.$LNG['achievements_war3'].'</span>',
	'war3_req1'    => ' <span style="color:lime">'.$LNG['achievements_war3_done'].'</span>',
	'war3_img'    => ' <img border="1" src="styles/achievements/war3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_war'] < 3)
	{
$this->tplObj->assign_vars(array(
	'war_title'    => ' <span style="color:red">'.$LNG['achievements_war'].'</span>',
));
	}
	
if($USER['achievements_war'] >= 3)
	{
$this->tplObj->assign_vars(array(
	'war_title'    => ' <span style="color:lime">'.$LNG['achievements_war'].'</span>',
));
	}
	
######################################################################################
######### Destroy Achievements Level 1

	if($USER['achievements_destroy1'] == 0)
	{
	if($USER['kbmetal'] >= 100000000 && $USER['kbcrystal'] >= 100000000)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $destroy1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_destroy1_success']),"?page=achievement",4);
		
}
	if($USER['kbmetal'] >= 100000000 && $USER['kbcrystal'] >= 100000000)
	$destroy1_req1 = '<span style="color:lime">'.$LNG['achievements_destroy1_require_1'].'</span>';
else
	$destroy1_req1 = '<span style="color:red">'.$LNG['achievements_destroy1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'destroy1_req1'    	=> $destroy1_req1,
	'destroy1_title'    => ' <span style="color:red">'.$LNG['achievements_destroy1'].'</span>',
	'destroy1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_destroy1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'destroy1_title'    => ' <span style="color:lime">'.$LNG['achievements_destroy1'].'</span>',
	'destroy1_req1'    => ' <span style="color:lime">'.$LNG['achievements_destroy1_done'].'</span>',
	'destroy1_img'    => ' <img border="1" src="styles/achievements/destroy1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Destroy Achievements Level 2

	if($USER['achievements_destroy2'] == 0)
	{
	if($USER['kbmetal'] >= 1000000000 && $USER['kbcrystal'] >= 1000000000)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $destroy2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_destroy2_success']),"?page=achievement",4);
		
}
	if($USER['kbmetal'] >= 1000000000 && $USER['kbcrystal'] >= 1000000000)
	$destroy2_req1 = '<span style="color:lime">'.$LNG['achievements_destroy2_require_1'].'</span>';
else
	$destroy2_req1 = '<span style="color:red">'.$LNG['achievements_destroy2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'destroy2_req1'    	=> $destroy2_req1,
	'destroy2_title'    => ' <span style="color:red">'.$LNG['achievements_destroy2'].'</span>',
	'destroy2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_destroy2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'destroy2_title'    => ' <span style="color:lime">'.$LNG['achievements_destroy2'].'</span>',
	'destroy2_req1'    => ' <span style="color:lime">'.$LNG['achievements_destroy2_done'].'</span>',
	'destroy2_img'    => ' <img border="1" src="styles/achievements/destroy2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Destroy Achievements Level 3

	if($USER['achievements_destroy3'] == 0)
	{
	if($USER['kbmetal'] >= 10000000000 && $USER['kbcrystal'] >= 10000000000)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $destroy3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_destroy3_success']),"?page=achievement",4);
		
}
	if($USER['kbmetal'] >= 10000000000 && $USER['kbcrystal'] >= 10000000000)
	$destroy3_req1 = '<span style="color:lime">'.$LNG['achievements_destroy3_require_1'].'</span>';
else
	$destroy3_req1 = '<span style="color:red">'.$LNG['achievements_destroy3_require_1'].'</span>';

$this->tplObj->assign_vars(array(
	'destroy3_req1'    	=> $destroy3_req1,
	'destroy3_title'    => ' <span style="color:red">'.$LNG['achievements_destroy3'].'</span>',
	'destroy3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_destroy3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'destroy3_title'    => ' <span style="color:lime">'.$LNG['achievements_destroy3'].'</span>',
	'destroy3_req1'    => ' <span style="color:lime">'.$LNG['achievements_destroy3_done'].'</span>',
	'destroy3_img'    => ' <img border="1" src="styles/achievements/destroy3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Destroy Achievements Level 4

	if($USER['achievements_destroy4'] == 0)
	{
	if($USER['kbmetal'] >= 100000000000 && $USER['kbcrystal'] >= 100000000000)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_destroy` = achievements_destroy+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $destroy4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_destroy4_success']),"?page=achievement",4);
		
}
	if($USER['kbmetal'] >= 100000000000 && $USER['kbcrystal'] >= 100000000000)
	$destroy4_req1 = '<span style="color:lime">'.$LNG['achievements_destroy4_require_1'].'</span>';
else
	$destroy4_req1 = '<span style="color:red">'.$LNG['achievements_destroy4_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'destroy4_req1'    	=> $destroy4_req1,
	'destroy4_title'    => ' <span style="color:red">'.$LNG['achievements_destroy4'].'</span>',
	'destroy4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_destroy4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'destroy4_title'    => ' <span style="color:lime">'.$LNG['achievements_destroy4'].'</span>',
	'destroy4_req1'    => ' <span style="color:lime">'.$LNG['achievements_destroy4_done'].'</span>',
	'destroy4_img'    => ' <img border="1" src="styles/achievements/destroy4_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_destroy'] < 4)
	{
$this->tplObj->assign_vars(array(
	'destroy_title'    => ' <span style="color:red">'.$LNG['achievements_destroy'].'</span>',
));
	}
	
if($USER['achievements_destroy'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'destroy_title'    => ' <span style="color:lime">'.$LNG['achievements_destroy'].'</span>',
));
	}
	
######################################################################################
######### Time Achievements Level 1

	if($USER['achievements_time1'] == 0)
	{
	if(($PLANET['b_hangar'] - 7200) > TIMESTAMP)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_time1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_time` = achievements_time+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $time1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_time1_success']),"?page=achievement",4);
		
}
	if(($PLANET['b_hangar'] - 7200) > TIMESTAMP)
	$time1_req1 = '<span style="color:lime">'.$LNG['achievements_time1_require_1'].'</span>';
else
	$time1_req1 = '<span style="color:red">'.$LNG['achievements_time1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'time1_req1'    	=> $time1_req1,
	'time1_title'    => ' <span style="color:red">'.$LNG['achievements_time1'].'</span>',
	'time1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_time1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'time1_title'    => ' <span style="color:lime">'.$LNG['achievements_time1'].'</span>',
	'time1_req1'    => ' <span style="color:lime">'.$LNG['achievements_time1_done'].'</span>',
	'time1_img'    => ' <img border="1" src="styles/achievements/time1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Time Achievements Level 2

	if($USER['achievements_time2'] == 0)
	{
	if(($PLANET['b_building'] - 43200) > TIMESTAMP)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_time2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_time` = achievements_time+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $time2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_time2_success']),"?page=achievement",4);
		
}
	if(($PLANET['b_building'] - 43200) > TIMESTAMP)
	$time2_req1 = '<span style="color:lime">'.$LNG['achievements_time2_require_1'].'</span>';
else
	$time2_req1 = '<span style="color:red">'.$LNG['achievements_time2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'time2_req1'    	=> $time2_req1,
	'time2_title'    => ' <span style="color:red">'.$LNG['achievements_time2'].'</span>',
	'time2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_time2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'time2_title'    => ' <span style="color:lime">'.$LNG['achievements_time2'].'</span>',
	'time2_req1'    => ' <span style="color:lime">'.$LNG['achievements_time2_done'].'</span>',
	'time2_img'    => ' <img border="1" src="styles/achievements/time2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Time Achievements Level 3

	if($USER['achievements_time3'] == 0)
	{
	if(($USER['b_tech'] - 86400) > TIMESTAMP)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_time3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_time` = achievements_time+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $time3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_time3_success']),"?page=achievement",4);
		
}
	if(($USER['b_tech'] - 86400) > TIMESTAMP)
	$time3_req1 = '<span style="color:lime">'.$LNG['achievements_time3_require_1'].'</span>';
else
	$time3_req1 = '<span style="color:red">'.$LNG['achievements_time3_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'time3_req1'    	=> $time3_req1,
	'time3_title'    => ' <span style="color:red">'.$LNG['achievements_time3'].'</span>',
	'time3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_time3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'time3_title'    => ' <span style="color:lime">'.$LNG['achievements_time3'].'</span>',
	'time3_req1'    => ' <span style="color:lime">'.$LNG['achievements_time3_done'].'</span>',
	'time3_img'    => ' <img border="1" src="styles/achievements/time3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_time'] < 3)
	{
$this->tplObj->assign_vars(array(
	'time_title'    => ' <span style="color:red">'.$LNG['achievements_time'].'</span>',
));
	}
	
if($USER['achievements_time'] >= 3)
	{
$this->tplObj->assign_vars(array(
	'time_title'    => ' <span style="color:lime">'.$LNG['achievements_time'].'</span>',
));
	}
	
######################################################################################
######### Hall of Fame Achievements Level 1

	if($USER['achievements_hof1'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS rid FROM uni1_users_to_topkb WHERE `uid` = '". $USER['id'] ."';");
	$rid = $query['rid'];
	if($rid >=20)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof` = achievements_hof+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $hof3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_hof1_success']),"?page=achievement",4);
		
}
	if($rid >=20)
	$hof1_req1 = '<span style="color:lime">'.$LNG['achievements_hof1_require_1'].'</span>';
else
	$hof1_req1 = '<span style="color:red">'.$LNG['achievements_hof1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'hof1_req1'    	=> $hof1_req1,
	'hof1_title'    => ' <span style="color:red">'.$LNG['achievements_hof1'].'</span>',
	'hof1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_hof1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'hof1_title'    => ' <span style="color:lime">'.$LNG['achievements_hof1'].'</span>',
	'hof1_req1'    => ' <span style="color:lime">'.$LNG['achievements_hof1_done'].'</span>',
	'hof1_img'    => ' <img border="1" src="styles/achievements/hof1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Hall of Fame Achievements Level 2

	if($USER['achievements_hof2'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS rid FROM uni1_users_to_topkb WHERE `uid` = '". $USER['id'] ."';");
	$rid = $query['rid'];
	if($rid >=50)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof` = achievements_hof+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $hof3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_hof2_success']),"?page=achievement",4);
		
}
	if($rid >=50)
	$hof2_req1 = '<span style="color:lime">'.$LNG['achievements_hof2_require_1'].'</span>';
else
	$hof2_req1 = '<span style="color:red">'.$LNG['achievements_hof2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'hof2_req1'    	=> $hof2_req1,
	'hof2_title'    => ' <span style="color:red">'.$LNG['achievements_hof2'].'</span>',
	'hof2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_hof2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'hof2_title'    => ' <span style="color:lime">'.$LNG['achievements_hof2'].'</span>',
	'hof2_req1'    => ' <span style="color:lime">'.$LNG['achievements_hof2_done'].'</span>',
	'hof2_img'    => ' <img border="1" src="styles/achievements/hof2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Hall of Fame Achievements Level 3

	if($USER['achievements_hof3'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS rid FROM uni1_users_to_topkb WHERE `uid` = '". $USER['id'] ."';");
	$rid = $query['rid'];
	if($rid >=100)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof` = achievements_hof+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $hof3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_hof3_success']),"?page=achievement",4);
		
}
	if($rid >=100)
	$hof3_req1 = '<span style="color:lime">'.$LNG['achievements_hof3_require_1'].'</span>';
else
	$hof3_req1 = '<span style="color:red">'.$LNG['achievements_hof3_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'hof3_req1'    	=> $hof3_req1,
	'hof3_title'    => ' <span style="color:red">'.$LNG['achievements_hof3'].'</span>',
	'hof3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_hof3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'hof3_title'    => ' <span style="color:lime">'.$LNG['achievements_hof3'].'</span>',
	'hof3_req1'    => ' <span style="color:lime">'.$LNG['achievements_hof3_done'].'</span>',
	'hof3_img'    => ' <img border="1" src="styles/achievements/hof3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Hall of Fame Achievements Level 4

	if($USER['achievements_hof4'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS rid FROM uni1_users_to_topkb WHERE `uid` = '". $USER['id'] ."';");
	$rid = $query['rid'];
	if($rid >=200)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_hof` = achievements_hof+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $hof4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_hof4_success']),"?page=achievement",4);
		
}
	if($rid >=200)
	$hof4_req1 = '<span style="color:lime">'.$LNG['achievements_hof4_require_1'].'</span>';
else
	$hof4_req1 = '<span style="color:red">'.$LNG['achievements_hof4_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'hof4_req1'    	=> $hof4_req1,
	'hof4_title'    => ' <span style="color:red">'.$LNG['achievements_hof4'].'</span>',
	'hof4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_hof4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'hof4_title'    => ' <span style="color:lime">'.$LNG['achievements_hof4'].'</span>',
	'hof4_req1'    => ' <span style="color:lime">'.$LNG['achievements_hof4_done'].'</span>',
	'hof4_img'    => ' <img border="1" src="styles/achievements/hof4_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_hof'] < 4)
	{
$this->tplObj->assign_vars(array(
	'hof_title'    => ' <span style="color:red">'.$LNG['achievements_hof'].'</span>',
));
	}
	
if($USER['achievements_hof'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'hof_title'    => ' <span style="color:lime">'.$LNG['achievements_hof'].'</span>',
));
	}
	
######################################################################################
######### Community Achievements Level 1

	if($USER['achievements_community1'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM uni1_ticket WHERE `ownerID` = '".$USER['id']."';");
	$ticket = $query;
	if($ticket >=1)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_community1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_community` = achievements_community+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $community1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_community1_success']),"?page=achievement",4);
		
}
	if($ticket >=1)
	$community1_req1 = '<span style="color:lime">'.$LNG['achievements_community1_require_1'].'</span>';
else
	$community1_req1 = '<span style="color:red">'.$LNG['achievements_community1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'community1_req1'    	=> $community1_req1,
	'community1_title'    => ' <span style="color:red">'.$LNG['achievements_community1'].'</span>',
	'community1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_community1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'community1_title'    => ' <span style="color:lime">'.$LNG['achievements_community1'].'</span>',
	'community1_req1'    => ' <span style="color:lime">'.$LNG['achievements_community1_done'].'</span>',
	'community1_img'    => ' <img border="1" src="styles/achievements/community1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Community Achievements Level 2

	if($USER['achievements_community2'] == 0)
	{
	if($USER['ally_id'] >=1)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_community2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_community` = achievements_community+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $community2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_community2_success']),"?page=achievement",4);
		
}
	if($USER['ally_id'] >=1)
	$community2_req1 = '<span style="color:lime">'.$LNG['achievements_community2_require_1'].'</span>';
else
	$community2_req1 = '<span style="color:red">'.$LNG['achievements_community2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'community2_req1'    	=> $community2_req1,
	'community2_title'    => ' <span style="color:red">'.$LNG['achievements_community2'].'</span>',
	'community2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_community2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'community2_title'    => ' <span style="color:lime">'.$LNG['achievements_community2'].'</span>',
	'community2_req1'    => ' <span style="color:lime">'.$LNG['achievements_community2_done'].'</span>',
	'community2_img'    => ' <img border="1" src="styles/achievements/community2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Community Achievements Level 3

	if($USER['achievements_community3'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM uni1_fleets WHERE `fleet_mission` = '5' AND `fleet_owner` = '". $USER['id'] ."';");
	$fleet = $query;
	if($fleet >=1)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_community3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_community` = achievements_community+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $community3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_community3_success']),"?page=achievement",4);
		
}
	if($fleet >=1)
	$community3_req1 = '<span style="color:lime">'.$LNG['achievements_community3_require_1'].'</span>';
else
	$community3_req1 = '<span style="color:red">'.$LNG['achievements_community3_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'community3_req1'    	=> $community3_req1,
	'community3_title'    => ' <span style="color:red">'.$LNG['achievements_community3'].'</span>',
	'community3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_community3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'community3_title'    => ' <span style="color:lime">'.$LNG['achievements_community3'].'</span>',
	'community3_req1'    => ' <span style="color:lime">'.$LNG['achievements_community3_done'].'</span>',
	'community3_img'    => ' <img border="1" src="styles/achievements/community3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_community'] < 3)
	{
$this->tplObj->assign_vars(array(
	'community_title'    => ' <span style="color:red">'.$LNG['achievements_community'].'</span>',
));
	}
	
if($USER['achievements_community'] >= 3)
	{
$this->tplObj->assign_vars(array(
	'community_title'    => ' <span style="color:lime">'.$LNG['achievements_community'].'</span>',
));
	}
	
######################################################################################
######### Fleet Achievements Level 1

	if($USER['achievements_fleet1'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS attacks FROM `uni1_fleets` WHERE `fleet_mission` = '". 1 ."' AND `fleet_owner` = '". $USER['id'] ."';");
	$fleet1 = $query['attacks'];
	if($fleet1 >=5)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet` = achievements_fleet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $fleet1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_fleet1_success']),"?page=achievement",4);
		
}
	if($fleet1 >=5)
	$fleet1_req1 = '<span style="color:lime">'.$LNG['achievements_fleet1_require_1'].'</span>';
else
	$fleet1_req1 = '<span style="color:red">'.$LNG['achievements_fleet1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'fleet1_req1'    	=> $fleet1_req1,
	'fleet1_title'    => ' <span style="color:red">'.$LNG['achievements_fleet1'].'</span>',
	'fleet1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_fleet1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'fleet1_title'    => ' <span style="color:lime">'.$LNG['achievements_fleet1'].'</span>',
	'fleet1_req1'    => ' <span style="color:lime">'.$LNG['achievements_fleet1_done'].'</span>',
	'fleet1_img'    => ' <img border="1" src="styles/achievements/fleet1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Fleet Achievements Level 2

	if($USER['achievements_fleet2'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM uni1_fleets WHERE `fleet_mission` = '8' AND `fleet_resource_metal` = '10000000000' AND `fleet_resource_crystal` = '10000000000' AND `fleet_owner` = '". $USER['id'] ."';");
	$fleet2 = $query;
	if($fleet2 >=1)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet` = achievements_fleet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $fleet2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_fleet2_success']),"?page=achievement",4);
		
}
	if($fleet2 >=1)
	$fleet2_req1 = '<span style="color:lime">'.$LNG['achievements_fleet2_require_1'].'</span>';
else
	$fleet2_req1 = '<span style="color:red">'.$LNG['achievements_fleet2_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'fleet2_req1'    	=> $fleet2_req1,
	'fleet2_title'    => ' <span style="color:red">'.$LNG['achievements_fleet2'].'</span>',
	'fleet2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_fleet2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'fleet2_title'    => ' <span style="color:lime">'.$LNG['achievements_fleet2'].'</span>',
	'fleet2_req1'    => ' <span style="color:lime">'.$LNG['achievements_fleet2_done'].'</span>',
	'fleet2_img'    => ' <img border="1" src="styles/achievements/fleet2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Fleet Achievements Level 3

	if($USER['achievements_fleet3'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM uni1_fleets WHERE `fleet_mission` = '11' AND  `fleet_owner` = '". $USER['id'] ."';");
	$fleet3 = $query;
	if($fleet3 >=1)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet` = achievements_fleet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $fleet3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_fleet3_success']),"?page=achievement",4);
		
}
	if($fleet3 >=1)
	$fleet3_req1 = '<span style="color:lime">'.$LNG['achievements_fleet3_require_1'].'</span>';
else
	$fleet3_req1 = '<span style="color:red">'.$LNG['achievements_fleet3_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'fleet3_req1'    	=> $fleet3_req1,
	'fleet3_title'    => ' <span style="color:red">'.$LNG['achievements_fleet3'].'</span>',
	'fleet3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_fleet3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'fleet3_title'    => ' <span style="color:lime">'.$LNG['achievements_fleet3'].'</span>',
	'fleet3_req1'    => ' <span style="color:lime">'.$LNG['achievements_fleet3_done'].'</span>',
	'fleet3_img'    => ' <img border="1" src="styles/achievements/fleet3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Fleet Achievements Level 4

	if($USER['achievements_fleet4'] == 0)
	{
	$query = $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM uni1_fleets WHERE `fleet_mission` = '2' AND  `fleet_owner` = '". $USER['id'] ."';");
	$fleet4 = $query;
	if($fleet4 >=1)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_fleet` = achievements_fleet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $fleet4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_fleet4_success']),"?page=achievement",4);
		
}
	if($fleet4 >=1)
	$fleet4_req1 = '<span style="color:lime">'.$LNG['achievements_fleet4_require_1'].'</span>';
else
	$fleet4_req1 = '<span style="color:red">'.$LNG['achievements_fleet4_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'fleet4_req1'    	=> $fleet4_req1,
	'fleet4_title'    => ' <span style="color:red">'.$LNG['achievements_fleet4'].'</span>',
	'fleet4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_fleet4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'fleet4_title'    => ' <span style="color:lime">'.$LNG['achievements_fleet4'].'</span>',
	'fleet4_req1'    => ' <span style="color:lime">'.$LNG['achievements_fleet4_done'].'</span>',
	'fleet4_img'    => ' <img border="1" src="styles/achievements/fleet4_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_fleet'] < 4)
	{
$this->tplObj->assign_vars(array(
	'fleet_title'    => ' <span style="color:red">'.$LNG['achievements_fleet'].'</span>',
));
	}
	
if($USER['achievements_fleet'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'fleet_title'    => ' <span style="color:lime">'.$LNG['achievements_fleet'].'</span>',
));
	}
######### Dark Matter Achievements Level 1

	if($USER['achievements_darkmatter1'] == 0)
	{
if($USER['darkmatter'] >= 10000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter` = achievements_darkmatter+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $darkmatter1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_darkmatter1_success']),"?page=achievement",4);
		
}
if($USER['darkmatter'] >= 10000)
	$darkmatter1_req1 = '<span style="color:lime">'.$LNG['achievements_darkmatter1_require_1'].'</span>';
else
	$darkmatter1_req1 = '<span style="color:red">'.$LNG['achievements_darkmatter1_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'darkmatter1_req1'    	=> $darkmatter1_req1,
	'darkmatter1_title'    => ' <span style="color:red">'.$LNG['achievements_darkmatter1'].'</span>',
	'darkmatter1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_darkmatter1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'darkmatter1_title'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter1'].'</span>',
	'darkmatter1_req1'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter1_done'].'</span>',
	'darkmatter1_img'    => ' <img border="1" src="styles/achievements/darkmatter1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Dark Matter Achievements Level 2

	if($USER['achievements_darkmatter2'] == 0)
	{
if($USER['darkmatter'] >= 20000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter` = achievements_darkmatter+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $darkmatter2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_darkmatter2_success']),"?page=achievement",4);
		
}
if($USER['darkmatter'] >=20000)
	$darkmatter2_req1 = '<span style="color:lime">'.$LNG['achievements_darkmatter2_require_1'].'</span>';
else
	$darkmatter2_req1 = '<span style="color:red">'.$LNG['achievements_darkmatter2_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'darkmatter2_req1'    	=> $darkmatter2_req1,
	'darkmatter2_title'    => ' <span style="color:red">'.$LNG['achievements_darkmatter2'].'</span>',
	'darkmatter2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_darkmatter2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'darkmatter2_title'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter2'].'</span>',
	'darkmatter2_req1'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter2_done'].'</span>',
	'darkmatter2_img'    => ' <img border="1" src="styles/achievements/darkmatter2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Dark Matter Achievements Level 3

	if($USER['achievements_darkmatter3'] == 0)
	{
if($USER['darkmatter'] >= 50000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter` = achievements_darkmatter+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $darkmatter3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_darkmatter3_success']),"?page=achievement",4);
		
}
if($USER['darkmatter'] >=50000)
	$darkmatter3_req1 = '<span style="color:lime">'.$LNG['achievements_darkmatter3_require_1'].'</span>';
else
	$darkmatter3_req1 = '<span style="color:red">'.$LNG['achievements_darkmatter3_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'darkmatter3_req1'    	=> $darkmatter3_req1,
	'darkmatter3_title'    => ' <span style="color:red">'.$LNG['achievements_darkmatter3'].'</span>',
	'darkmatter3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_darkmatter3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'darkmatter3_title'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter3'].'</span>',
	'darkmatter3_req1'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter3_done'].'</span>',
	'darkmatter3_img'    => ' <img border="1" src="styles/achievements/darkmatter3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Dark Matter Achievements Level 4

	if($USER['achievements_darkmatter4'] == 0)
	{
if($USER['darkmatter'] >= 100000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter` = achievements_darkmatter+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $darkmatter4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_darkmatter4_success']),"?page=achievement",4);
		
}
if($USER['darkmatter'] >=100000)
	$darkmatter4_req1 = '<span style="color:lime">'.$LNG['achievements_darkmatter4_require_1'].'</span>';
else
	$darkmatter4_req1 = '<span style="color:red">'.$LNG['achievements_darkmatter4_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'darkmatter4_req1'    	=> $darkmatter4_req1,
	'darkmatter4_title'    => ' <span style="color:red">'.$LNG['achievements_darkmatter4'].'</span>',
	'darkmatter4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_darkmatter4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'darkmatter4_title'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter4'].'</span>',
	'darkmatter4_req1'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter4_done'].'</span>',
	'darkmatter4_img'    => ' <img border="1" src="styles/achievements/darkmatter4_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Dark Matter Achievements Level 5

	if($USER['achievements_darkmatter5'] == 0)
	{
if($USER['darkmatter'] >= 200000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter5` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_darkmatter` = achievements_darkmatter+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $darkmatter5_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_darkmatter5_success']),"?page=achievement",4);
		
}
if($USER['darkmatter'] >=200000)
	$darkmatter5_req1 = '<span style="color:lime">'.$LNG['achievements_darkmatter5_require_1'].'</span>';
else
	$darkmatter5_req1 = '<span style="color:red">'.$LNG['achievements_darkmatter5_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'darkmatter5_req1'    	=> $darkmatter5_req1,
	'darkmatter5_title'    => ' <span style="color:red">'.$LNG['achievements_darkmatter5'].'</span>',
	'darkmatter5_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_darkmatter5'] == 1)
	{
$this->tplObj->assign_vars(array(
	'darkmatter5_title'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter5'].'</span>',
	'darkmatter5_req1'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter5_done'].'</span>',
	'darkmatter5_img'    => ' <img border="1" src="styles/achievements/darkmatter5_done.png" align="top" width="80" height="80"></td>',
));
	}

######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_darkmatter'] < 5)
	{
$this->tplObj->assign_vars(array(
	'darkmatter_title'    => ' <span style="color:red">'.$LNG['achievements_darkmatter'].'</span>',
));
	}
	
if($USER['achievements_darkmatter'] >= 5)
	{
$this->tplObj->assign_vars(array(
	'darkmatter_title'    => ' <span style="color:lime">'.$LNG['achievements_darkmatter'].'</span>',
));
	}
	
######### Planet Achievements Level 1

	if($USER['achievements_planet1'] == 0)
	{
if($PLANET['metal_perhour'] >= 5000000.000000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet` = achievements_planet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $planet1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_planet1_success']),"?page=achievement",4);
		
}
if($PLANET['metal_perhour'] >= 5000000.000000)
	$planet1_req1 = '<span style="color:lime">'.$LNG['achievements_planet1_require_1'].'</span>';
else
	$planet1_req1 = '<span style="color:red">'.$LNG['achievements_planet1_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'planet1_req1'    	=> $planet1_req1,
	'planet1_title'    => ' <span style="color:red">'.$LNG['achievements_planet1'].'</span>',
	'planet1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_planet1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'planet1_title'    => ' <span style="color:lime">'.$LNG['achievements_planet1'].'</span>',
	'planet1_req1'    => ' <span style="color:lime">'.$LNG['achievements_planet1_done'].'</span>',
	'planet1_img'    => ' <img border="1" src="styles/achievements/planet1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Planet Achievements Level 2

	if($USER['achievements_planet2'] == 0)
	{
if($PLANET['crystal_perhour'] >= 5000000.000000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet` = achievements_planet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $planet2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_planet2_success']),"?page=achievement",4);
		
}
if($PLANET['crystal_perhour'] >= 5000000.000000)
	$planet2_req1 = '<span style="color:lime">'.$LNG['achievements_planet2_require_1'].'</span>';
else
	$planet2_req1 = '<span style="color:red">'.$LNG['achievements_planet2_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'planet2_req1'    	=> $planet2_req1,
	'planet2_title'    => ' <span style="color:red">'.$LNG['achievements_planet2'].'</span>',
	'planet2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_planet2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'planet2_title'    => ' <span style="color:lime">'.$LNG['achievements_planet2'].'</span>',
	'planet2_req1'    => ' <span style="color:lime">'.$LNG['achievements_planet2_done'].'</span>',
	'planet2_img'    => ' <img border="1" src="styles/achievements/planet2_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Planet Achievements Level 3

	if($USER['achievements_planet3'] == 0)
	{
if($PLANET['deuterium_perhour'] >= 5000000.000000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet` = achievements_planet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $planet3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_planet3_success']),"?page=achievement",4);
		
}
if($PLANET['deuterium_perhour'] >= 5000000.000000)
	$planet3_req1 = '<span style="color:lime">'.$LNG['achievements_planet3_require_1'].'</span>';
else
	$planet3_req1 = '<span style="color:red">'.$LNG['achievements_planet3_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'planet3_req1'    	=> $planet3_req1,
	'planet3_title'    => ' <span style="color:red">'.$LNG['achievements_planet3'].'</span>',
	'planet3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_planet3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'planet3_title'    => ' <span style="color:lime">'.$LNG['achievements_planet3'].'</span>',
	'planet3_req1'    => ' <span style="color:lime">'.$LNG['achievements_planet3_done'].'</span>',
	'planet3_img'    => ' <img border="1" src="styles/achievements/planet3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### Planet Achievements Level 4
	
	if($USER['achievements_planet4'] == 0)
	{
if($PLANET['metal_max'] >= 1000000000000 && $PLANET['crystal_max'] >= 1000000000000 && $PLANET['deuterium_max'] >= 1000000000000)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_planet` = achievements_planet+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $planet4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_planet4_success']),"?page=achievement",4);
		
}
if($PLANET['metal_max'] >= 1000000000000 && $PLANET['crystal_max'] >= 1000000000000 && $PLANET['deuterium_max'] >= 1000000000000)
	$planet4_req1 = '<span style="color:lime">'.$LNG['achievements_planet4_require_1'].'</span>';
else
	$planet4_req1 = '<span style="color:red">'.$LNG['achievements_planet4_require_1'].'</span>';
$this->tplObj->assign_vars(array(
	'planet4_req1'    	=> $planet4_req1,
	'planet4_title'    => ' <span style="color:red">'.$LNG['achievements_planet4'].'</span>',
	'planet4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_planet4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'planet4_title'    => ' <span style="color:lime">'.$LNG['achievements_planet4'].'</span>',
	'planet4_req1'    => ' <span style="color:lime">'.$LNG['achievements_planet4_done'].'</span>',
	'planet4_img'    => ' <img border="1" src="styles/achievements/planet4_done.png" align="top" width="80" height="80"></td>',
));
	}

######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_planet'] < 4)
	{
$this->tplObj->assign_vars(array(
	'planet_title'    => ' <span style="color:red">'.$LNG['achievements_planet'].'</span>',
));
	}
	
if($USER['achievements_planet'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'planet_title'    => ' <span style="color:lime">'.$LNG['achievements_planet'].'</span>',
));
	}
	
######################################################################################
######### Lab Achievements Level 1

	if($USER['achievements_lab1'] == 0)
	{
if($USER['metal_proc_tech'] >= 27 && $USER['crystal_proc_tech'] >= 27 && $USER['deuterium_proc_tech'] >=27)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab` = achievements_lab+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $lab1_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_lab1_success']),"?page=achievement",4);
		
}
if($USER['metal_proc_tech'] >=27)
	$lab1_req1 = '<span style="color:lime">'.$LNG['achievements_lab1_require_1'].'</span>';
else
	$lab1_req1 = '<span style="color:red">'.$LNG['achievements_lab1_require_1'].'</span>';
if($USER['crystal_proc_tech'] >=27)
	$lab1_req2 = '<span style="color:lime">'.$LNG['achievements_lab1_require_2'].'</span>';
else
	$lab1_req2 = '<span style="color:red">'.$LNG['achievements_lab1_require_2'].'</span>';
if($USER['deuterium_proc_tech'] >=27)
	$lab1_req3 = '<span style="color:lime">'.$LNG['achievements_lab1_require_3'].'</span>';
else
	$lab1_req3 = '<span style="color:red">'.$LNG['achievements_lab1_require_3'].'</span>';

$this->tplObj->assign_vars(array(
	'lab1_req1'    	=> $lab1_req1,
	'lab1_req2'    	=> $lab1_req2,
	'lab1_req3'    	=> $lab1_req3,
	'lab1_title'    => ' <span style="color:red">'.$LNG['achievements_lab1'].'</span>',
	'lab1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_lab1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'lab1_title'    => ' <span style="color:lime">'.$LNG['achievements_lab1'].'</span>',
	'lab1_req1'    => ' <span style="color:lime">'.$LNG['achievements_lab1_done'].'</span>',
	'lab1_req2'    	=> ' <span style="color:lime">'.'</span>',
	'lab1_req3'    	=> ' <span style="color:lime">'.'</span>',
	'lab1_img'    => ' <img border="1" src="styles/achievements/lab1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Lab Achievements Level 2

	if($USER['achievements_lab2'] == 0)
	{
if($USER['spy_tech'] >= 30)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab2` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab` = achievements_lab+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $lab2_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_lab2_success']),"?page=achievement",4);
		
}
if($USER['spy_tech'] >=30)
	$lab2_req1 = '<span style="color:lime">'.$LNG['achievements_lab2_require_1'].'</span>';
else
	$lab2_req1 = '<span style="color:red">'.$LNG['achievements_lab2_require_1'].'</span>';

$this->tplObj->assign_vars(array(
	'lab2_req1'    	=> $lab2_req1,
	'lab2_title'    => ' <span style="color:red">'.$LNG['achievements_lab2'].'</span>',
	'lab2_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_lab2'] == 1)
	{
$this->tplObj->assign_vars(array(
	'lab2_title'    => ' <span style="color:lime">'.$LNG['achievements_lab2'].'</span>',
	'lab2_req1'    => ' <span style="color:lime">'.$LNG['achievements_lab2_done'].'</span>',
	'lab2_img'    => ' <img border="1" src="styles/achievements/lab2_done.png" align="top" width="80" height="80"></td>',
));
	}

######################################################################################
######### Lab Achievements Level 3

	if($USER['achievements_lab3'] == 0)
	{
if($USER['graviton_tech'] >= 5)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab3` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab` = achievements_lab+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $lab3_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_lab3_success']),"?page=achievement",4);
		
}
if($USER['graviton_tech'] >=5)
	$lab3_req1 = '<span style="color:lime">'.$LNG['achievements_lab3_require_1'].'</span>';
else
	$lab3_req1 = '<span style="color:red">'.$LNG['achievements_lab3_require_1'].'</span>';

$this->tplObj->assign_vars(array(
	'lab3_req1'    	=> $lab3_req1,
	'lab3_title'    => ' <span style="color:red">'.$LNG['achievements_lab3'].'</span>',
	'lab3_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_lab3'] == 1)
	{
$this->tplObj->assign_vars(array(
	'lab3_title'    => ' <span style="color:lime">'.$LNG['achievements_lab3'].'</span>',
	'lab3_req1'    => ' <span style="color:lime">'.$LNG['achievements_lab3_done'].'</span>',
	'lab3_img'    => ' <img border="1" src="styles/achievements/lab3_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######################################################################################
######### Lab Achievements Level 4

	if($USER['achievements_lab4'] == 0)
	{
if($USER['rpg_scientifique'] >= 3)
{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab4` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_lab` = achievements_lab+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements` = achievements+1 WHERE `id` = ".$USER['id'].";");
	$USER['darkmatter'] += $lab4_darkmatter;
	$this->printMessage(sprintf($LNG['achievements_lab4_success']),"?page=achievement",4);
		
}
if($USER['rpg_scientifique'] >=3)
	$lab4_req1 = '<span style="color:lime">'.$LNG['achievements_lab4_require_1'].'</span>';
else
	$lab4_req1 = '<span style="color:red">'.$LNG['achievements_lab4_require_1'].'</span>';

$this->tplObj->assign_vars(array(
	'lab4_req1'    	=> $lab4_req1,
	'lab4_title'    => ' <span style="color:red">'.$LNG['achievements_lab4'].'</span>',
	'lab4_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_lab4'] == 1)
	{
$this->tplObj->assign_vars(array(
	'lab4_title'    => ' <span style="color:lime">'.$LNG['achievements_lab4'].'</span>',
	'lab4_req1'    => ' <span style="color:lime">'.$LNG['achievements_lab4_done'].'</span>',
	'lab4_img'    => ' <img border="1" src="styles/achievements/lab4_done.png" align="top" width="80" height="80"></td>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_lab'] < 4)
	{
$this->tplObj->assign_vars(array(
	'lab_title'    => ' <span style="color:red">'.$LNG['achievements_lab'].'</span>',
));
	}
	
if($USER['achievements_lab'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'lab_title'    => ' <span style="color:lime">'.$LNG['achievements_lab'].'</span>',
));
	}
	
######### DO NOT CHANGE ANYTHING THERE, except if you added any new achievement, or maded your edit
		
	// Badge 1 - Mines
if($USER['achievements_mines'] == 4)
	$mines_badge = '<img border="1" src="styles/achievements/mines_done.png" align="top" width="80" height="80">';
else
	$mines_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 2 - Tech
if($USER['achievements_tech'] == 4)
	$tech_badge = '<img border="1" src="styles/achievements/tech_done.png" align="top" width="80" height="80">';
else
	$tech_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 3 - Engine
if($USER['achievements_engine'] == 4)
	$engine_badge = '<img border="1" src="styles/achievements/engine_done.png" align="top" width="80" height="80">';
else
	$engine_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 4 - Colonization
if($USER['achievements_colonization'] == 3)
	$colonization_badge = '<img border="1" src="styles/achievements/colonization_done.png" align="top" width="80" height="80">';
else
	$colonization_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 5 - Moon
if($USER['achievements_moon'] == 3)
	$moon_badge = '<img border="1" src="styles/achievements/moon_done.png" align="top" width="80" height="80">';
else
	$moon_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 6 - War
if($USER['achievements_war'] == 3)
	$war_badge = '<img border="1" src="styles/achievements/war_done.png" align="top" width="80" height="80">';
else
	$war_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 7 - Destroy
if($USER['achievements_destroy'] == 4)
	$destroy_badge = '<img border="1" src="styles/achievements/destroy_done.png" align="top" width="80" height="80">';
else
	$destroy_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 8 - Time
if($USER['achievements_time'] == 3)
	$time_badge = '<img border="1" src="styles/achievements/time_done.png" align="top" width="80" height="80">';
else
	$time_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';
if(($USER['b_tech'] - 1) > TIMESTAMP)
	$time_tech = '<span style="color:yellow">'.$LNG['achievements_time_tech1'].'</span>';
else
	$time_tech = '<span style="color:red">'.$LNG['achievements_time_tech2'].'</span>';
if(($PLANET['b_building'] - 1) > TIMESTAMP)
	$time_build = '<span style="color:yellow">'.$LNG['achievements_time_build1'].'</span>';
else
	$time_build = '<span style="color:red">'.$LNG['achievements_time_build2'].'</span>';
if(($PLANET['b_hangar'] - 1) > TIMESTAMP)
	$time_hangar = '<span style="color:yellow">'.$LNG['achievements_time_hangar1'].'</span>';
else
	$time_hangar = '<span style="color:red">'.$LNG['achievements_time_hangar2'].'</span>';
	
	// Badge 9 - Hall of Fame
if($USER['achievements_hof'] == 3)
	$hof_badge = '<img border="1" src="styles/achievements/hof_done.png" align="top" width="80" height="80">';
else
	$hof_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 10 - Community
if($USER['achievements_community'] == 3)
	$community_badge = '<img border="1" src="styles/achievements/community_done.png" align="top" width="80" height="80">';
else
	$community_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 10 - Fleets
if($USER['achievements_fleet'] == 3)
	$fleet_badge = '<img border="1" src="styles/achievements/fleet_done.png" align="top" width="80" height="80">';
else
	$fleet_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';

	// Badge 11 - Dark Matter
if($USER['achievements_darkmatter'] == 5)
	$darkmatter_badge = '<img border="1" src="styles/achievements/darkmatter_done.png" align="top" width="80" height="80">';
else
	$darkmatter_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';
	
	// Badge 12 - Planets
if($USER['achievements_planet'] == 4)
	$planet_badge = '<img border="1" src="styles/achievements/planet_done.png" align="top" width="80" height="80">';
else
	$planet_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';
	
	// Badge 13 - Lab
if($USER['achievements_lab'] == 4)
	$lab_badge = '<img border="1" src="styles/achievements/lab_done.png" align="top" width="80" height="80">';
else
	$lab_badge = '<img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80">';
	

	// Mines Achievements - Shows the max mines of the user (Search in all planets)
	$Max_MetalMine = $GLOBALS['DATABASE']->getFirstCell("SELECT MAX(metal_mine) as metal_mine FROM uni1_planets WHERE id_owner = ".$USER['id'].";");
	$Max_CrystalMine = $GLOBALS['DATABASE']->getFirstCell("SELECT MAX(crystal_mine) as crystal_mine FROM uni1_planets WHERE id_owner = ".$USER['id'].";");
	$Max_DeuteriumSint = $GLOBALS['DATABASE']->getFirstCell("SELECT MAX(deuterium_sintetizer) as deuterium_sintetizer FROM uni1_planets WHERE id_owner = ".$USER['id'].";");

	// Colonization & Moon Achievements - Show the amount of moons and colonies of the user
	$MyPlanets = $GLOBALS['DATABASE']->getFirstCell("SELECT count(*) AS planet_count FROM ".PLANETS." WHERE `planet_type` = '". 1 ."' AND `id_owner` = '". $USER['id'] ."';");
	$MyMoons = $GLOBALS['DATABASE']->getFirstCell("SELECT count(*) AS moon_count FROM ".PLANETS." WHERE `planet_type` = '". 3 ."' AND `id_owner` = '". $USER['id'] ."';");
	
	// Destroy Achievements - Amount of destroy
	$RecMetal = $GLOBALS['DATABASE']->getFirstCell("SELECT count(*) AS kbmetal FROM ".USERS." WHERE `id` = '". $USER['id'] ."';");
	$RecCrystal = $GLOBALS['DATABASE']->getFirstCell("SELECT count(*) AS kbcrystal FROM ".USERS." WHERE `id` = '". $USER['id'] ."';");
	
	// Hall of Fame Achievemens - Attacks you joined
	$HallOfFame = $GLOBALS['DATABASE']->getFirstCell("SELECT count(*) AS rid FROM uni1_users_to_topkb WHERE `uid` = '". $USER['id'] ."';");

	// Fleet Achievemens - How many fleets Am I doing?
	$FleetAmount = $GLOBALS['DATABASE']->getFirstCell("SELECT count(*) AS fleet_id FROM uni1_fleets WHERE `fleet_owner` = '". $USER['id'] ."';");

	$this->tplObj->assign_vars(array(
	
	// All achievements unlocked by player
		'amount'	=> $USER['achievements'],
	// Badges
		'mines_badge'	=> $mines_badge,
		'tech_badge'	=> $tech_badge,
		'engine_badge'	=> $engine_badge,
		'colonization_badge'	=> $colonization_badge,
		'moon_badge'	=> $moon_badge, 
		'war_badge'	=> $war_badge,
		'destroy_badge'	=> $destroy_badge,
		'time_badge'	=> $time_badge,
		'hof_badge'	=> $hof_badge,
		'community_badge'	=> $community_badge,
		'fleet_badge'	=> $fleet_badge,
		'darkmatter_badge'	=> $darkmatter_badge,
		'planet_badge'	=> $planet_badge,
		'lab_badge'	=> $lab_badge,
	// Amount of Achievements did
		'badge_amount'		=> $USER['achievements'],
	// Requirements for Achievements
		'badge_req1'		=> $USER['achievements'],
	// Amount of Mine Achievements did
		'mines_amount'		=> $USER['achievements_mines'],
		'mines_req'		=> $CONF['achievements_mines'],
	// Requirements for Mine Achievements
		'mines_req1'		=> $PLANET['metal_mine'],
		'mines_req2'		=> $PLANET['crystal_mine'],
		'mines_req3'		=> $PLANET['deuterium_sintetizer'],
	// Max Mines in planet for Requirements for Mine Achievements
		'mines_max_req1'		=> $Max_MetalMine,
		'mines_max_req2'		=> $Max_CrystalMine,
		'mines_max_req3'		=> $Max_DeuteriumSint,
	// Amount of Tech Achievements did
		'tech_amount'		=> $USER['achievements_tech'],
		'tech_req'		=> $CONF['achievements_tech'],
	// Requirements for Tech Achievements
		'tech_req1'		=> $USER['military_tech'],
		'tech_req2'		=> $USER['defence_tech'],
		'tech_req3'		=> $USER['shield_tech'],
	// Amount of Engine Achievements did
		'engine_amount'		=> $USER['achievements_engine'],
		'engine_req'		=> $CONF['achievements_engine'],
	// Requirements for Engine Achievements
		'engine_req1'		=> $USER['combustion_tech'],
		'engine_req2'		=> $USER['impulse_motor_tech'],
		'engine_req3'		=> $USER['hyperspace_motor_tech'],
	// Amount of Colonization Achievements did
		'colonization_amount'		=> $USER['achievements_colonization'],
		'colonization_req'		=> $CONF['achievements_colonization'],
	// Requirements for Colonization Achievements
		'colonization_req1'		=> $MyPlanets,
	// Amount of Moon Achievements did
		'moon_amount'		=> $USER['achievements_moon'],
		'moon_req'		=> $CONF['achievements_moon'],
	// Requirements for Moon Achievements
		'moon_req1'		=> $MyMoons,
	// Amount of War Achievements did
		'war_amount'		=> $USER['achievements_war'],
		'war_req'		=> $CONF['achievements_war'],
	// Requirements for War Achievements
		'war_req1'		=> 	$USER['wons'],
		'war_req2'		=> 	$USER['loos'],
	// Amount of Destroy Achievements did
		'destroy_amount'		=> $USER['achievements_destroy'],
		'destroy_req'		=> $CONF['achievements_destroy'],
	// Requirements for Destroy Achievements
		'destroy_req1'		=> 	$USER['kbmetal'],
		'destroy_req2'		=> 	$USER['kbcrystal'],
	// Amount of time Achievements did
		'time_amount'		=> $USER['achievements_time'],
		'time_req'		=> $CONF['achievements_time'],
	// Requirements for time Achievements
		'time_tech'		=> 	$time_tech,
		'time_build'		=> 	$time_build,
		'time_hangar'		=> 	$time_hangar,
	// Amount of HOF Achievements did
		'hof_amount'		=> $USER['achievements_hof'],
		'hof_req'		=> $CONF['achievements_hof'],
	// Requirements for HOF Achievements
		'hof_req1'		=> 	$HallOfFame,
	// Amount of Community Achievements did
		'community_amount'		=> $USER['achievements_community'],
		'community_req'		=> $CONF['achievements_community'],
	// Amount of fleet Achievements did
		'fleet_amount'		=> $USER['achievements_fleet'],
		'fleet_req'		=> $CONF['achievements_fleet'],
	// Requirements for fleet Achievements
		'fleet_req1'		=> 	$FleetAmount,
	// Amount of Darkmatter Achievements did
		'darkmatter_amount'		=> $USER['achievements_darkmatter'],
		'darkmatter_req'		=> $CONF['achievements_darkmatter'],
	// Requirements for darkmatter Achievements
		'darkmatter_req1'		=> 	$USER['darkmatter'],
	// Amount of Planet Achievements did
		'planet_amount'		=> $USER['achievements_planet'],
		'planet_req'		=> $CONF['achievements_planet'],
	// Amount of Lab Achievements did
		'lab_amount'		=> $USER['achievements_lab'],
		'lab_req'		=> $CONF['achievements_lab'],
		));
	
	$this->display('page.achievements.body.tpl');
 }
}
?>
