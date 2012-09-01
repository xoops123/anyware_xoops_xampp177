<?php /* Smarty version 2.6.26, created on 2012-09-01 07:07:48
         compiled from admin_navi.html */ ?>
<div class="adminnavi">
  <a href="./index.php?action=ModuleStore"><?php echo @_MI_XUPDATE_ADMENU_ADDONSTORE; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo $this->_tpl_vars['currentMenu']; ?>
</span>
  <?php if ($this->_tpl_vars['currentItem']): ?>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo $this->_tpl_vars['currentItem']; ?>
</span>
  <?php endif; ?>
</div>