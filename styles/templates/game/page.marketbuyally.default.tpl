<tr><th colspan="2" style="text-align:center">{$LNG.an_infos}</th><th colspan="3" style="text-align:center">{$LNG.an_sellres}</th><th colspan="3" style="text-align:center">{$LNG.an_buyres}</th><th style="text-align:center">{$LNG.an_action}</th></tr>
<tr><th>{if ($orderby == 2)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=2&amp;sort={$tmpi}" class="button">{$LNG.an_seller}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=2&amp;sort=DESC" class="button">{$LNG.an_seller}</a>{/if}</th>
<th>{if ($orderby == 1)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=1&amp;sort={$tmpi}" class="button">{$LNG.an_left}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=1&amp;sort=DESC" class="button">{$LNG.an_left}</a>{/if}</th>
<th>{if ($orderby == 3)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=3&amp;sort={$tmpi}" class="button">{$LNG.Metal}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=3&amp;sort=DESC" class="button">{$LNG.Metal}</a>{/if}</th>
<th>{if ($orderby == 4)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=4&amp;sort={$tmpi}" class="button">{$LNG.Crystal}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=4&amp;sort=DESC" class="button">{$LNG.Crystal}</a>{/if}</th>
<th>{if ($orderby == 5)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=5&amp;sort={$tmpi}" class="button">{$LNG.Deuterium}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=5&amp;sort=DESC" class="button">{$LNG.Deuterium}</a>{/if}</th>
<th>{if ($orderby == 6)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=6&amp;sort={$tmpi}" class="button">{$LNG.Metal}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=6&amp;sort=DESC" class="button">{$LNG.Metal}</a>{/if}</th>
<th>{if ($orderby == 7)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=7&amp;sort={$tmpi}" class="button">{$LNG.Crystal}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=7&amp;sort=DESC" class="button">{$LNG.Crystal}</a>{/if}</th>
<th>{if ($orderby == 8)}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=8&amp;sort={$tmpi}" class="button">{$LNG.Deuterium}{$imageq}</a>
{else}<a href="game.php?page=market&amp;who={$whos}&amp;orderby=8&amp;sort=DESC" class="button">{$LNG.Deuterium}</a>{/if}</th>
<th>-</th>
</tr>

{foreach item=sr from=$SellRes name=SellRes}{if $univer == $sr.universe}{if ($sr.timelot <= $sr.times)}
<tr>
<td><a href="#" onclick="return Dialog.Playercard({$sr.sender}, '{$sr.user}');"{if $sr.sender == $CUser_id} style="color:lime"{/if}>{$sr.user}</a></td>
<td>{$sr.timeout}</td>
<td>{$sr.metala}</td><td>{$sr.cristala}</td><td>{$sr.deuta}</td>
<td>{$sr.metals}</td><td>{$sr.cristals}</td><td>{$sr.deuts}</td>
<td align="center">




{if ($sr.user != $sr.users)}
<a href="game.php?page=market&amp;who=2&amp;action=buyy&amp;id={$sr.id}"><font color="#00FF00">{$LNG.an_buy}</font></a>
{else}
<a href="game.php?page=market&amp;action=dell&amp;id={$sr.id}">{$LNG.an_del}</a>

</form>
{/if}



</td>
</tr>
{/if}{/if}{/foreach}
<tr>
<th colspan="9"><a href="game.php?page=market&mode=in"><center><font color="#00FF00">{$LNG.an_upsale}</font></center></a></td>
</tr>
<table style="width:800px;table-layout:fixed;" border="0px">
{$PAGES}
</table>