<?php
/**
 * @MOD_Market_v17_01 for 2Moons <xnovarus@gmail.com>
 * @author Isaev Evgeniy <evgenisaev73@gmail.com>
 * 
 * 
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 2Moons 1.7
 */
class ShowMarketPage extends AbstractPage {

    public static $requireModule = MODULE_SUPPORT;
function __construct() 
	{
		parent::__construct();
	}

	function show()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF, $db, $reslist, $resource;
		
		
	    $template	= new template();
		$Search['PAGES'] = HTTP::_GP('PAGES','');
		$PAGEE        = HTTP::_GP('PAGEE','');
		$BEFORE       = HTTP::_GP('BEFORE','');
		$NEXT         = HTTP::_GP('NEXT','');
		$Page 	      = HTTP::_GP('side', 0);
		$orderby      = HTTP::_GP('orderby', 0);
		$sort     	  = HTTP::_GP('sort','ASC');
	    $an   	      = HTTP::_GP('an', 1);
		$whos   	  = HTTP::_GP('whos', 1);
		$who   	      = HTTP::_GP('who', $whos);
        $type  	      = HTTP::_GP('type', $orderby);
        $range 	      = HTTP::_GP('range', 1);
		$action       = HTTP::_GP('action', '');
		$imageq       = HTTP::_GP('imageq', '', false);
		$tmpi       = HTTP::_GP('tmpi', '', false);
		$lim          = 10;

        switch ($type)
        {
			case 2:
                $Order   = "user";
                $Rank    = "user";
            break;
			case 3:
                $Order   = "metala";
                $Rank    = "metala";
            break;
            case 4:
                $Order   = "cristala";
                $Rank    = "cristala";
            break;
            case 5:
                $Order   = "deuta";
                $Rank    = "deuta";
            break;
            case 6:
                $Order   = "metals";
                $Rank    = "metals";
            break;
			case 7:
                $Order   = "cristals";
                $Rank    = "cristals";
            break;
			case 8:
                $Order   = "deuts";
                $Rank    = "deuts";
            break;
            default:
                $Order   = "id";
                $Rank    = "id";
			break;
        }
        $orderby = $type;
		$whos = $who;
		
		
        $SellRes  = array();
		
