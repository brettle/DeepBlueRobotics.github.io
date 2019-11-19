<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:31:14
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/fileview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193549868156615d62abdaa5-09731403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2bca2b4762b9de796910c8ffdb05d75d41c944f' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/fileview.tpl',
      1 => 1423597000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193549868156615d62abdaa5-09731403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'folders' => 0,
    'project' => 0,
    'settings' => 0,
    'userpermissions' => 0,
    'langfile' => 0,
    'myprojects' => 0,
    'files' => 0,
    'folderid' => 0,
    'foldername' => 0,
    'filenum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615d62bdbce4_65172239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615d62bdbce4_65172239')) {function content_56615d62bdbce4_65172239($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><ul>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['name'] = 'fold';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['folders']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<li id="fdli_<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
">
			<div class="itemwrapper" id="iw_<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
">

				<table cellpadding="0" cellspacing="0" border="0">

					<tr>
						<td class="leftmen" valign="top">
							<div class="inmenue">
						<!--		<a class="export" href="managefile.php?action=folderexport&file=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('export');?>
"></a>-->
							</div>
						</td>
						<td class="thumb">
							<a href="javascript:change('manageajax.php?action=fileview&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&folder=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
','filescontent');selectFolder(<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
);">
								<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/folder-sub.png" alt="" />
							</a>
						</td>
						<td class="rightmen" valign="top">
							<div class="inmenue">
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['del']){?>
									<a class="del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->tpl_vars['langfile']->value['confirmdel'];?>
','deleteElement(\'fdli_<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
\',\'managefile.php?action=delfolder&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;folder=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
&ajax=1\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" onclick=""></a>
								<?php }?>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<span class="name">
								<a href="javascript:change('manageajax.php?action=fileview&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&folder=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
','filescontent');selectFolder(<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
">
									<?php if ($_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['name']!=''){?>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['name'],14,"...",true);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->getConfigVariable('folder');?>

									<?php }?>
								</a>
							</span>
						</td>
					<tr/>

				</table>

			</div> 
		</li>
	<?php endfor; endif; ?> 

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['file'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['file']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['name'] = 'file';
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['files']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total']);
?>
		<li id="fli_<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
">
			<div class="itemwrapper" id="iw_<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
">

				<table cellpadding="0" cellspacing="0" border="0">

					<tr>
						<td class="leftmen" valign="top">
							<div class="inmenue"></div>
						</td>
						<td class="thumb">
						
							<a href="managefile.php?action=downloadfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==1){?>  rel="lytebox[]" <?php }elseif($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==2){?> rel = "lyteframe[text]" rev="width: 650px; height: 500px;" <?php }?> >
								
								<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/files/<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['type'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
" />
							</a>
						</td>
						<td class="rightmen" valign="top">
							<div class="inmenue">
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['del']){?>
									<a class="del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->tpl_vars['langfile']->value['confirmdel'];?>
','deleteElement(\'fli_<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
\',\'managefile.php?action=delete&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['edit']){?>
								<!--	<a class="edit" href="managefile.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('editfile');?>
"></a>-->
								<?php }?>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<span class="name">
							
								<a href="managefile.php?action=downloadfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==1){?>  rel="lytebox[]" <?php }elseif($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==2){?> rel = "lyteframe[text]" rev="width: 650px; height: 500px;" <?php }?> >
									<?php if ($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['title']!=''){?>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['title'],14,"...",true);?>

									<?php }else{ ?>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'],14,"...",true);?>

									<?php }?>
								</a>
							</span>
						</td>
					<tr/>
				</table>

			</div> 
		</li>

		
			<script type = "text/javascript">
				new Draggable('fli_<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
',{revert:true});
			</script>
		

	<?php endfor; endif; ?> 
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fold']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['name'] = 'fold';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fold']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['folders']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	
		<script type="text/javascript">
			try {
				Droppables.add('fdli_<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
',{
					onDrop: function(element) {
					change('managefile.php?action=movefile&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&file='+element.id+'&target=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
','jslog');
					element.hide();
				}
				});
			}
			catch(e){}
		</script>
	
<?php endfor; endif; ?>

<div id="parentfolder" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['folderid']->value;?>
</div>

<script type="text/javascript">
	
		parentFolder = $("parentfolder").innerHTML;
			Droppables.add('dropDirUp',{
				onDrop: function(element) {
					//alert('managefile.php?action=movefile&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&file='+element.id+'&target='+parentFolder);
					change('managefile.php?action=movefile&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&file='+element.id+'&target='+parentFolder,'jslog');
					element.hide();
			}
		});
	

	<?php if ($_smarty_tpl->tpl_vars['foldername']->value){?>
		$('dirname').innerHTML = '<?php echo $_smarty_tpl->tpl_vars['foldername']->value;?>
';
	<?php }else{ ?>
		$('dirname').innerHTML = '<?php echo $_smarty_tpl->tpl_vars['langfile']->value['rootdir'];?>
';
	<?php }?>

	$('filenum').innerHTML = '<?php echo $_smarty_tpl->tpl_vars['filenum']->value;?>
';
	new LyteBox();
	$('dirUp').href = "javascript:change('manageajax.php?action=fileview&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&folder=<?php echo $_smarty_tpl->tpl_vars['folderid']->value;?>
','filescontent');selectFolder(<?php echo $_smarty_tpl->tpl_vars['folderid']->value;?>
);"
</script><?php }} ?>