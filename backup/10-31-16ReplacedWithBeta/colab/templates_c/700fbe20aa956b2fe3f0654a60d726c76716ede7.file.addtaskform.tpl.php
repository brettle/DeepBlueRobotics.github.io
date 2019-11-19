<?php /* Smarty version Smarty-3.1.13, created on 2016-09-25 23:53:14
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/addtaskform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84938706757e8c5da107802-86276779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700fbe20aa956b2fe3f0654a60d726c76716ede7' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/addtaskform.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84938706757e8c5da107802-86276779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showhtml' => 0,
    'project' => 0,
    'projectname' => 0,
    'settings' => 0,
    'lists' => 0,
    'day' => 0,
    'month' => 0,
    'year' => 0,
    'theM' => 0,
    'theY' => 0,
    'tasklists' => 0,
    'assignable_users' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57e8c5da316c25_89689402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8c5da316c25_89689402')) {function content_57e8c5da316c25_89689402($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('taskstab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="tasks">
		
			<div class="breadcrumb">
				<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['projectname']->value;?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,25,"...",true);?>
</a>
				<a href="managetask.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</a>
			</div>

<?php }?>
			
			<div class="block_in_wrapper">
				
				<h2><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</h2>
				
				<form novalidate class="main" method="post" action="managetask.php?action=add&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this,'input_error');  ">
					<fieldset>
						
						<div class="row">
							<label for="title"><?php echo $_smarty_tpl->getConfigVariable('title');?>
:</label>
							<input type="text" class="text" name="title" id="title" realname="<?php echo $_smarty_tpl->getConfigVariable('title');?>
" required="1" />
						</div>
						
						<div class="row">
							<label for="text"><?php echo $_smarty_tpl->getConfigVariable('text');?>
:</label>
							<div class="editor">
								<textarea name="text" id="text" rows="3" cols="1"></textarea>
							</div>
						</div>
						
						<div class="row">
							<label for="end"><?php echo $_smarty_tpl->getConfigVariable('due');?>
:</label>
							<input type="text" class="text" name="end" realname="<?php echo $_smarty_tpl->getConfigVariable('due');?>
" id="end<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" required="1" value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" />
						</div>
						
						<div class="datepick">
							<div id="datepicker_addtask" class="picker" style="display:none;"></div>
						</div>
						
						<script type="text/javascript">
						  	theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
","<?php echo $_smarty_tpl->getConfigVariable('february');?>
","<?php echo $_smarty_tpl->getConfigVariable('march');?>
","<?php echo $_smarty_tpl->getConfigVariable('april');?>
","<?php echo $_smarty_tpl->getConfigVariable('may');?>
","<?php echo $_smarty_tpl->getConfigVariable('june');?>
","<?php echo $_smarty_tpl->getConfigVariable('july');?>
","<?php echo $_smarty_tpl->getConfigVariable('august');?>
","<?php echo $_smarty_tpl->getConfigVariable('september');?>
","<?php echo $_smarty_tpl->getConfigVariable('october');?>
","<?php echo $_smarty_tpl->getConfigVariable('november');?>
","<?php echo $_smarty_tpl->getConfigVariable('december');?>
"];
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.relateTo = "end<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
";
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_addtask");
						</script>
						
						<div class="row">
							<label for="tasklist"><?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
:</label>
						    <select name="tasklist" id="tasklist" required="1" exclude="-1" realname="<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
">
							    <option value="-1" selected="selected"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
							    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['name'] = 'tasklist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasklists']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tasklist']['total']);
?>
							    	<option value="<?php echo $_smarty_tpl->tpl_vars['tasklists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tasklist']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['tasklists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tasklist']['index']]['name'];?>
</option>
							    <?php endfor; endif; ?>
						    </select>
					    </div>
						
						<div class="row">
							<label for="assigned"><?php echo $_smarty_tpl->getConfigVariable('assignto');?>
:</label>
							<select name="assigned[]" multiple="multiple" style="height:80px;" id="assigned" required="1" exclude="-1" realname="<?php echo $_smarty_tpl->getConfigVariable('assignto');?>
">
								<option value="-1"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['assignable_users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['assignable_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['assignable_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ID']==$_smarty_tpl->tpl_vars['userid']->value){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['assignable_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'];?>
</option>
								<?php endfor; endif; ?>
							</select>
						</div>
						
						<div class="row-butn-bottom">
							<label>&nbsp;</label>
							<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
							<button onclick="blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');toggleClass('add_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','add-active','add');toggleClass('add_butn_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
						</div>
						
					</fieldset>
				</form>
				
			</div> 
			
<?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>
			
			<div class="content-spacer"></div>
		
		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?><?php }} ?>