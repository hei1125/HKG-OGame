{block name="title" prepend}{$LNG.achievements_name}{/block}
{block name="content"}
<script type="text/javascript" src="scripts/jQuery.js?v=1829"></script>
 
<table><tr><th class=kategorie colspan="3">{$LNG.achievements_badges}</th></tr></table>
<table>
<tr>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_mines}<p>{$LNG.achievements_t}<font color=yellow>{$mines_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$mines_req}</font> {$LNG.achievements_t2}</b>">{$mines_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_tech}<p>{$LNG.achievements_t}<font color=yellow>{$tech_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$tech_req}</font> {$LNG.achievements_t2}</b>">{$tech_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_engine}<p>{$LNG.achievements_t}<font color=yellow>{$engine_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$engine_req}</font> {$LNG.achievements_t2}</b>">{$engine_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_colonization}<p>{$LNG.achievements_t}<font color=yellow>{$colonization_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$colonization_req}</font> {$LNG.achievements_t2}</b>">{$colonization_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_moon}<p>{$LNG.achievements_t}<font color=yellow>{$moon_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$moon_req}</font> {$LNG.achievements_t2}</b>">{$moon_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_war}<p>{$LNG.achievements_t}<font color=yellow>{$war_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$war_req}</font> {$LNG.achievements_t2}</b>">{$war_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_destroy}<p>{$LNG.achievements_t}<font color=yellow>{$destroy_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$destroy_req}</font> {$LNG.achievements_t2}</b>">{$destroy_badge}</a></td>
</tr>
<tr>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_time}<p>{$LNG.achievements_t}<font color=yellow>{$time_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$time_req}</font> {$LNG.achievements_t2}</b>">{$time_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_hof}<p>{$LNG.achievements_t}<font color=yellow>{$hof_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$hof_req}</font> {$LNG.achievements_t2}</b>">{$hof_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_community}<p>{$LNG.achievements_t}<font color=yellow>{$community_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$community_req}</font> {$LNG.achievements_t2}</b>">{$community_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_fleet}<p>{$LNG.achievements_t}<font color=yellow>{$fleet_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$fleet_req}</font> {$LNG.achievements_t2}</b>">{$fleet_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_darkmatter}<p>{$LNG.achievements_t}<font color=yellow>{$darkmatter_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$darkmatter_req}</font> {$LNG.achievements_t2}</b>">{$darkmatter_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_planet}<p>{$LNG.achievements_t}<font color=yellow>{$planet_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$planet_req}</font> {$LNG.achievements_t2}</b>">{$planet_badge}</a></td>
<td colspan=4><a class="tooltip" href="#"  data-tooltip-content="<b>{$LNG.achievements_lab}<p>{$LNG.achievements_t}<font color=yellow>{$lab_amount}</font> {$LNG.achievements_t2}<br>{$LNG.achievements_t3}<font color=yellow>{$lab_req}</font> {$LNG.achievements_t2}</b>">{$lab_badge}</a></td>
</tr>
</table>

<table>
<tr>
<th class=kategorie colspan=3>{$LNG.achievements_name}</th>
</tr>

<tr><td><b><p align=left>
{$LNG.achievements_description}<br><br>
{$LNG.achievements_complete1}<br><br>
{$LNG.achievements_complete2} <font color=yellow>{$amount}</font></p></b></td></tr>


<Mines Start>
<tr>	
<td>
<a class="link" onclick="$('#mines').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$mines_title} </b></a>
<p align=right><b>{$LNG.achievements_t4}{$mines_amount} {$LNG.achievements_t2}&nbsp </b>
<div id="mines" style="display: none;">
<table style="width:100%">
<tr>

