<?php /* Smarty version 2.6.26, created on 2012-09-01 07:19:39
         compiled from db:bulletin_article.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'd3comment', 'db:bulletin_article.html', 54, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pankuzu']): ?><?php echo '<div style="text-align: left;">'; ?><?php $_from = $this->_tpl_vars['pankuzu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pankuzu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pankuzu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['p']):
        $this->_foreach['pankuzu']['iteration']++;
?><?php echo ''; ?><?php if (($this->_foreach['pankuzu']['iteration'] == $this->_foreach['pankuzu']['total'])): ?><?php echo ''; ?><?php echo $this->_tpl_vars['p']['topic_title']; ?><?php echo ''; ?><?php else: ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mydirurl']; ?><?php echo '/index.php?storytopic='; ?><?php echo $this->_tpl_vars['p']['topic_id']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['p']['topic_title']; ?><?php echo '</a>&nbsp;&gt;&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pagenav']): ?><?php echo '<div style="text-align: left;">Page '; ?><?php echo $this->_tpl_vars['pagenav']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo '<div>'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_item.html", 'smarty_include_vars' => array('story' => $this->_tpl_vars['story'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '</div><div style="text-align: left;">'; ?><?php if ($this->_tpl_vars['pagenav']): ?><?php echo 'Page '; ?><?php echo $this->_tpl_vars['pagenav']; ?><?php echo ''; ?><?php endif; ?><?php echo '</div>'; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_relations.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_category.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['disp_print_icon'] || $this->_tpl_vars['disp_tell_icon']): ?><?php echo '<div style="text-align: right;">'; ?><?php if ($this->_tpl_vars['disp_print_icon']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mydirurl']; ?><?php echo '/index.php?page=print&amp;storyid='; ?><?php echo $this->_tpl_vars['story']['id']; ?><?php echo '" title="'; ?><?php echo @_MD_PRINTERFRIENDLY; ?><?php echo '"><img src="'; ?><?php echo $this->_tpl_vars['mydirurl']; ?><?php echo '/images/print.gif" border="0" alt="'; ?><?php echo @_MD_PRINTERFRIENDLY; ?><?php echo '" /></a>&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['disp_tell_icon']): ?><?php echo '<a target="_top" href="'; ?><?php echo $this->_tpl_vars['mail_link']; ?><?php echo '" title="'; ?><?php echo @_MD_SENDSTORY; ?><?php echo '"><img src="'; ?><?php echo $this->_tpl_vars['mydirurl']; ?><?php echo '/images/friend.gif" border="0" alt="'; ?><?php echo @_MD_SENDSTORY; ?><?php echo '" /></a>'; ?><?php endif; ?><?php echo '</div>'; ?><?php endif; ?><?php echo '<br />'; ?><?php if ($this->_tpl_vars['mod_config']['comment_dirname'] != '' && $this->_tpl_vars['mod_config']['comment_forum_id'] > 0): ?><?php echo ''; ?><?php echo smarty_function_d3comment(array('class' => 'BulletinD3commentStory','mydirname' => $this->_tpl_vars['mydirname']), $this);?><?php echo ''; ?><?php else: ?><?php echo '<!-- begin comments area --><div style="text-align: center;">'; ?><?php echo $this->_tpl_vars['commentsnav']; ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang_notice']; ?><?php echo '</div><div><!-- start comments loop -->'; ?><?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '<!-- end comments loop --></div><!-- end comments area -->'; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>