<?php /* Smarty version Smarty-3.1.13, created on 2014-07-05 07:08:31
         compiled from "C:\wamp\www\styles\templates\game\main.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1324353b7a46fd61543-08335880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b0e357b40a13a08e59ff6ba836b83aac806c4da' => 
    array (
      0 => 'C:\\wamp\\www\\styles\\templates\\game\\main.footer.tpl',
      1 => 1368959720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1324353b7a46fd61543-08335880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ga_active' => 1,
    'ga_key' => 1,
    'debug' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b7a46fd86a92_74070396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b7a46fd86a92_74070396')) {function content_53b7a46fd86a92_74070396($_smarty_tpl) {?><div class="clear"></div>
<div id="footer">
	<?php if ($_smarty_tpl->tpl_vars['ga_active']->value){?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ga_key']->value;?>
']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['debug']->value==1){?>
	<script type="text/javascript">
	onerror = handleErr;
	</script>
	<?php }?>
</div>
</body>
</html><?php }} ?>