<?php /* Smarty version Smarty-3.1.13, created on 2016-01-04 14:19:23
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/editmilestone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1336642704568aefeb2f2370-56671977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ba3f82fcb72425168ab763d8836acc942b2f498' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/editmilestone.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1336642704568aefeb2f2370-56671977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showhtml' => 0,
    'project' => 0,
    'settings' => 0,
    'projectname' => 0,
    'milestone' => 0,
    'lists' => 0,
    'theM' => 0,
    'theY' => 0,
    'showhead' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_568aefeb3ffaf4_66967061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568aefeb3ffaf4_66967061')) {function content_568aefeb3ffaf4_66967061($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['showhtml']->value)===null||$tmp==='' ? '' : $tmp)!="no"){?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('milestab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="miles">

			<div class="breadcrumb">
				<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,40,"...",true);?>
</a>
				<a href="managemilestone.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/miles.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('milestones');?>
</a>
			</div>

			<h1><?php echo $_smarty_tpl->getConfigVariable('editmilestone');?>
</h1>
			
<?php }?>

			<div class="block_in_wrapper">

			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['showhtml']->value)===null||$tmp==='' ? '' : $tmp)=="no"){?>
				<h2><?php echo $_smarty_tpl->getConfigVariable('editmilestone');?>
</h2>
			<?php }else{ ?>
				<h2>&nbsp;</h2>
			<?php }?>

				<form novalidate class="main" method="post" action="managemilestone.php?action=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['milestone']->value['project'];?>
" onsubmit="return validateCompleteForm(this,'input_error');">
					<fieldset>

						<div class="row">
							<label for="name"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['name'];?>
" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
						</div>

						<div class="row">
							<label for="desc"><?php echo $_smarty_tpl->getConfigVariable('description');?>
:</label>
							<div class="editor">
								<textarea name="desc" id="desc" realname="<?php echo $_smarty_tpl->getConfigVariable('description');?>
" rows="3" cols="1"><?php echo $_smarty_tpl->tpl_vars['milestone']->value['desc'];?>
</textarea>
							</div>
						</div>

						<div class="clear_both_b"></div>
						
						<div class="row">
							<label for="end"><?php echo $_smarty_tpl->getConfigVariable('start');?>
:</label>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['startstring'];?>
" name="start" id="start" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('end');?>
" />
						</div>
						
						<div class="datepick">
							<div id="datepicker_mile_start" class="picker" style="display:none;"></div>
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
.relateTo = "start";
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_mile_start");
						</script>
						
						<div class="row">
							<label for="end"><?php echo $_smarty_tpl->getConfigVariable('end');?>
:</label>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['endstring'];?>
" name="end" id="end" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('end');?>
" />
						</div>
						
						<div class="datepick">
							<div id="datepicker_mile" class="picker" style="display:none;"></div>
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
.relateTo = "end";
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
							theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_mile");
						</script>
						
						<input type="hidden" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['milestone']->value['ID'];?>
" />
						
						<div class="row-butn-bottom">
							<label>&nbsp;</label>
							<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['showhtml']->value)===null||$tmp==='' ? '' : $tmp)=="no"){?>
								<button onclick="blindtoggle('form_edit');toggleClass('edit_butn','edit-active','edit');toggleClass('sm_mile','smooth','nosmooth');return false;" onfocus="this.blur();" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['showhead']->value)===null||$tmp==='' ? '' : $tmp)=="1"){?> style="display:none;"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
							<?php }?>
						</div>
						
					</fieldset>
				</form>
				
			</div> 

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['showhtml']->value)===null||$tmp==='' ? '' : $tmp)!="no"){?>

			<div class="content-spacer"></div>

		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?><?php }} ?>