		switch($who)
        {
            case 1:
			$qqqqq = 'SELECT COUNT(*) FROM '.MARKET.' WHERE `universe` = '.$UNI.';';
			$qqqq = $GLOBALS['DATABASE']->getFirstCell($qqqqq);
			
            
				// Сколько всего получится страниц
				$MaxUsers = max(1,ceil($qqqq/$lim));  //kol str
				// Начальная позиция
			if (!$Page){ 
		        $INI = 0; 
    	        $Page = 1; 
	            }else
		        $INI = ($Page - 1) * $lim;
					 
			//////////-/-///////--------------///////////////-----///////////
			// защита
			if (($sort != 'ASC')&&($sort != 'DESC'))
			{$sort = 'ASC';}
			
			if ( $sort == 'ASC' ) {
            $tmpi = 'DESC';
            $imageq = '<img src="styles/resource/images/admin/GO.png" height=10 width=14>';
            } else {
            $tmpi = 'ASC';
            $imageq = '<img src="styles/resource/images/admin/UP.png" height=10 width=14>';
			}
			///////////////////////////////////////////////////////////////////////////////////////////
			if ($qqqq > 0)
	            {
		         $UrlForPage	=	"?page=market";
				 if($MaxUsers > 1)
		            {
			         $BeforePage	=	($Page - 1);
			         $NextPage	=	($Page + 1);
			
			         for ($i = 1; $i <= $MaxUsers; $i++)
			            { 
				         $PAGEE .= $Page == $i ? "&nbsp;".$Page."&nbsp;" : " <a href='".$UrlForPage."&amp;sort=".$sort."&amp;who=".$whos."&amp;orderby=".$orderby."&amp;side=".$i."'>".$i."</a> ";
			            }

			         if(($Page - 1) > 0) 
				     $BEFORE	= "<a href='".$UrlForPage."&amp;sort=".$sort."&amp;who=".$whos."&amp;orderby=".$orderby."&amp;side=".$BeforePage."'><img src=\"./styles/resource/images/admin/arrowleft.png\" title=".$LNG['an__before']." height=10 width=14></a> ";
		
			         if(($Page + 1) <= $MaxUsers) 
				     $NEXT	= "<a href='".$UrlForPage."&amp;sort=".$sort."&amp;who=".$whos."&amp;orderby=".$orderby."&amp;side=".$NextPage."'><img src=\"./styles/resource/images/admin/arrowright.png\" title=".$LNG['an__next']." height=10 width=14></a>";
		             $Search['PAGES']	= '<tr><td style="color:#00CC33;border: 1px lime solid;text-align:center;">'.$BEFORE.'&nbsp;'.$PAGEE.'&nbsp;'.$NEXT.'</td></tr>';
		            }
		        }
		    //////////////////////////////////////////////////////////////////////////////////////////
		         $stats_sql	=	'SELECT DISTINCT `id`, `user`, `sender`, `senderplanet`, `type`, `typeres`, `universe`, `galaxie`, `systeme`, `planete`, `metala`, `cristala`, `deuta`, `metals`, `cristals`, `deuts` FROM '.MARKET.'
				 WHERE `universe` = '.$UNI.' ORDER BY '.$Order .' '.$sort.' LIMIT '.$INI .','.$lim.';';
				$query = $GLOBALS['DATABASE']->query($stats_sql);
				$SellRes	= array();
                //while ($AdminRow = $GLOBALS['DATABASE']->fetch_array($query))
				while($AdminRow = $query->fetch_assoc())
                {
                    $SellRes[]	= array(
                                    'id'	   => $AdminRow['id'],		
			                        'user'	   => $AdminRow['user'],
									'type'     => $AdminRow['type'],
									'sender'   => $AdminRow['sender'],
			                        'universe' => $AdminRow['universe'],
			                        'metala'   => pretty_number($AdminRow['metala']),
			                        'cristala' => pretty_number($AdminRow['cristala']),
			                        'deuta'    => pretty_number($AdminRow['deuta']),
			                        'metals'   => pretty_number($AdminRow['metals']),
			                        'cristals' => pretty_number($AdminRow['cristals']),
			                        'deuts'    => pretty_number($AdminRow['deuts']),
			                        'galaxy'   => $AdminRow['galaxie'],
			                        'system'   => $AdminRow['systeme'],
			                        'planet'   => $AdminRow['planete'],
									'senderplanet'   => $AdminRow['senderplanet'],
			                        'users'    => $USER['username'],
			                        //'buddyid'  => $AdminRow['buddyid'],
			                        'idlot'    => $AdminRow['id'],
									'times'    => $AdminRow['type'] + (86400+86400+86400), // time lot 86400=1 day
		                            'timelot'  => TIMESTAMP,
									'timeout'  => pretty_time((86400+86400+86400) - (TIMESTAMP - $AdminRow['type'])),
									//'timesno'   => $timesno,
                    );
					
							$Element = $AdminRow['id'];
                            $this->tplObj->execscript("GetOfficerTime(".$Element.", ".((86400+86400+86400) - (TIMESTAMP - $AdminRow['type'])).");");	
							$times      = $AdminRow['type'] + (86400+86400+86400); // time lot  86400=1 day
		                    $timelot    = TIMESTAMP;
							$bid2 = $AdminRow['id']++;
							
							if ($timelot >= $times)
							{
							$NewUser = $AdminRow['sender'];
							$GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET 
							metal = `metal` + '".$AdminRow['metala']."', 
							crystal = `crystal` + '". $AdminRow['cristala'] ."', 
							deuterium = `deuterium` + '". $AdminRow['deuta'] ."' 
							WHERE id=".$AdminRow['senderplanet'].";DELETE FROM ".MARKET." WHERE id= ".$bid2.";");
				            $message 	= sprintf($LNG['an_mesexit']);
				            SendSimpleMessage($NewUser, 1, TIMESTAMP, 1, $LNG['an_anres'], $LNG['an_anres'], $message);						
							}
							
					
					if ($action == 'del') 
					{
						$id	= HTTP::_GP('id', 0);
						$markdel = $GLOBALS['DATABASE']->getFirstRow("SELECT `id` as buddyid, `user`, `sender`, `senderplanet`, `universe`, `galaxie`, `systeme`, `planete`, `metala`, `cristala`, `deuta`, `metals`, `cristals`, `deuts` FROM ".MARKET." WHERE `id` = '".$id."' ;");
						$markdel['metala'] *= 0.8;
						$markdel['cristala'] *= 0.8;
						$markdel['deuta'] *= 0.8;
						$PLANET[$resource[901]]	+= $markdel['metala'];
						$PLANET[$resource[902]]	+= $markdel['cristala'];
						$PLANET[$resource[903]]	+= $markdel['deuta'];
						$GLOBALS['DATABASE']->query("DELETE FROM ".MARKET."  WHERE `id`='".$id."';");
						$this->printMessage( ''.$LNG['Metal'].': <font color=lime>'. $markdel['metala'] .'</font> '.$LNG['Crystal'].':  <font color=lime>'. $markdel['cristala'] .'</font> '.$LNG['Deuterium'].':<font color=lime> '. $markdel['deuta'].'</font> ', 'game.php?page=market' );
					}
					if($action == 'buy')
					{
					 $id	= HTTP::_GP('id', 0);
					 $markbuy	= $GLOBALS['DATABASE']->getFirstRow("SELECT `id` as buddyid, `user`, `sender`, `senderplanet`, `universe`, `galaxie`, `systeme`, `planete`, `metala`, `cristala`, `deuta`, `metals`, `cristals`, `deuts` FROM ".MARKET." WHERE `id` = '".$id."' ;");
					     if($markbuy['metals'] > $PLANET[$resource[901]]){
		                  $this->printMessage($LNG['tr_not_enought_metal'],'game.php?page=market');}
					     elseif($markbuy['cristals'] > $PLANET[$resource[902]]){
		                  $this->printMessage($LNG['tr_not_enought_crystal'],'game.php?page=market');}
						 elseif($markbuy['deuts'] > $PLANET[$resource[903]]){
		                  $this->printMessage($LNG['tr_not_enought_deuterium'],'game.php?page=market');}
						  $NewUser = $markbuy['sender'];
						  //$TIME  = pretty_time(TIMESTAMP);
						  $PLANET[$resource[901]]	+= $markbuy['metala'];
                          $PLANET[$resource[902]]	+= $markbuy['cristala'];
                          $PLANET[$resource[903]]	+= $markbuy['deuta'];
						  $PLANET[$resource[901]]	-= $markbuy['metals'];
                          $PLANET[$resource[902]]	-= $markbuy['cristals'];
                          $PLANET[$resource[903]]	-= $markbuy['deuts'];
					      $GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET 
						  metal = `metal` + '".$markbuy['metals']."', 
						  crystal = `crystal` + '".$markbuy['cristals']."', 
						  deuterium = `deuterium` + '".$markbuy['deuts']."' 
						  WHERE id=".$markbuy['senderplanet'].";DELETE FROM ".MARKET."  WHERE id =".$id.";");
						  $message 	= sprintf($LNG['an_mes'], $USER['username'] , pretty_number($markbuy['metala']) , pretty_number($markbuy['cristala']) , pretty_number($markbuy['deuta']) , pretty_number($markbuy['metals']) , pretty_number($markbuy['cristals']) , pretty_number($markbuy['deuts']));
						  SendSimpleMessage($NewUser, 1, TIMESTAMP, 1, $LNG['an_anres'], $LNG['an_anres'], $message);
						  $this->printMessage( ''.$LNG['Metal'].': <font color=lime>'.pretty_number($markbuy['metala']).'</font>  '.$LNG['Crystal'].':  <font color=lime>'.pretty_number($markbuy['cristala']).'</font>  '.$LNG['Deuterium'].':<font color=lime> '.pretty_number($markbuy['deuta']).'</font> ', 'game.php?page=market' );
					}
							
				}
				$GLOBALS['DATABASE']->free_result($query);
				
			
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			break;
			case 2:
			if($USER['ally_id'] != 0){
			$qqqqq = 'SELECT COUNT(*) FROM '.MARKETALLY.' WHERE `universe` = '.$UNI.';';
			$qqqq = $GLOBALS['DATABASE']->getFirstCell($qqqqq);
			
				// Сколько всего получится страниц
				$MaxUsers = max(1,ceil($qqqq/$lim));  //kol str
				// Начальная позиция
			if (!$Page){ 
		        $INI = 0; 
    	        $Page = 1; 
	            }else
		        $INI = ($Page - 1) * $lim;
					 
			//////////-/-///////--------------///////////////-----//////////
			// защита
			if (($sort != 'ASC')&&($sort != 'DESC'))
			{$sort = 'ASC';}
			
			if ( $sort == 'ASC' ) {
            $tmpi = 'DESC';
            $imageq = '<img src="styles/resource/images/admin/GO.png" height=10 width=14>';
            } else {
            $tmpi = 'ASC';
            $imageq = '<img src="styles/resource/images/admin/UP.png" height=10 width=14>';
			}
			///////////////////////////////////////////////////////////////////////////////////////////
			if ($qqqq > 0)
	            {
		         $UrlForPage	=	"?page=market";
				 if($MaxUsers > 1)
		            {
			         $BeforePage	=	($Page - 1);
			         $NextPage	=	($Page + 1);
			
			         for ($i = 1; $i <= $MaxUsers; $i++)
			            { 
				         $PAGEE .= $Page == $i ? "&nbsp;".$Page."&nbsp;" : " <a href='".$UrlForPage."&amp;sort=".$sort."&amp;who=".$whos."&amp;orderby=".$orderby."&amp;side=".$i."'>".$i."</a> ";
			            }

			         if(($Page - 1) > 0) 
				     $BEFORE	= "<a href='".$UrlForPage."&amp;sort=".$sort."&amp;who=".$whos."&amp;orderby=".$orderby."&amp;side=".$BeforePage."'><img src=\"./styles/resource/images/admin/arrowleft.png\" title=".$LNG['an__before']." height=10 width=14></a> ";
		
			         if(($Page + 1) <= $MaxUsers) 
				     $NEXT	= "<a href='".$UrlForPage."&amp;sort=".$sort."&amp;who=".$whos."&amp;orderby=".$orderby."&amp;side=".$NextPage."'><img src=\"./styles/resource/images/admin/arrowright.png\" title=".$LNG['an__next']." height=10 width=14></a>";
		             $Search['PAGES']	= '<tr><td style="color:#00CC33;border: 1px lime solid;text-align:center;">'.$BEFORE.'&nbsp;'.$PAGEE.'&nbsp;'.$NEXT.'</td></tr>';
		            }
					
		        }
		    //////////////////////////////////////////////////////////////////////////////////////////
				$stats_sql	=	'SELECT DISTINCT `id`, `user`, `sender`, `senderplanet`, `type`, `typeres`, `universe`, `galaxie`, `systeme`, `planete`, `metala`, `cristala`, `deuta`, `metals`, `cristals`, `deuts` FROM '.MARKETALLY.'
				WHERE `idally` = '.$USER['ally_id'].' AND `universe` = '.$UNI.'  ORDER BY '.$Order .' '.$sort.' LIMIT '.$INI .','.$lim.';';

                $query = $GLOBALS['DATABASE']->query($stats_sql);

                $SellRes	= array();

                //while ($AdminRow = $GLOBALS['DATABASE']->fetch_array($query))
				while($AdminRow = $query->fetch_assoc())
                {
                    $SellRes[]	= array(
                                    'id'	   => $AdminRow['id'],		
			                        'user'	   => $AdminRow['user'],
									'type'     => $AdminRow['type'],
									'sender'   => $AdminRow['sender'],
			                        'universe' => $AdminRow['universe'],
			                        'metala'   => pretty_number($AdminRow['metala']),
			                        'cristala' => pretty_number($AdminRow['cristala']),
			                        'deuta'    => pretty_number($AdminRow['deuta']),
			                        'metals'   => pretty_number($AdminRow['metals']),
			                        'cristals' => pretty_number($AdminRow['cristals']),
			                        'deuts'    => pretty_number($AdminRow['deuts']),
			                        'galaxy'   => $AdminRow['galaxie'],
			                        'system'   => $AdminRow['systeme'],
			                        'planet'   => $AdminRow['planete'],
			                        'users'    => $USER['username'],
			                        //'buddyid'  => $AdminRow['buddyid'],
			                        'idlot'    => $AdminRow['id'],
									'times'    => $AdminRow['type'] + (86400+86400+86400), // time lot 86400=1 day
		                            'timelot'  => TIMESTAMP,
									'timeout'  => pretty_time((86400+86400+86400) - (TIMESTAMP - $AdminRow['type'])),
									//'timesno'   => $timesno,
                    );
					//$times      = $AdminRow['type'] + (86400+86400+86400); // time lot  86400=1 day
		            //$timelot    = TIMESTAMP;
					
					
					       $Element = $AdminRow['id'];
                            $this->tplObj->execscript("GetOfficerTime(".$Element.", ".((86400+86400+86400) - (TIMESTAMP - $AdminRow['type'])).");");	
							$times      = $AdminRow['type'] + (86400+86400+86400); // time lot  86400=1 day
		                    $timelot    = TIMESTAMP;
							$bid2 = $AdminRow['id']++;
							
							if ($timelot >= $times)
							{
							$NewUser = $AdminRow['sender'];
							$GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET 
							metal = `metal` + '".$AdminRow['metala']."', 
							crystal = `crystal` + '". $AdminRow['cristala'] ."', 
							deuterium = `deuterium` + '". $AdminRow['deuta'] ."' 
							WHERE id=".$AdminRow['senderplanet'].";DELETE FROM ".MARKETALLY." WHERE id= ".$bid2.";");
				            $message 	= sprintf($LNG['an_mesexit']);
				            SendSimpleMessage($NewUser, 1, TIMESTAMP, 1, $LNG['an_anres'], $LNG['an_anres'], $message);						
							}
					///////////////----------------///////////////-------------///////////////
					if ($action == 'dell') {
						$id	= HTTP::_GP('id', 0);
						$markdell	= $GLOBALS['DATABASE']->getFirstRow("SELECT `id` as buddyid, `user`, `sender`, `senderplanet`, `universe`, `galaxie`, `systeme`, `planete`, `metala`, `cristala`, `deuta`, `metals`, `cristals`, `deuts` FROM ".MARKETALLY." WHERE `id` = '".$id."' ;");
						$markdell['metala'] *= 0.8;
						$markdell['cristala'] *= 0.8;
						$markdell['deuta'] *= 0.8;
						$PLANET[$resource[901]]	+= $markdell['metala'];
						$PLANET[$resource[902]]	+= $markdell['cristala'];
						$PLANET[$resource[903]]	+= $markdell['deuta'];
						$GLOBALS['DATABASE']->query("DELETE FROM ".MARKETALLY."  WHERE `id`='".$id."';");
						$this->printMessage( ''.$LNG['Metal'].': <font color=lime>'. $markdell['metala'] .'</font> '.$LNG['Crystal'].':  <font color=lime>'. $markdell['cristala'] .'</font> '.$LNG['Deuterium'].':<font color=lime> '. $markdell['deuta'].'</font> ', 'game.php?page=market' );
					}
					if($action == 'buyy'){
					$id	= HTTP::_GP('id', 0);
					$markbuy	= $GLOBALS['DATABASE']->getFirstRow("SELECT `id` as buddyid, `user`, `sender`, `senderplanet`, `universe`, `galaxie`, `systeme`, `planete`, `metala`, `cristala`, `deuta`, `metals`, `cristals`, `deuts` FROM ".MARKETALLY." WHERE `id` = '".$id."' ;");
					     if($markbuy['metals'] > $PLANET[$resource[901]]){
		                  $this->printMessage($LNG['tr_not_enought_metal'],'game.php?page=market');}
					     elseif($markbuy['cristals'] > $PLANET[$resource[902]]){
		                  $this->printMessage($LNG['tr_not_enought_crystal'],'game.php?page=market');}
						 elseif($markbuy['deuts'] > $PLANET[$resource[903]]){
		                  $this->printMessage($LNG['tr_not_enought_deuterium'],'game.php?page=market');}
						  $NewUser = $markbuy['sender'];
						  //$TIME  = pretty_time(TIMESTAMP);
						  $PLANET[$resource[901]]	+= $markbuy['metala'];
                          $PLANET[$resource[902]]	+= $markbuy['cristala'];
                          $PLANET[$resource[903]]	+= $markbuy['deuta'];
						  $PLANET[$resource[901]]	-= $markbuy['metals'];
                          $PLANET[$resource[902]]	-= $markbuy['cristals'];
                          $PLANET[$resource[903]]	-= $markbuy['deuts'];
					      $GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET 
						  metal = `metal` + '".$markbuy['metals']."', 
						  crystal = `crystal` + '".$markbuy['cristals']."', 
						  deuterium = `deuterium` + '".$markbuy['deuts']."' 
						  WHERE id=".$markbuy['senderplanet'].";DELETE FROM ".MARKETALLY."  WHERE id =".$id.";");
						  
						  $message 	= sprintf($LNG['an_mes'], $USER['username'] , pretty_number($markbuy['metala']) , pretty_number($markbuy['cristala']) , pretty_number($markbuy['deuta']) , pretty_number($markbuy['metals']) , pretty_number($markbuy['cristals']) , pretty_number($markbuy['deuts']));
						  SendSimpleMessage($NewUser, 1, TIMESTAMP, 1, $LNG['an_anres'], $LNG['an_anres'], $message);
						 $this->printMessage( ''.$LNG['Metal'].': <font color=lime>'.pretty_number($markbuy['metala']).'</font>  '.$LNG['Crystal'].':  <font color=lime>'.pretty_number($markbuy['cristala']).'</font>  '.$LNG['Deuterium'].':<font color=lime> '.pretty_number($markbuy['deuta']).'</font> ', 'game.php?page=market' );
					}
				}
				$GLOBALS['DATABASE']->free_result($query);
				}
				//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            break;
			
			
		}
		
		
		

