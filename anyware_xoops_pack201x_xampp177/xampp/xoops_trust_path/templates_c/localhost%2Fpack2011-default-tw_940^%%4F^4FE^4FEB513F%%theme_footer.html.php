<?php /* Smarty version 2.6.26, created on 2012-09-01 07:10:14
         compiled from tw_940/theme_footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strstr', 'tw_940/theme_footer.html', 23, false),array('modifier', 'xoops_blocktitleclass', 'tw_940/theme_footer.html', 24, false),array('modifier', 'xoops_blocktitleclassdel', 'tw_940/theme_footer.html', 25, false),)), $this); ?>
<div id="footer_menu">
<?php if (! $this->_tpl_vars['xoops_isuser']): ?>
	<a href="http://xoops123.com/">Theme designed by marine/mistgreen</a>&nbsp;|&nbsp;
	<noscript><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php">login(noscript)</a>&nbsp;|&nbsp;</noscript>
	<a class="fancybox" href="#theme_login_block" title="<?php echo @_THEME_LANGUAGE_LOGIN; ?>
"><?php echo @_THEME_LANGUAGE_LOGIN; ?>
</a>
<?php else: ?>
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo @_THEME_LANGUAGE_USER_ACCOUNT; ?>
</a>&nbsp;|&nbsp;
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php"><?php echo @_THEME_LANGUAGE_EDIT_ACCOUNT; ?>
</a>&nbsp;|&nbsp;
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/notifications.php"><?php echo @_THEME_LANGUAGE_NORTIFICATION; ?>
</a>&nbsp;|&nbsp;
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/viewpmsg.php" <?php if ($this->_tpl_vars['pm']['new_messages']): ?>class="new1"<?php endif; ?>><?php echo @_THEME_LANGUAGE_VIEWPMSG; ?>
(<?php echo $this->_tpl_vars['pm']['new_messages']; ?>
)</a>&nbsp;|&nbsp;
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @_THEME_LANGUAGE_LOGOUT; ?>
</a>&nbsp;|&nbsp;
	<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/admin.php"><?php echo @_THEME_LANGUAGE_ADMIN_PAGE; ?>
</a>&nbsp;|&nbsp;
	<?php endif; ?>
	<a href="http://xoops123.com/">Theme designed by marine/mistgreen</a>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>
<div id="level_foot"><div class="row">
	<?php $_from = $this->_tpl_vars['xoops_rblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rbloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rbloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['rbloop']['iteration']++;
?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "[[") : strstr($_tmp, "[["))): ?>
			<div class="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclass', true, $_tmp) : smarty_modifier_xoops_blocktitleclass($_tmp)); ?>
<?php if (($this->_foreach['rbloop']['iteration'] <= 1)): ?> padding10<?php endif; ?>">
				<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('xoops_blocktitleclassdel', true, $_tmp) : smarty_modifier_xoops_blocktitleclassdel($_tmp)); ?>
</h3><?php endif; ?>
				<?php echo $this->_tpl_vars['block']['content']; ?>

			</div>
		<?php else: ?>
			<div class="span2<?php if (($this->_foreach['rbloop']['iteration'] <= 1)): ?> padding10<?php endif; ?>">
				<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?><h3><?php echo $this->_tpl_vars['block']['title']; ?>
</h3><?php endif; ?>
				<?php echo $this->_tpl_vars['block']['content']; ?>

			</div>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</div>
</div>
<?php endif; ?>
