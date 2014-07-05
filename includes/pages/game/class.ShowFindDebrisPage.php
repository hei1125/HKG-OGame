<?php

class ShowFindDebrisPage extends AbstractPage
{
    
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
		$mode = HTTP::_GP('y', '');
		$table = "";
		$range = $PLANET['nano_factory'] * 5;
	if($mode == '1'){
	$cautare = $GLOBALS['DATABASE']->query("SELECT *from ".PLANETS." where (`der_metal` >0 OR `der_crystal` >0) AND (`system` > '".($PLANET['system'] - $range)."' AND `system` < '".($PLANET['system'] + $range)."') AND `galaxy` = '".$PLANET['galaxy']."' and `planet_type` = '1' ;");
			$table = "<table><tr><td>".$LNG['gl_galaxy']."</td><td>".$LNG['gl_solar_system']."</td><td>".$LNG['gl_planet']."</td><td>".$LNG['al_tfmetall']."</td><td>".$LNG['al_tfkristall']."</td><td>".$LNG['action']."</td></tr>";
			//print_r($cautare);
			if($GLOBALS['DATABASE']->numRows($cautare) > 0)
		while($GalaxyRowPlanet = $GLOBALS['DATABASE']->fetch_array($cautare)){
		
		$GRecNeeded = min(ceil(($GalaxyRowPlanet['der_metal'] + $GalaxyRowPlanet['der_crystal']) / $pricelist[219]['capacity']), $PLANET[$resource[219]]);
		
			$table .= "<tr><td>".$GalaxyRowPlanet['galaxy']."</td><td>".$GalaxyRowPlanet['system']."</td><td>".$GalaxyRowPlanet['planet']."</td><td>".$GalaxyRowPlanet['der_metal']."</td><td>".$GalaxyRowPlanet['der_crystal']."</td><td><a href='javascript:doit(8,".$GalaxyRowPlanet['id'].");'>".$LNG['collect']."</a></td></tr>";
		}
			else
				$table .= "<tr><td colspan='5'>".$LNG['no_debris_range']."</td></tr>";
		$table .= "</table>";
	}
		$this->tplObj->assign_vars(
			array(
				'range' => $range,
				'debris' => $table,
				'user_maxfleetsettings' => $USER['settings_fleetactions'],
			)
		);
		$this->display("page.finddebris.default.tpl");
	}
}
?>