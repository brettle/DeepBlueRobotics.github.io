<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:31:14
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/projectfiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119645784456615d622e7301-46102594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'accaac9069f053ac3a7a9c75060c9c5f8e364e95' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/projectfiles.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119645784456615d622e7301-46102594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'mode' => 0,
    'projectname' => 0,
    'userpermissions' => 0,
    'project' => 0,
    'folders' => 0,
    'filenum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615d623993b2_40019335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615d623993b2_40019335')) {function content_56615d623993b2_40019335($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload3'=>"lightbox"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('filestab'=>"active"), 0);?>

<script type = "text/javascript" src = "include/js/5up.js"></script>
<div id="content-left">
	<div id="content-left-in">
		<div class="files">

			<div class="infowin_left">
				<span id = "deleted" style = "display:none;" class="info_in_red"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/files.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('filewasdeleted');?>
</span>
					<span id = "fileadded" style = "display:none;" class="info_in_green"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/files.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('filewasadded');?>
</span>
			</div>

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
				<span class="info_in_green"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/files.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('filewasadded');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
				<span class="info_in_yellow"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/files.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('filewasedited');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="folderadded"){?>
				<span class="info_in_green"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/folder-root.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('folderwasadded');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="folderedited"){?>
				<span class="info_in_yellow"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/folder-root.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('folderwasedited');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="folderdel"){?>
				<span class="info_in_red"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/folder-root.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('folderwasdeleted');?>
</span>
				<?php }?>
			</div>

			
				<script type = "text/javascript">
					systemMsg('systemmsg');
				</script>
			

			<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('files');?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="block_files_toggle" class="win_block" onclick = "toggleBlock('block_files');"></a>

				<div class="wintools">
					<div class="addmen">
						<div class="export-main">
							<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</span></a>
							<div class="export-in"  style="width:54px;left: -54px;"> 
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['add']){?>
								<a class="addfile" href="javascript:blindtoggle('form_file');" id="addfile" onclick="toggleClass(this,'addfile-active','addfile');toggleClass('add_file_butn','butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addfile');?>
</span></a>
								<a class="addfolder" href="javascript:blindtoggle('form_folder');" id="addfolder" onclick="toggleClass(this,'addfolder-active','addfolder');toggleClass('add_folder_butn','butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addfolder');?>
</span></a>	<?php }?>
							</div>
						</div>
					</div>
				</div>

				<h2>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/folder-root.png" alt="" /><span id = "dirname"><?php echo $_smarty_tpl->getConfigVariable('rootdir');?>
</span>
				</h2>
			</div>

			<div id="block_files" class="blockwrapper">
				
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['add']){?>
					<div id = "form_folder" class="addmenue" style = "display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("addfolder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				<?php }?>

				
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['add']){?>
					<div id = "form_file" class="addmenue" style = "display:none;">
						<div id = "newupload" style = "display:block"><?php echo $_smarty_tpl->getSubTemplate ("addfileform_new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
						</div>
				<?php }?>
				<div class="nosmooth" id="sm_files">
					<div class="contenttitle" id = "dropDirUp" >
						<div class="contenttitle_menue" >
							<a id = "dirUp" class="dir_up_butn" href="javascript:change('manageajax.php?action=fileview&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&folder=0','filescontent');" title="<?php echo $_smarty_tpl->getConfigVariable('parent');?>
"></a>
						</div>
						<div class="contenttitle_in" style = "width:500px;">
							<a href="manageajax.php?action=fileview&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&folder=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
"></a>
						</div>
						<div style = "float:right;margin-right:3px;">
						<form id = "typechose">
							<select id = "fileviewtype" onchange = "changeFileview(this.value);">
								<option value = "fileview" selected><?php echo $_smarty_tpl->getConfigVariable('gridview');?>
</option>
								<option value = "fileview_list" ><?php echo $_smarty_tpl->getConfigVariable('listview');?>
</option>
							</select>
						</form>
						</div>

					</div>
					<div class="content_in_wrapper">
						<div class="content_in_wrapper_in">

							
							<div id = "filescontent" class="inwrapper" >
								
							</div>
						</div> 
					</div> 
					<div class="staterow">
						<div class="staterowin">
							<span id = "filenum"><?php echo $_smarty_tpl->tpl_vars['filenum']->value;?>
</span> <?php echo $_smarty_tpl->getConfigVariable('files');?>

						</div>
					</div>
				</div> 

				<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['add']){?>
						<a class="butn_link" href="javascript:blindtoggle('form_file');" id="add_file_butn" onclick="toggleClass('addfile','addfile-active','addfile');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addfile');?>
</a>
						<a class="butn_link" href="javascript:blindtoggle('form_folder');" id="add_folder_butn" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('addfolder','addfolder-active','addfolder');toggleClass('sm_files','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addfolder');?>
</a>
						<?php }?>
					</div>
				</div>
			</div> 

			<div class="content-spacer"></div>
		</div> 
	</div> 
</div> 

<script type = "text/javascript">
function changeFileview(viewtype)
{
	var folder;
	try{
		folder = $('folderparent').value;
	}
	catch(e)
	{
		folder = 0;
	}

	if(!folder)
	{
		folder = 0;
	}
	change("manageajax.php?action="+viewtype+"&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&folder="+folder,"filescontent");
}
</script>
<script type = "text/javascript">
changeFileview($('fileviewtype').value);
</script>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>