		$Selector['who'] 	= array(1 => $LNG['an_full'], 2 => $LNG['an_ally']);
		$Selector['type']	= array(1 => $LNG['sort_lot'], 2 => $LNG['sort_name'], 3 => $LNG['sort_Metal'], 4 => $LNG['sort_Crystal'], 5 => $LNG['sort_Deuterium'], 6 => $LNG['sort_pMetal'], 7 => $LNG['sort_pCrystal'], 8 => $LNG['sort_pDeuterium']);
	
		$univer    = $PLANET['universe'];
				
	   $this->tplObj->assign_vars(array(
	        'whos'                  => $whos,
		    'orderby'				=> $orderby,
		    'sort'					=> $sort,
		    'imageq'				=> $imageq,
		    
		    'tmpi'					=> $tmpi,
		    
		    'PAGES'					=> $Search['PAGES'],
		    'st_members'			=> $LNG['st_members'],
		    'st_per_member'			=> $LNG['st_per_member'],
		    'st_position'			=> $LNG['st_position'],
		    'st_player'				=> $LNG['st_player'],
		    'st_alliance'			=> $LNG['st_alliance'],
		    'st_write_message'		=> $LNG['st_write_message'],
		    'st_points'				=> $LNG['st_points'],
		    'st_per'				=> $LNG['st_per'],
		    'st_statistics'			=> $LNG['st_statistics'],
		    'st_updated'			=> $LNG['st_updated'],
		    'st_show'				=> $LNG['st_show'],
		    'st_in_the_positions'	=> $LNG['st_in_the_positions'],
		    'Selectors'				=> $Selector,
            'who'					=> $who,
            'type'					=> $type,
            'range'					=> floor(($range - 1) / 100) * 100 + 1,
            'RangeList'				=> $SellRes,
            'CUser_ally'			=> $USER['ally_id'],
            'CUser_id'				=> $USER['id'],
            'stat_date'				=> _date($LNG['php_tdformat'], Config::get('stat_last_update'), $USER['timezone']),
			'who'					=> $who,
			'who'					=> $who,
			'SellRes'		        => $SellRes,
			'univer'                => $univer,
			));
		$this->display("page.market.default.tpl");	
    }
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function in()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF, $reslist, $resource;
		$fmenge = isset($_POST['fmenge']) ? $_POST['fmenge'] : array();
                $action = HTTP::_GP('action', '');
                                                                
                $NotBuilding = true;
		
		$action     	    = HTTP::_GP('action', '');
		
	
	if ($action == 'in') {
	
        
		$metallin 				= max(0, round(HTTP::_GP('metallinn', 0.0)));
		$kristallin				= max(0, round(HTTP::_GP('kristallinn', 0.0)));
		$deyterin				= max(0, round(HTTP::_GP('deyterinn', 0.0)));
		$metallout 				= max(0, round(HTTP::_GP('metalloutt', 0.0)));
		$kristallout			= max(0, round(HTTP::_GP('kristalloutt', 0.0)));
		$deyterout				= max(0, round(HTTP::_GP('deyteroutt', 0.0)));
		
		$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS trade_count FROM ".MARKET." WHERE `sender` = '". $USER['id'] ."';");
		$trade_count = $query['trade_count'];
		
		if($metallin < '0'){
			$this->printMessage($LNG['an_cheat'], 'game.php?page=market');
		}
		elseif($kristallin < '0'){
			$this->printMessage($LNG['an_cheat'], 'game.php?page=market');
		}
		elseif($deyterin < '0'){
			$this->printMessage($LNG['an_cheat'], 'game.php?page=market');
		}
		elseif($metallin == '0' && $kristallin == '0' && $deyterin == '0'){
			$this->printMessage($LNG['an_nonuulres'], 'game.php?page=market');
		}
		elseif($metallin == $metallout && $kristallin == $kristallout && $deyterin == $deyterout){
			$this->printMessage($LNG['an_not'], 'game.php?page=market');
		}
		elseif($metallout == '0' && $kristallout == '0' && $deyterout == '0'){
			$this->printMessage($LNG['an_nuulres'],'game.php?page=market');
		}
		elseif($metallin > $PLANET['metal']){
			$this->printMessage($LNG['an_notres'],'game.php?page=market');
		}
		elseif($kristallin > $PLANET['crystal']){
			$this->printMessage($LNG['an_notres'],'game.php?page=market');
		}
		elseif($deyterin > $PLANET['deuterium']){
			$this->printMessage($LNG['an_notres'],'game.php?page=market');
		}	
		elseif($metallin + $kristallin + $deyterin > 5 * ($metallout + $kristallout + $deyterout)){
			$this->printMessage($LNG['an_notrange'],'game.php?page=market');
		}
		elseif($metallin + $kristallin + $deyterin < ($metallout + $kristallout + $deyterout) / 5){
			$this->printMessage($LNG['an_notrange'],'game.php?page=market');
		}	
		elseif($trade_count > 2){
			$this->printMessage($LNG['an_outlimit'],'game.php?page=market');
		}
		else{
		     $PLANET[$resource[901]]	-= $metallin;
             $PLANET[$resource[902]]	-= $kristallin;
             $PLANET[$resource[903]]	-= $deyterin; 
			 
		     $GLOBALS['DATABASE']->query("INSERT INTO ".MARKET." SET
		                                       `sender` = '".$USER['id']."',
		                                       `senderplanet` = '".$PLANET['id']."',
		                                       `user` = '".$USER['username']."',
											   `type` = '".TIMESTAMP. "',
											   `typeres` = '1',
		                                       `metala` = `metala` + '". $metallin ."',
											   `metals` = `metals` + '". $metallout ."',
											   `cristala` = `cristala` + '". $kristallin ."',
											   `cristals` = `cristals` + '". $kristallout ."',
											   `deuta` = `deuta` + '". $deyterin ."',
											   `deuts` = `deuts` + '". $deyterout ."',
                                               `universe` ='".$PLANET['universe']."',
											   `galaxie`  ='".$PLANET['galaxy']."',
											   `systeme`  ='".$PLANET['system']."',
											   `planete`  ='".$PLANET['planet']."';");
		 
				$this->printMessage( ''.$LNG['an_postsuccess'].'', 'game.php?page=market' );
		    }

		
		}
	if ($action == 'inally') {
	
        
		$metallin 				= max(0, round(HTTP::_GP('metallinn', 0.0)));
		$kristallin				= max(0, round(HTTP::_GP('kristallinn', 0.0)));
		$deyterin				= max(0, round(HTTP::_GP('deyterinn', 0.0)));
		$metallout 				= max(0, round(HTTP::_GP('metalloutt', 0.0)));
		$kristallout			= max(0, round(HTTP::_GP('kristalloutt', 0.0)));
		$deyterout				= max(0, round(HTTP::_GP('deyteroutt', 0.0)));
		
		$query = $GLOBALS['DATABASE']->getFirstRow("SELECT count(*) AS trade_count FROM ".MARKETALLY." WHERE `sender` = '". $USER['id'] ."';");
		$trade_count = $query['trade_count'];
		
		if($metallin < '0'){
			$this->printMessage($LNG['an_cheat'], 'game.php?page=market');
		}
		elseif($kristallin < '0'){
			$this->printMessage($LNG['an_cheat'], 'game.php?page=market');
		}
		elseif($deyterin < '0'){
			$this->printMessage($LNG['an_cheat'], 'game.php?page=market');
		}
		elseif($metallin == '0' && $kristallin == '0' && $deyterin == '0'){
			$this->printMessage($LNG['an_nonuulres'], 'game.php?page=market');
		}
		elseif($metallin == $metallout && $kristallin == $kristallout && $deyterin == $deyterout){
			$this->printMessage($LNG['an_not'], 'game.php?page=market');
		}
		elseif($metallout == '0' && $kristallout == '0' && $deyterout == '0'){
			$this->printMessage($LNG['an_nuulres'],'game.php?page=market');
		}
		elseif($metallin > $PLANET['metal']){
			$this->printMessage($LNG['an_notres'],'game.php?page=market');
		}
		elseif($kristallin > $PLANET['crystal']){
			$this->printMessage($LNG['an_notres'],'game.php?page=market');
		}
		elseif($deyterin > $PLANET['deuterium']){
			$this->printMessage($LNG['an_notres'],'game.php?page=market');
		}		
		elseif($metallin + $kristallin + $deyterin > 5 * ($metallout + $kristallout + $deyterout)){
			$this->printMessage($LNG['an_notrange'],'game.php?page=market');
		}
		elseif($metallin + $kristallin + $deyterin < ($metallout + $kristallout + $deyterout) / 5){
			$this->printMessage($LNG['an_notrange'],'game.php?page=market');
		}	
		elseif($trade_count > 2){
			$this->printMessage($LNG['an_outlimit'],'game.php?page=market');
		}
		else{
		     $PLANET[$resource[901]]	-= $metallin;
             $PLANET[$resource[902]]	-= $kristallin;
             $PLANET[$resource[903]]	-= $deyterin;
			 
		     $GLOBALS['DATABASE']->query("INSERT INTO ".MARKETALLY." SET
		                                       `sender` = '".$USER['id']."',
											   `idally` = '".$USER['ally_id']."',
		                                       `senderplanet` = '".$PLANET['id']."',
		                                       `user` = '".$USER['username']."',
											   `type` = '".TIMESTAMP. "',
											   `typeres` = '1',
		                                       `metala` = `metala` + '". $metallin ."',
											   `metals` = `metals` + '". $metallout ."',
											   `cristala` = `cristala` + '". $kristallin ."',
											   `cristals` = `cristals` + '". $kristallout ."',
											   `deuta` = `deuta` + '". $deyterin ."',
											   `deuts` = `deuts` + '". $deyterout ."',
                                               `universe` ='".$PLANET['universe']."',
											   `galaxie`  ='".$PLANET['galaxy']."',
											   `systeme`  ='".$PLANET['system']."',
											   `planete`  ='".$PLANET['planet']."';");
		 
				$this->printMessage( ''.$LNG['an_postsuccess'].'', 'game.php?page=market' );
		    }

		
		}



	
				
	    $this->tplObj->assign_vars(array(
		    'userallyid'     => $USER['ally_id'],
			'resources'     => $LNG['gl_resources'],			
			'an_sellres'    => $LNG['an_sellres'],
			'an_buyres'     => $LNG['an_buyres'],			
			'an_action'     => $LNG['an_action'],			
			'an_expose'     => $LNG['an_expose'],
			'an_Metal'      => $LNG['Metal'],
			'an_Crystal'    => $LNG['Crystal'],			
			'an_Deuterium'  => $LNG['Deuterium'],
			));
		$this->display('page.marketsel.default.tpl');
	}
	
	
}