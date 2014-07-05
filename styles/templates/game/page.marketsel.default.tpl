{block name="title" prepend}{$LNG.an_an}{/block}
{if !$NotBuilding}
{block name="content"}

<table style="width:300px"><form action="" method="post">
<input name="action" value="in" type="hidden">
<td class="c" colspan="7"><center><font color="#00FF00">{$LNG.an_anb}</font> ({$LNG.an_charge})</center></td></tr>
<tr><th colspan="3">{$LNG.an_sellres}</th><th colspan="3">{$LNG.an_buyres}</th><th>{$LNG.an_action}</th></tr>
<tr><th>{$LNG.Metal}</th><th>{$LNG.Crystal}</th><th>{$LNG.Deuterium}</th><th>{$LNG.Metal}</th><th>{$LNG.Crystal}</th><th>{$LNG.Deuterium}</th><th><center>---</center></th></tr>
<tr><th><center><input name="metallinn" value="0" type="text"></center></th>
<th><center><input name="kristallinn" value="0" type="text"></center></th>
<th><center><input name="deyterinn" value="0" type="text"></center></th>
<th><center><input name="metalloutt" value="0" type="text"></center></th>
<th><center><input name="kristalloutt" value="0" type="text"></center></th>
<th><center><input name="deyteroutt" value="0" type="text"></center></th>
<th><center><input value="{$LNG.an_expose}" type="submit"></center></th></tr>
</form></table>
<br><br><br><br><br>
{if $userallyid != 0}
<table style="width:300px"><form action="" method="post">
<input name="action" value="inally" type="hidden">
<td class="c" colspan="7"><center><font color="#00FF00">{$LNG.an_anb_ally}</font> ({$LNG.an_charge})</center></td></tr>
<tr><th colspan="3">{$LNG.an_sellres}</th><th colspan="3">{$LNG.an_buyres}</th><th>{$LNG.an_action}</th></tr>
<tr><th>{$LNG.Metal}</th><th>{$LNG.Crystal}</th><th>{$LNG.Deuterium}</th><th>{$LNG.Metal}</th><th>{$LNG.Crystal}</th><th>{$LNG.Deuterium}</th><th><center>---</center></th></tr>
<tr><th><center><input name="metallinn" value="0" type="text"></center></th>
<th><center><input name="kristallinn" value="0" type="text"></center></th>
<th><center><input name="deyterinn" value="0" type="text"></center></th>
<th><center><input name="metalloutt" value="0" type="text"></center></th>
<th><center><input name="kristalloutt" value="0" type="text"></center></th>
<th><center><input name="deyteroutt" value="0" type="text"></center></th>
<th><center><input value="{$LNG.an_expose}" type="submit"></center></th></tr>
</form></table>
{/if}
{/block}{/if}