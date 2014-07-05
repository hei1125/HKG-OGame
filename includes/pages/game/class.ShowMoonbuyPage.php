<?php
class ShowMoonbuyPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $USER,$PLANET;


	
		$cost = 1000;
		//if($USER['premium_until'] > TIMESTAMP)
			//$cost /=2;
		$action = HTTP::_GP('action',0);
		if($_POST){
			if($USER['darkmatter'] < $cost){
				$this->printMessage("You don't have enough Dark matter, it costs you ".$cost." DM.", true, array('game.php?page=moonbuy', 2));
				die();
			}
			else{
				if($PLANET['planet_type'] == 1 && $PLANET['id_luna'] == 0){
					require_once(ROOT_PATH.'includes/functions/CreateOneMoonRecord.php');
					$a = mt_rand(33000, 35000); // how big ?
					$u_have_moon = CreateOneMoonRecord($PLANET['galaxy'], $PLANET['system'], $PLANET['planet'], $PLANET['universe'], $USER['id'],'', 'Moon', '', $a);
					$USER['darkmatter'] -= $cost;
					//$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `darkmatter`= `darkmatter` - ".$cost." WHERE id= '".$PLANET['id']."';");
					$this->printMessage("You have bought a moon",true, array('game.php?page=moonbuy', 2));
					die(); 
				}
				else{
					$this->printMessage("You already have a moon at this planet coords", true, array('game.php?page=overview', 2));
					die();
				}
			}
		}
		$this->tplObj->assign_vars(array(
			'cost' => pretty_number($cost),
		));
		$this->display('page.moonbuy.default.tpl');

	}
}
?>