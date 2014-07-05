<?php /* Smarty version Smarty-3.1.13, created on 2014-07-05 07:08:44
         compiled from "C:\wamp\www\styles\templates\game\shared.information.shipInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2737453b7a47ce10216-81908072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05bfd01198fc4cfbd893809bb5d732444ead58cc' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\shared.information.shipInfo.tpl',
      1 => 1404287946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2737453b7a47ce10216-81908072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 1,
    'FleetInfo' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b7a47cef6248_91373442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b7a47cef6248_91373442')) {function content_53b7a47cef6248_91373442($_smarty_tpl) {?><div style="display:table;padding:2px;border-radius:5px;border:1px solid #999;margin: 0 auto;width:98%;">
<table style="border-collapse: collapse; width:100%;">
	<tbody>
		<tr>
			<td style="width:50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_struct_pt'];?>
: <?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['structure']);?>
 (<span style="color:#00ff00"><?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['curstructure']);?>
</span>)</td>
			<td style="width:50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_attack_pt'];?>
: <?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['attack']);?>
 (<span style="color:#00ff00"><?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['curattack']);?>
</span>)</td>
		</tr>
		<tr>
			<td style="width:50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_shield_pt'];?>
: <?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['shield']);?>
 (<span style="color:#00ff00"><?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['curshield']);?>
</span>)</td>
			<td style="width:50%"><?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value['capacity'])){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_capacity'];?>
: <?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['capacity']);?>
<?php }?></td>
		</tr>
		<?php if (!empty($_smarty_tpl->tpl_vars['FleetInfo']->value['speed1'])){?>
		<tr>
			<td style="width:50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_base_speed'];?>
: <?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['speed1']);?>
 (<span style="color:#00ff00"><?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['curspeed']);?>
</span>)</td>
			<td style="width:50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['in_consumption'];?>
: <?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['consumption1']);?>
 <?php if ($_smarty_tpl->tpl_vars['FleetInfo']->value['consumption1']!=$_smarty_tpl->tpl_vars['FleetInfo']->value['consumption2']){?> <span style="color:yellow">(<?php echo pretty_number($_smarty_tpl->tpl_vars['FleetInfo']->value['consumption2']);?>
)</span><?php }?></td>
		</tr>
		<?php }?>
	</tbody>
</table>
</div><?php }} ?>