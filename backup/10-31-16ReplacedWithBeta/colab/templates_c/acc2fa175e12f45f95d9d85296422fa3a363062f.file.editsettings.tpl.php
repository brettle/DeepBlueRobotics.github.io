<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:27:27
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/editsettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70394731356615c7fd88536-77571027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acc2fa175e12f45f95d9d85296422fa3a363062f' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/editsettings.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70394731356615c7fd88536-77571027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615c7fdf9228_33419427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615c7fdf9228_33419427')) {function content_56615c7fdf9228_33419427($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('settingstab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="neutral">
		
			<div class="infowin_left" style="display:none;" id="systemmsg">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
					<span class="info_in_yellow">
						<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/system-settings.png" alt="" />
						<?php echo $_smarty_tpl->getConfigVariable('settingsedited');?>

					</span>
		        <?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="imported"){?>
					<span class="info_in_green">
						<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/basecamp.png" alt="" />
						<?php echo $_smarty_tpl->getConfigVariable('importsuccess');?>

					</span>
				<?php }?>
				
			</div>
			
			
				<script type = "text/javascript">
					systemMsg('systemmsg');
				</script>
			
			
			<h1><?php echo $_smarty_tpl->getConfigVariable('administration');?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></h1>
			
			<div class="headline">
				<a href="javascript:void(0);" id="block_system_toggle" class="win_block" onclick="toggleBlock('block_system');"></a>
				<h2>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/system-settings.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</a>
				</h2>
			</div>
			
			<div id="block_system" class="block">
				<?php echo $_smarty_tpl->getSubTemplate ("settings_system.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="tablemenue"></div>
			</div> 
			
			<div class="content-spacer"></div>
			
			<div class="headline">
				<a href="javascript:void(0);" id="block_email_toggle" class="win_block" onclick="toggleBlock('block_email');"></a>
				<h2>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('email');?>
</a>
				</h2>
			</div>
			
			<div id="block_email" class="block">
				<?php echo $_smarty_tpl->getSubTemplate ("settings_email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="tablemenue"></div>
			</div> 
			
			<div class="content-spacer"></div>
			
		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>