<b>{$LNG.achievements_mines_text1} <font color=yellow>{$mines_req1}</font> {$LNG.achievements_mines_text2} <font color=yellow>{$mines_req2}</font> {$LNG.achievements_mines_text3} <font color=yellow>{$mines_req3}</font></b><br><br>
<b>{$LNG.achievements_mines_text4} <font color=yellow>{$mines_max_req1}</font> {$LNG.achievements_mines_text5} <font color=yellow>{$mines_max_req2}</font> {$LNG.achievements_mines_text6} <font color=yellow>{$mines_max_req3}</font></b><br><br>

<td width="80">
{$mines1_img}</td>
<td><b><p align=left>{$mines1_title}</p>{$LNG.achievements_mines1_desc}</b><p>
<b>{$mines1_req1} {$mines1_req2} {$mines1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$mines2_img}</td>
<td><b><p align=left>{$mines2_title}</p>{$LNG.achievements_mines2_desc}</b><p>
<b>{$mines2_req1} {$mines2_req2} {$mines2_req3}</b></td>
</tr>

<tr>
<td width="80">
{$mines3_img}</td>
<td><b><p align=left>{$mines3_title}</p>{$LNG.achievements_mines3_desc}</b><p>
<b>{$mines3_req1} {$mines3_req2} {$mines3_req3}</b></td>
</tr>

<tr>
<td width="80">
{$mines4_img}</td>
<td><b><p align=left>{$mines4_title}</p>{$LNG.achievements_mines4_desc}</b><p>
<b>{$mines4_req1} {$mines4_req2} {$mines4_req3}</b></td>
</tr>

</table>
</div>
<Mines End>

<Tech Start>
<tr>	
<td>
<a class="link" onclick="$('#tech').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$tech_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$tech_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="tech" style="display: none;">
<table style="width:100%">
<tr>

<b>{$LNG.achievements_tech_text1} <font color=yellow>{$tech_req1}</font> {$LNG.achievements_tech_text2} <font color=yellow>{$tech_req2}</font> {$LNG.achievements_tech_text3} <font color=yellow>{$tech_req3}</font></b><br><br>

<td width="80">
{$tech1_img}</td>
<td><b><p align=left>{$tech1_title}</p>{$LNG.achievements_tech1_desc}</b><p>
<b>{$tech1_req1} {$tech1_req2} {$tech1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$tech2_img}</td>
<td><b><p align=left>{$tech2_title}</p>{$LNG.achievements_tech2_desc}</b><p>
<b>{$tech2_req1} {$tech2_req2} {$tech2_req3}</b></td>
</tr>

<tr>
<td width="80">
{$tech3_img}</td>
<td><b><p align=left>{$tech3_title}</p>{$LNG.achievements_tech3_desc}</b><p>
<b>{$tech3_req1} {$tech3_req2} {$tech3_req3}</b></td>
</tr>

<tr>
<td width="80">
{$tech4_img}</td>
<td><b><p align=left>{$tech4_title}</p>{$LNG.achievements_tech4_desc}</b><p>
<b>{$tech4_req1} {$tech4_req2} {$tech4_req3}</b></td>
</tr>

</table>
</div>
<Tech End>

<Engine Start>
<tr>	
<td>
<a class="link" onclick="$('#engine').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$engine_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$engine_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="engine" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_engine_text1} <font color=yellow>{$engine_req1}</font> {$LNG.achievements_engine_text2} <font color=yellow>{$engine_req2}</font> {$LNG.achievements_engine_text3} <font color=yellow>{$engine_req3}</font></b><br><br>

<tr>
<td width="80">
{$engine1_img}</td>
<td><b><p align=left>{$engine1_title}</p>{$LNG.achievements_engine1_desc}</b><p>
<b>{$engine1_req1} {$engine1_req2} {$engine1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$engine2_img}</td>
<td><b><p align=left>{$engine2_title}</p>{$LNG.achievements_engine2_desc}</b><p>
<b>{$engine2_req1} {$engine2_req2} {$engine2_req3}</b></td>
</tr>

<tr>
<td width="80">
{$engine3_img}</td>
<td><b><p align=left>{$engine3_title}</p>{$LNG.achievements_engine3_desc}</b><p>
<b>{$engine3_req1} {$engine3_req2} {$engine3_req3}</b></td>
</tr>

