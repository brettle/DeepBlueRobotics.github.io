<?php /* Smarty version Smarty-3.1.13, created on 2016-09-25 22:56:58
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/tasklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58093487557e8b8aa51e759-41544427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b18da3c5cd3e84a26cbae6e27b1c3c225a118bc' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/tasklist.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58093487557e8b8aa51e759-41544427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'project' => 0,
    'settings' => 0,
    'projectname' => 0,
    'tasklist' => 0,
    'userpermissions' => 0,
    'myprojects' => 0,
    'tasks' => 0,
    'donetasks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57e8b8aa7cb612_94525436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8b8aa7cb612_94525436')) {function content_57e8b8aa7cb612_94525436($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('taskstab'=>"active"), 0);?>


<div id="content-left">
<div id="content-left-in">
<div class="tasks">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
			<span class="info_in_yellow"><img src="templates/standard/img/symbols/tasklist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasedited');?>
</span>
		<?php }?>
	</div>

	
		<script type = "text/javascript">
			apperar = new Effect.Appear('systemmsg', { duration: 2.0 })
		</script>
	

	<div class="breadcrumb">
		<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,40,"...",true);?>
</a>
		<a href="managetask.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</a>
	</div>

	<h1 class="second"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasklist']->value['name'],40,"...",true);?>
</h1>

	<div class="statuswrapper">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?>
				<?php if ($_smarty_tpl->tpl_vars['tasklist']->value['status']==1){?>
					<li class="link" id="closetoggle"><a class="close" href="managetasklist.php?action=close&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a></li>
				<?php }else{ ?>
					<li class="link" id="closetoggle"><a class="closed" href="managetasklist.php?action=open&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a></li>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
				<li class="link"><a class="edit" href="javascript:void(0);" id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_tasklist','smooth','nosmooth');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
				<li class="link"><a class="del" href="javascript:void(0);" onclick="confirmit('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','managetasklist.php?action=del&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tasklist']->value['desc']){?>
				<li class="link" onclick="blindtoggle('descript');toggleClass('desctoggle','desc_active','desc');"><a class="desc" id="desctoggle" href="#" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"><?php echo $_smarty_tpl->getConfigVariable('description');?>
</a></li>
			<?php }?>
			<li><a><?php echo $_smarty_tpl->getConfigVariable('start');?>
: <?php echo $_smarty_tpl->tpl_vars['tasklist']->value['startstring'];?>
</a></li>
		</ul>
	</div>

	
	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
		<div id="form_edit" class="addmenue" style = "display:none;clear:both;">
			<div class="content-spacer"></div>
			<?php echo $_smarty_tpl->getSubTemplate ("edittasklist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('showhtml'=>"no"), 0);?>

		</div>
	<?php }?>

	<div class="content-spacer"></div>

	<div class="nosmooth" id="sm_tasklist">
		<div id="descript" class="descript" style="display:none;">
			<h2><?php echo $_smarty_tpl->tpl_vars['tasklist']->value['name'];?>
</h2>
			<?php echo $_smarty_tpl->tpl_vars['tasklist']->value['desc'];?>

			<div class="content-spacer"></div>
		</div>

		<div class="headline">
			<a href="javascript:void(0);" id="block-<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
_toggle" class="win_block" onclick = "toggleBlock('block-<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
');"></a>

			<div class="wintools">
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>
				<a class="add" href="javascript:blindtoggle('form_addtask');" id="add_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</span></a>
				<?php }?>
			</div>

			<h2>
				<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('newtasks');?>
</a>
			</h2>
		</div>

		<div id="acc1" class="block">

		
		<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>
			<div id = "form_addtask" class="addmenue" style = "display:none;">
				<?php echo $_smarty_tpl->getSubTemplate ("addtask.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		<?php }?>

		<div class="nosmooth" id="sm_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
">
			<table id="acc_1" cellpadding="0" cellspacing="0" border="0">

				<thead>
					<tr>
						<th class="a"></th>
						<th class="b"><?php echo $_smarty_tpl->getConfigVariable('tasks');?>
</th>
						<th class="c"><?php echo $_smarty_tpl->getConfigVariable('user');?>
</th>
						<th class="days" style="text-align:right"><?php echo $_smarty_tpl->getConfigVariable('daysleft');?>
&nbsp;&nbsp;</th>
						<th class="tools"></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<td colspan="5"></td>
					</tr>
				</tfoot>

				<?php if ($_smarty_tpl->tpl_vars['tasklist']->value['tasknum']>0){?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total']);
?>
						
						<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['task']['index']%2==0){?>
						<tbody class="color-a" id="task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
">
						<?php }else{ ?>
						<tbody class="color-b" id="task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
">
						<?php }?>
							<tr <?php if ($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']<0){?> class="marker-late"<?php }elseif($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>
								<td><?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?><a class="butn_check" href="javascript:closeElement('task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
','managetask.php?action=close&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a><?php }?></td>
								<td>
									<div class="toggle-in">
									<span class="acc-toggle" onclick="javascript:accord_1.activate($$('#acc1 .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['task']['index'];?>
]);toggleAccordeon('acc_1',this);"></span>
										<a href="managetask.php?action=showtask&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>
">
											<?php if ($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title']!=''){?>
											<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'],30,"...",true);?>

											<?php }else{ ?>
											<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text'],30,"...",true);?>

											<?php }?>
										</a>
									</div>
								</td>
								<td><a href="manageuser.php?action=profile&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['user_id'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['user'],23,"...",true);?>
</a></td>
								<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
								<td class="tools">
									<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
										<a class="tool_edit" href="javascript:void(0);"  onclick = "change('managetask.php?action=editform&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','form_addtask');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_addtask');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
									<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
\',\'managetask.php?action=del&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
									<?php }?>
								</td>
							</tr>

							<tr class="acc">
								<td colspan="5">
									<div class="accordion_toggle"></div>
									<div class="accordion_content">
										<div class="acc-in">
											<div class="message-in">
												<?php echo nl2br($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text']);?>

											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					<?php endfor; endif; ?>
				<?php }else{ ?>
					<tbody class="color-a">
						<tr>
							<td></td>
							<td><?php echo $_smarty_tpl->getConfigVariable('notasks');?>
</td>
							<td></td>
							<td></td>
							<td class="tools"></td>
						</tr>
					</tbody>
				<?php }?>
			</table>

			
			<?php if ($_smarty_tpl->tpl_vars['tasklist']->value['donetasknum']>0){?>
				<div id="doneblock_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" class="doneblock">

					<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');toggleClass('donebutn_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','acc-toggle','acc-toggle-active');">
						<tr>
							<td class="a"></td>
							<td class="b"><span id="toggle-done-<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" class="acc-toggle-active"><?php echo $_smarty_tpl->getConfigVariable('donetasks');?>
</span></td>
							<td class="c"></td>
							<td class="days"></td>
							<td class="tools"></td>
						</tr>
					</table>

					<div class="toggleblock">

						<table cellpadding="0" cellspacing="0" border="0" id = "done_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['name'] = 'donetask';
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['donetasks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['donetask']['total']);
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']%2==0){?>
								<tbody class="color-a" id="task_<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
">
								<?php }else{ ?>
								<tbody class="color-b" id="task_<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
">
								<?php }?>
									<tr>
										<td class="a"><?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?><a class="butn_checked" href="javascript:closeElement('task_<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
','managetask.php?action=open&amp;tid=<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a><?php }?></td>
										<td class="b">
											<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:done_2.activate($$('#done_2 .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index'];?>
]);toggleAccordeon('done_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
',this);"></span>
												<a href="managetask.php?action=showtask&amp;tid=<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['title'];?>
">
													<?php if ($_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['title']!=''){?>
													<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['title'],30,"...",true);?>

													<?php }else{ ?>
													<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['text'],30,"...",true);?>

													<?php }?>
												</a>
											</div>
										</td>
										<td class="c"><a href="manageuser.php?action=profile&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['user_id'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['user'],23,"...",true);?>
</a></td>
										<td class="days" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
												<a class="tool_edit" href="javascript:void(0);" onclick="change('managetask.php?action=editform&amp;tid=<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','form_addtask');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_addtask');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'task_<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
\',\'managetask.php?action=del&amp;tid=<?php echo $_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
											<?php }?>
										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<div class="message-in">
														<?php echo nl2br($_smarty_tpl->tpl_vars['donetasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donetask']['index']]['text']);?>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?> 
						</table>

					</div> 
				</div> 
			<?php }?> 

		</div> 

		
		<div class="tablemenue">
			<div class="tablemenue-in">
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>
					<a class="butn_link" href="javascript:blindtoggle('form_addtask');" id="add_butn_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" onclick="toggleClass('add_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tasklist']->value['donetasknum']>0){?>
					<a class="butn_link_active" href="javascript:blindtoggle('doneblock_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" id="donebutn_<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','acc-toggle','acc-toggle-active');"><?php echo $_smarty_tpl->getConfigVariable('donetasks');?>
</a>
				<?php }?>
			</div>
		</div> 

	</div> 
</div> 

<div class="content-spacer"></div>


	<script type = "text/javascript">
		var accord_1 = new accordion('acc_1');
		var done_2 = new accordion('doneblock_{$project.ID}');
	</script>


</div> 
</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>