<?php /* Smarty version 2.6.26, created on 2012-09-01 07:13:37
         compiled from Z:/xampp/htdocs/pack2011/common/ogp/moduletitle.html */ ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['xoops_dirname'] == 'webphoto'): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['xoops_breadcrumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['item']['url']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['name']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php echo $this->_tpl_vars['title_bread_crumb']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'piCal'): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['xoops_breadcrumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['name']; ?><?php echo ','; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'ccenter'): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['xoops_breadcrumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['loop']['iteration']++;
?><?php echo ''; ?><?php if (($this->_foreach['loop']['iteration'] <= 1)): ?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['name']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['xoops_breadcrumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['loop']['iteration']++;
?><?php echo ''; ?><?php if (($this->_foreach['loop']['iteration'] <= 1)): ?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['name']; ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php echo $this->_tpl_vars['item']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>