<tr>
<td width="80">
{$engine4_img}</td>
<td><b><p align=left>{$engine4_title}</p>{$LNG.achievements_engine4_desc}</b><p>
<b>{$engine4_req1} {$engine4_req2} {$engine4_req3}</b></td>
</tr>

</table>
</div>
<Engine End>

<Colonization Start>
<tr>	
<td>
<a class="link" onclick="$('#colonization').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$colonization_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$colonization_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="colonization" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_colonization_text1} <font color=yellow>{$colonization_req1}</font> {$LNG.achievements_colonization_text2}</b><br><br>

<tr>
<td width="80">
{$colonization1_img}</td>
<td><b><p align=left>{$colonization1_title}</p>{$LNG.achievements_colonization1_desc}</b><p>
<b>{$colonization1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$colonization2_img}</td>
<td><b><p align=left>{$colonization2_title}</p>{$LNG.achievements_colonization2_desc}</b><p>
<b>{$colonization2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$colonization3_img}</td>
<td><b><p align=left>{$colonization3_title}</p>{$LNG.achievements_colonization3_desc}</b><p>
<b>{$colonization3_req1}</b></td>
</tr>

</table>
</div>
<Colonization End>

<Moon Start>
<tr>	
<td>
<a class="link" onclick="$('#moon').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$moon_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$moon_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="moon" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_moon_text1} <font color=yellow>{$moon_req1}</font> {$LNG.achievements_moon_text2}</b><br><br>

<tr>
<td width="80">
{$moon1_img}</td>
<td><b><p align=left>{$moon1_title}</p>{$LNG.achievements_moon1_desc}</b><p>
<b>{$moon1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$moon2_img}</td>
<td><b><p align=left>{$moon2_title}</p>{$LNG.achievements_moon2_desc}</b><p>
<b>{$moon2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$moon3_img}</td>
<td><b><p align=left>{$moon3_title}</p>{$LNG.achievements_moon3_desc}</b><p>
<b>{$moon3_req1}</b></td>
</tr>

</table>
</div>
<Moon End>

<War Start>
<tr>	
<td>
<a class="link" onclick="$('#war').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$war_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$war_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="war" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_war_text1} <font color=yellow>{$war_req1}</font> {$LNG.achievements_war_text2} <font color=yellow>{$war_req2}</font> {$LNG.achievements_war_text3}</b><br><br>

<tr>
<td width="80">
{$war1_img}</td>
<td><b><p align=left>{$war1_title}</p>{$LNG.achievements_war1_desc}</b><p>
<b>{$war1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$war2_img}</td>
<td><b><p align=left>{$war2_title}</p>{$LNG.achievements_war2_desc}</b><p>
<b>{$war2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$war3_img}</td>
<td><b><p align=left>{$war3_title}</p>{$LNG.achievements_war3_desc}</b><p>
<b>{$war3_req1}</b></td>
</tr>

</table>
</div>
<War End>

<Destroy Start>
<tr>	
<td>
<a class="link" onclick="$('#destroy').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$destroy_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$destroy_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="destroy" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_destroy_text1} <font color=yellow>{$destroy_req1}</font> {$LNG.achievements_destroy_text2} <font color=yellow>{$destroy_req2}</font> {$LNG.achievements_destroy_text3}</b><br><br>

<tr>
<td width="80">
{$destroy1_img}</td>
<td><b><p align=left>{$destroy1_title}</p>{$LNG.achievements_destroy1_desc}</b><p>
<b>{$destroy1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$destroy2_img}</td>
<td><b><p align=left>{$destroy2_title}</p>{$LNG.achievements_destroy2_desc}</b><p>
<b>{$destroy2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$destroy3_img}</td>
<td><b><p align=left>{$destroy3_title}</p>{$LNG.achievements_destroy3_desc}</b><p>
<b>{$destroy3_req1}</b></td>
</tr>

