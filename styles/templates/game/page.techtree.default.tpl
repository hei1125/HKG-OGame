{block name="title" prepend}{$LNG.lm_technology}{/block}
{block name="content"}


<table>
        <tr>
            <td><a href="game.php?page=techtree&mode=build">{$LNG.lm_buildings}</a></td>
            <td><a href="game.php?page=techtree&mode=tech">{$LNG.lm_research}</a></td>
            <td><a href="game.php?page=techtree&mode=officier">{$LNG.lm_officiers}</a></td>
        </tr>
        <tr>
            <td><a href="game.php?page=techtree&mode=fleet">{$LNG.lm_fleet}</a></td>
            <td><a href="game.php?page=techtree&mode=defense">{$LNG.lm_defenses}</a></td>
            <td><a href="game.php?page=techtree">{$LNG.ma_all}</a></td>
        </tr>
</table>

<table style="min-width:600px;width:600px;">

{foreach $TechTreeList as $elementID => $requireList}
{if !is_array($requireList)}

<tr>
	<th colspan="2">{$LNG.tech.$requireList}</th>
	<th>{$LNG.tt_requirements}</th>
</tr>

{else}

<tr>
	<td><a href="#" onclick="return Dialog.info({$elementID})">
	<img src="{$dpath}gebaeude/{$elementID}
	.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}" width="100" height="100"></a>
	</td>

	<td>
	<a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a>
	</td>

	<td>
	{if $requireList}
		{foreach $requireList as $requireID => $NeedLevel}
			<a href="#" onclick="return Dialog.info({$elementID})">
			<span style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};
			">{$LNG.tech.$requireID} ({$LNG.tt_lvl} {min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span></a>
			{if !$NeedLevel@last}<br>{/if}
		{/foreach}
	{/if}
	</td>

</tr>
{/if}
{/foreach}

</table>

{/block}