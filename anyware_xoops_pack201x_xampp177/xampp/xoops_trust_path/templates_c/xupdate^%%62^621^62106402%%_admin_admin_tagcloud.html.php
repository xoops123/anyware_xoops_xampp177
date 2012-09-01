<?php /* Smarty version 2.6.26, created on 2012-09-01 07:07:56
         compiled from admin_tagcloud.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin_tagcloud.html', 5, false),array('modifier', 'xoops_escape', 'admin_tagcloud.html', 6, false),array('function', 'xoops_cooluri', 'admin_tagcloud.html', 6, false),)), $this); ?>
<?php if ($this->_tpl_vars['cloud']): ?>
<div class="tag_cloud">
<fieldset style="padding:1em;"><legend>Tag Cloud</legend>
	<?php $_from = $this->_tpl_vars['cloud']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tag'] => $this->_tpl_vars['item']):
?>
	  <?php $this->assign('tag_escaped', ((is_array($_tmp=$this->_tpl_vars['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url'))); ?>
	  <span style="font-size:<?php echo $this->_tpl_vars['item']; ?>
%"><a href="<?php echo smarty_function_xoops_cooluri(array('dirname' => $this->_tpl_vars['mod_config']['tag_dirname'],'dataname' => 'tag','action' => 'view','query' => "tag=".($this->_tpl_vars['tag_escaped'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['tag'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</a></span>
	<?php endforeach; endif; unset($_from); ?>
</fieldset>
</div>
<?php endif; ?>