<tr>
<td width="80">
{$destroy4_img}</td>
<td><b><p align=left>{$destroy4_title}</p>{$LNG.achievements_destroy4_desc}</b><p>
<b>{$destroy4_req1}</b></td>
</tr>

</table>
</div>
<Destroy End>

<Time Start>
<tr>	
<td>
<a class="link" onclick="$('#time').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$time_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$time_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="time" style="display: none;">
<table style="width:100%">

<b>{$time_tech}<br><br>{$time_build}<br><br>{$time_hangar}</b><br><br>

<tr>
<td width="80">
{$time1_img}</td>
<td><b><p align=left>{$time1_title}</p>{$LNG.achievements_time1_desc}</b><p>
<b>{$time1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$time2_img}</td>
<td><b><p align=left>{$time2_title}</p>{$LNG.achievements_time2_desc}</b><p>
<b>{$time2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$time3_img}</td>
<td><b><p align=left>{$time3_title}</p>{$LNG.achievements_time3_desc}</b><p>
<b>{$time3_req1}</b></td>
</tr>

</table>
</div>
<time End>

<Hall of Fame Start>
<tr>	
<td>
<a class="link" onclick="$('#hof').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$hof_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$hof_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="hof" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_hof_text1} <font color=yellow>{$hof_req1}</font> {$LNG.achievements_hof_text2}</b><br><br>

<tr>
<td width="80">
{$hof1_img}</td>
<td><b><p align=left>{$hof1_title}</p>{$LNG.achievements_hof1_desc}</b><p>
<b>{$hof1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$hof2_img}</td>
<td><b><p align=left>{$hof2_title}</p>{$LNG.achievements_hof2_desc}</b><p>
<b>{$hof2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$hof3_img}</td>
<td><b><p align=left>{$hof3_title}</p>{$LNG.achievements_hof3_desc}</b><p>
<b>{$hof3_req1}</b></td>
</tr>

<tr>
<td width="80">
{$hof4_img}</td>
<td><b><p align=left>{$hof4_title}</p>{$LNG.achievements_hof4_desc}</b><p>
<b>{$hof4_req1}</b></td>
</tr>

</table>
</div>
<Hall of Fame End>

<Community Start>
<tr>	
<td>
<a class="link" onclick="$('#community').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$community_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$community_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="community" style="display: none;">
<table style="width:100%">

<b></b><br><br>

<tr>
<td width="80">
{$community1_img}</td>
<td><b><p align=left>{$community1_title}</p>{$LNG.achievements_community1_desc}</b><p>
<b>{$community1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$community2_img}</td>
<td><b><p align=left>{$community2_title}</p>{$LNG.achievements_community2_desc}</b><p>
<b>{$community2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$community3_img}</td>
<td><b><p align=left>{$community3_title}</p>{$LNG.achievements_community3_desc}</b><p>
<b>{$community3_req1}</b></td>
</tr>

</table>
</div>
<Community End>

<Fleet Start>
<tr>	
<td>
<a class="link" onclick="$('#fleet').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$fleet_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$fleet_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="fleet" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_fleet_text1} <font color=yellow>{$fleet_req1}</font> {$LNG.achievements_fleet_text2}</b><br><br>

<tr>
<td width="80">
{$fleet1_img}</td>
<td><b><p align=left>{$fleet1_title}</p>{$LNG.achievements_fleet1_desc}</b><p>
<b>{$fleet1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$fleet2_img}</td>
<td><b><p align=left>{$fleet2_title}</p>{$LNG.achievements_fleet2_desc}</b><p>
<b>{$fleet2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$fleet3_img}</td>
<td><b><p align=left>{$fleet3_title}</p>{$LNG.achievements_fleet3_desc}</b><p>
<b>{$fleet3_req1}</b></td>
</tr>

