<?php /* Smarty version 2.6.26, created on 2012-09-01 07:08:49
         compiled from file:admin_theme_install.html */ ?>
<div id="xupdate">
		
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_navi.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<h3 class="admintitle"><?php echo @_MI_XUPDATE_ADMENU_ADDONSTORE; ?>
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
	
	<div id="xupdate_content">
	<?php echo $this->_tpl_vars['xupdate_content']; ?>

	</div>
	
	<?php if ($this->_tpl_vars['xupdate_nextlink']): ?>
	<ul class="toptab">
	<li id="xupdate_addModule" class="theme" style="float:left;">
	  <?php echo $this->_tpl_vars['xupdate_nextlink']; ?>

	</li>
	</ul>
	<div style="clear:both;"></div>
	<?php endif; ?>
	
	<div id="xupdate_message">
	<?php echo $this->_tpl_vars['xupdate_message']; ?>

	</div>
</div>