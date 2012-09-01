<?php /* Smarty version 2.6.26, created on 2012-09-01 07:10:13
         compiled from Z:/xampp/htdocs/pack2011/common/ogp/meta_add.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'Z:/xampp/htdocs/pack2011/common/ogp/meta_add.html', 18, false),array('modifier', 'strip', 'Z:/xampp/htdocs/pack2011/common/ogp/meta_add.html', 18, false),array('modifier', 'replace', 'Z:/xampp/htdocs/pack2011/common/ogp/meta_add.html', 18, false),array('modifier', 'explode', 'Z:/xampp/htdocs/pack2011/common/ogp/meta_add.html', 20, false),)), $this); ?>
<meta charset="<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<?php echo ''; ?><?php echo '<title>'; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['xoops_dirname'] == ""): ?><?php echo '- '; ?><?php echo $this->_tpl_vars['xoops_slogan']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo '- '; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@XOOPS_ROOT_PATH)."/common/ogp/moduletitle.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '</title>'; ?>

<?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => (@XOOPS_ROOT_PATH)."/common/ogp/server_url_is.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?><?php echo ''; ?><?php echo ''; ?><?php echo ''; ?><?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@XOOPS_ROOT_PATH)."/common/ogp/meta_info.html", 'smarty_include_vars' => array('cname' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['category_path'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp, "") : smarty_modifier_strip($_tmp, "")))) ? $this->_run_mod_handler('replace', true, $_tmp, "メイン", "") : smarty_modifier_replace($_tmp, "メイン", "")))) ? $this->_run_mod_handler('replace', true, $_tmp, ":", "") : smarty_modifier_replace($_tmp, ":", "")))) ? $this->_run_mod_handler('replace', true, $_tmp, "&nbsp;", "") : smarty_modifier_replace($_tmp, "&nbsp;", "")))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('metainfo', ob_get_contents()); ob_end_clean();
 ?><?php echo ''; ?><?php echo ''; ?><?php $this->assign('meta_info', ((is_array($_tmp="||")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['metainfo']) : explode($_tmp, $this->_tpl_vars['metainfo']))); ?><?php echo ''; ?><?php if ($this->_tpl_vars['meta_info']['0']): ?><?php echo ''; ?><?php $this->assign('xoops_pagetitle', $this->_tpl_vars['meta_info']['0']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['meta_info']['1']): ?><?php echo ''; ?><?php $this->assign('xoops_meta_keywords', $this->_tpl_vars['meta_info']['1']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['meta_info']['2']): ?><?php echo ''; ?><?php $this->assign('xoops_meta_description', $this->_tpl_vars['meta_info']['2']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<meta property="og:type" content="website">
<?php echo '<meta property="og:title" content="'; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['xoops_dirname'] == ""): ?><?php echo ','; ?><?php echo $this->_tpl_vars['xoops_slogan']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ','; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@XOOPS_ROOT_PATH)."/common/ogp/moduletitle.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?>

<meta property="og:image" content="<?php if ($this->_tpl_vars['photo']['ext']): ?><?php echo $this->_tpl_vars['photo']['imgsrc_photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['xoops_url']; ?>
/common/ogp/user.gif<?php endif; ?>">
<meta property="og:site_name" content="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
">
<meta property="og:description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
">
<?php echo '<meta name="keywords" content="'; ?><?php if (! $this->_tpl_vars['xoops_dirname'] == ""): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@XOOPS_ROOT_PATH)."/common/ogp/moduletitle.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '" />'; ?>

<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
" />