<tr>
<td width="80">
{$fleet4_img}</td>
<td><b><p align=left>{$fleet4_title}</p>{$LNG.achievements_fleet4_desc}</b><p>
<b>{$fleet4_req1}</b></td>
</tr>

</table>
</div>
<Fleet End>

<Darkmatter Start>
<tr>	
<td>
<a class="link" onclick="$('#darkmatter').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$darkmatter_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$darkmatter_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="darkmatter" style="display: none;">
<table style="width:100%">

<b>{$LNG.achievements_darkmatter_text1} <font color=yellow>{$darkmatter_req1}</font> {$LNG.achievements_darkmatter_text2}</b><br><br>

<tr>
<td width="80">
{$darkmatter1_img}</td>
<td><b><p align=left>{$darkmatter1_title}</p>{$LNG.achievements_darkmatter1_desc}</b><p>
<b>{$darkmatter1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$darkmatter2_img}</td>
<td><b><p align=left>{$darkmatter2_title}</p>{$LNG.achievements_darkmatter2_desc}</b><p>
<b>{$darkmatter2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$darkmatter3_img}</td>
<td><b><p align=left>{$darkmatter3_title}</p>{$LNG.achievements_darkmatter3_desc}</b><p>
<b>{$darkmatter3_req1}</b></td>
</tr>

<tr>
<td width="80">
{$darkmatter4_img}</td>
<td><b><p align=left>{$darkmatter4_title}</p>{$LNG.achievements_darkmatter4_desc}</b><p>
<b>{$darkmatter4_req1}</b></td>
</tr>

</table>
</div>
<Darkmatter End>

<Planet Start>
<tr>	
<td>
<a class="link" onclick="$('#planet').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$planet_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$planet_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="planet" style="display: none;">
<table style="width:100%">

<tr>
<td width="80">
{$planet1_img}</td>
<td><b><p align=left>{$planet1_title}</p>{$LNG.achievements_planet1_desc}</b><p>
<b>{$planet1_req1}</b></td>
</tr>

<tr>
<td width="80">
{$planet2_img}</td>
<td><b><p align=left>{$planet2_title}</p>{$LNG.achievements_planet2_desc}</b><p>
<b>{$planet2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$planet3_img}</td>
<td><b><p align=left>{$planet3_title}</p>{$LNG.achievements_planet3_desc}</b><p>
<b>{$planet3_req1}</b></td>
</tr>

<tr>
<td width="80">
{$planet4_img}</td>
<td><b><p align=left>{$planet4_title}</p>{$LNG.achievements_planet4_desc}</b><p>
<b>{$planet4_req1}</b></td>
</tr>

</table>
</div>
<Planet End>

<Lab Start>
<tr>	
<td>
<a class="link" onclick="$('#lab').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$lab_title}</b></a>
<p align=right><b>{$LNG.achievements_t4}{$lab_amount} {$LNG.achievements_t2}&nbsp </b></a>
<div id="lab" style="display: none;">
<table style="width:100%">

<tr>
<td width="80">
{$lab1_img}</td>
<td><b><p align=left>{$lab1_title}</p>{$LNG.achievements_lab1_desc}</b><p>
<b>{$lab1_req1}</b> <b>{$lab1_req2}</b> <b>{$lab1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$lab2_img}</td>
<td><b><p align=left>{$lab2_title}</p>{$LNG.achievements_lab2_desc}</b><p>
<b>{$lab2_req1}</b></td>
</tr>

<tr>
<td width="80">
{$lab3_img}</td>
<td><b><p align=left>{$lab3_title}</p>{$LNG.achievements_lab3_desc}</b><p>
<b>{$lab3_req1}</b></td>
</tr>

<tr>
<td width="80">
{$lab4_img}</td>
<td><b><p align=left>{$lab4_title}</p>{$LNG.achievements_lab4_desc}</b><p>
<b>{$lab4_req1}</b></td>
</tr>

</table>
</div>
<Lab End>

</table>
</div>

{/block}