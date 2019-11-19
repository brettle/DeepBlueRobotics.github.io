<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:31:14
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/addfileform_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213359146956615d623c46b9-30907766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd71c1f44e8dffe16258d8b5c61f22e42f2adc808' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/addfileform_new.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213359146956615d623c46b9-30907766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'postmax' => 0,
    'allfolders' => 0,
    'members' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615d623fc089_32365939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615d623fc089_32365939')) {function content_56615d623fc089_32365939($_smarty_tpl) {?><div class="block_in_wrapper">
	
	<h2><?php echo $_smarty_tpl->getConfigVariable('addfile');?>
</h2>
	<?php echo $_smarty_tpl->getConfigVariable('maxsize');?>
: <?php echo $_smarty_tpl->tpl_vars['postmax']->value;?>
<br /><br />
	
	<form novalidate class="main" action="#" method="post" enctype="multipart/form-data">
		<fieldset>
			
			<div class="row">
				<label for="upfolder"><?php echo $_smarty_tpl->getConfigVariable('folder');?>
:</label>
				<select name="upfolder" id="upfolder">
					<option value=""><?php echo $_smarty_tpl->getConfigVariable('rootdir');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['name'] = 'fold';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allfolders']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['allfolders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['allfolders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['abspath'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			
			<div id="inputs">
				
				<div class="row">
					<label for="file"><?php echo $_smarty_tpl->getConfigVariable('file');?>
:</label>
					<div class="fileinput">
						<input size="1" type="file" class="file" name="userfile1" id="filer" realname="<?php echo $_smarty_tpl->getConfigVariable('file');?>
" onchange="uploader.fileInfo();" style="cursor:pointer;" multiple />
						<table class="faux" cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0;border:none;">
							<tr>
								<td class="choose" style="padding:0px;">
									<button class="inner" onclick="return false;" style="float:left;cursor:pointer;"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="row">
					<label>&nbsp;</label>
					<div id="fileInfo1"></div>
				</div>
			</div>
			
			<div class="row">
				<label><?php echo $_smarty_tpl->getConfigVariable('notify');?>
:</label>
				<select id="sendto" name="sendto[]" multiple style="height:100px;">
					<option value="" disabled style="color:black;font-weight:bold;"><?php echo $_smarty_tpl->getConfigVariable('general');?>
</option>
					<option value="all" selected><?php echo $_smarty_tpl->getConfigVariable('all');?>
</option>
					<option value="none" ><?php echo $_smarty_tpl->getConfigVariable('none');?>
</option>
					<option value="" disabled style="color:black;font-weight:bold;"><?php echo $_smarty_tpl->getConfigVariable('members');?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['member'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['member']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['name'] = 'member';
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['members']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			
			<div class="row" id="statusrow" style="display:none;">
				<label>&nbsp;</label><br />
				<div class="statusbar" id="fakeprogress" style="width:314px;margin-left:140px;">
					<div id="completed" class="complete" style="width:0%;"></div>
				</div>
			</div>
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<div id="filesubmit">
					<button onclick="$('statusrow').show();uploader.upload();return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
				</div>
			</div>
			
		</fieldset>
	</form>
	
	
		<script type="text/javascript">
			Event.observe(window, "load", function()
			{
				uploader = new html5up("filer", "fileInfo1", "completed", "managefile.php?action=uploadAsync&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
");
			});
		</script>
	
	
</div> 
<?php }} ?>