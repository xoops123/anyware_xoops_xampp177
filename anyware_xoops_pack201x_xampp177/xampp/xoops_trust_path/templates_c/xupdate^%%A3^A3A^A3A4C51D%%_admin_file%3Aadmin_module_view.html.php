<?php /* Smarty version 2.6.26, created on 2012-09-01 07:07:48
         compiled from file:admin_module_view.html */ ?>
<div id="xupdate">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_navi.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<h3 class="admintitle"><?php echo @_MI_XUPDATE_ADMENU_STORELIST; ?>
</h3>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_menunavi.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_tips.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<?php if (! empty ( $this->_tpl_vars['package_items'] )): ?>
	<h4><?php echo @_MI_XUPDATE_ADMENU_PACKAGE; ?>
</h4>
	<div class="storelist">
		<?php $_from = $this->_tpl_vars['package_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
			<div class="eachstore">
				<dl>
					<dt>
						<a href="index.php?action=PackageStore&amp;sid=<?php echo $this->_tpl_vars['data']['storeobj']->get('sid'); ?>
"><?php echo $this->_tpl_vars['data']['storeobj']->getShow('name'); ?>
</a>
					</dt>
					<dd>
						<div class="module_count">(<?php echo @_AD_XUPDATE_LANG_ITEM_TOTAL; ?>
: <?php echo $this->_tpl_vars['data']['items_count']; ?>
)</div>
						<ul>
						<?php $_from = $this->_tpl_vars['data']['itemsobj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itemsobj']):
?>
							<li><a href="index.php?action=ModuleInstall&amp;id=<?php echo $this->_tpl_vars['itemsobj']['id']; ?>
" class="isactive_<?php echo $this->_tpl_vars['itemsobj']['isactive']; ?>
" title="<?php echo $this->_tpl_vars['itemsobj']['title']; ?>
"><?php echo $this->_tpl_vars['itemsobj']['dirname']; ?>
<?php if ($this->_tpl_vars['itemsobj']['hasupdate']): ?> <img src="<?php echo @XOOPS_MODULE_URL; ?>
/xupdate/images/new.png" alt="New!" style="vertical-align:middle;" width="16" height="16"><?php endif; ?></a></li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</dd>
				</dl>
			</div>
		<?php endforeach; endif; unset($_from); ?>
		<div style="clear:both;;">&nbsp;</div>
	</div>
	<?php endif; ?>

	<?php if (! empty ( $this->_tpl_vars['module_items'] )): ?>
	<h4><?php echo @_MI_XUPDATE_ADMENU_MODULE; ?>
</h4>
	<div class="storelist">
		<?php $_from = $this->_tpl_vars['module_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
			<div class="eachstore">
				<dl>
					<dt>
						<a href="index.php?action=ModuleStore&amp;sid=<?php echo $this->_tpl_vars['data']['storeobj']->get('sid'); ?>
"><?php echo $this->_tpl_vars['data']['storeobj']->getShow('name'); ?>
</a>
					</dt>
					<dd>
						<div class="module_count">(<?php echo @_AD_LEGACY_LANG_MOD_TOTAL; ?>
: <?php echo $this->_tpl_vars['data']['items_count']; ?>
)</div>
						<ul>
						<?php $_from = $this->_tpl_vars['data']['itemsobj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itemsobj']):
?>
							<li><a href="index.php?action=ModuleInstall&amp;id=<?php echo $this->_tpl_vars['itemsobj']['id']; ?>
" class="isactive_<?php echo $this->_tpl_vars['itemsobj']['isactive']; ?>
" title="<?php echo $this->_tpl_vars['itemsobj']['title']; ?>
"><?php echo $this->_tpl_vars['itemsobj']['dirname']; ?>
<?php if ($this->_tpl_vars['itemsobj']['hasupdate']): ?> <img src="<?php echo @XOOPS_MODULE_URL; ?>
/xupdate/images/new.png" alt="New!" style="vertical-align:middle;" width="16" height="16"><?php endif; ?></a></li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</dd>
				</dl>
			</div>
		<?php endforeach; endif; unset($_from); ?>
		<div style="clear:both;;">&nbsp;</div>
	</div>
	<?php endif; ?>

	<?php if (! empty ( $this->_tpl_vars['theme_items'] )): ?>
	<h4><?php echo @_MI_XUPDATE_ADMENU_THEME; ?>
</h4>
	<div class="storelist">
		<?php $_from = $this->_tpl_vars['theme_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
			<div class="eachstore">
				<dl>
					<dt>
						<a href="index.php?action=ThemeStore&amp;sid=<?php echo $this->_tpl_vars['data']['storeobj']->get('sid'); ?>
"><?php echo $this->_tpl_vars['data']['storeobj']->getShow('name'); ?>
</a>
					</dt>
					<dd>
						<div class="module_count">(<?php echo @_AD_XUPDATE_LANG_THM_TOTAL; ?>
: <?php echo $this->_tpl_vars['data']['items_count']; ?>
)</div>
						<ul>
						<?php $_from = $this->_tpl_vars['data']['itemsobj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itemsobj']):
?>
							<li><a href="index.php?action=ThemeInstall&amp;id=<?php echo $this->_tpl_vars['itemsobj']['id']; ?>
" class="isactive_<?php echo $this->_tpl_vars['itemsobj']['isactive']; ?>
" title="<?php echo $this->_tpl_vars['itemsobj']['title']; ?>
"><?php echo $this->_tpl_vars['itemsobj']['dirname']; ?>
<?php if ($this->_tpl_vars['itemsobj']['hasupdate']): ?> <img src="<?php echo @XOOPS_MODULE_URL; ?>
/xupdate/images/new.png" alt="New!" style="vertical-align:middle;" width="16" height="16"><?php endif; ?></a></li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</dd>
				</dl>
			</div>
		<?php endforeach; endif; unset($_from); ?>
		<div style="clear:both;;">&nbsp;</div>
	</div>
	<?php endif; ?>

</div>