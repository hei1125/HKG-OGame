{block name="title" prepend}{$LNG.lm_moonbuy}{/block}
{block name="content"}
<tr><td><div style="border:1px solid white; background-color:#1C1F23; width:530px; margin-left:200px; border-radius: 5px;"></td></tr>

<table>
<tbody>

			<tr>
        <td colspan="2">
           {$LNG.lm_moonbuy}
       </td>
    </tr>
			<tr>
			<td rowspan="1" style="width:120px;">
				<img src="styles/theme/gow/planeten/moon_req_pic.png" width="120" height="120">
			</td>
			<td>
			{$LNG.moon_buy}
			</td></tr><tr><td colspan="2">
			<form method="POST">
				<center><button type="submit" name="Buy" class="button" style="height:25px;">{$LNG.purchase}</button></center>
			</form>
			</td>
			
			</tr>

</tbody>
</table>
{/block}