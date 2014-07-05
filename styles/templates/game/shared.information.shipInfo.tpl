<div style="display:table;padding:2px;border-radius:5px;border:1px solid #999;margin: 0 auto;width:98%;">
<table style="border-collapse: collapse; width:100%;">
	<tbody>
		<tr>
			<td style="width:50%">{$LNG.in_struct_pt}: {$FleetInfo.structure|number} (<span style="color:#00ff00">{$FleetInfo.curstructure|number}</span>)</td>
			<td style="width:50%">{$LNG.in_attack_pt}: {$FleetInfo.attack|number} (<span style="color:#00ff00">{$FleetInfo.curattack|number}</span>)</td>
		</tr>
		<tr>
			<td style="width:50%">{$LNG.in_shield_pt}: {$FleetInfo.shield|number} (<span style="color:#00ff00">{$FleetInfo.curshield|number}</span>)</td>
			<td style="width:50%">{if !empty($FleetInfo.capacity)}{$LNG.in_capacity}: {$FleetInfo.capacity|number}{/if}</td>
		</tr>
		{if !empty($FleetInfo.speed1)}
		<tr>
			<td style="width:50%">{$LNG.in_base_speed}: {$FleetInfo.speed1|number} (<span style="color:#00ff00">{$FleetInfo.curspeed|number}</span>)</td>
			<td style="width:50%">{$LNG.in_consumption}: {$FleetInfo.consumption1|number} {if $FleetInfo.consumption1 != $FleetInfo.consumption2} <span style="color:yellow">({$FleetInfo.consumption2|number})</span>{/if}</td>
		</tr>
		{/if}
	</tbody>
</table>
</div>