<?php /* Smarty version 2.6.26, created on 2012-09-01 07:10:13
         compiled from Z:/xampp/htdocs/pack2011/common/ogp/meta_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'Z:/xampp/htdocs/pack2011/common/ogp/meta_info.html', 13, false),array('modifier', 'strip', 'Z:/xampp/htdocs/pack2011/common/ogp/meta_info.html', 13, false),array('modifier', 'mb_substr', 'Z:/xampp/htdocs/pack2011/common/ogp/meta_info.html', 14, false),)), $this); ?>
<?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['xoops_dirname'] == 'mylinks'): ?><?php echo ''; ?><?php if ($_GET['cid'] == 1): ?><?php echo 'xoopsモジュールの開発，配布（公開）サイトの情報－'; ?><?php echo $this->_tpl_vars['cname']; ?><?php echo '||キーワード１||xoopsモジュールを開発し，公開しているサイトを集めました。どんなモジュールがあって，どんなことができるのかを知りたいときに役立つと思います。'; ?><?php elseif ($_GET['cid'] == 2): ?><?php echo 'xoopsのインストール，設定等に関する解説およびダウンロードサイトの情報－'; ?><?php echo $this->_tpl_vars['cname']; ?><?php echo '||キーワード２||xoopsにはじめて触れる方が迷い，悩むと思われるインストール方法や，システム管理の設定方法などを詳しく説明しているサイトの紹介です。意外な情報を見つけることも多いですね。'; ?><?php else: ?><?php echo 'おすすめリンク集：xoopsおよび関連技術サイトへのリンク集です。||キーワード３||xoops，テーマ・モジュール配布サイト，HTMLやCSSの解説サイト，xoopsの管理・運用・カスタマイズに便利なソフト，学習に欠かせない書籍などの資料の紹介などをしています。'; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'gnavi'): ?><?php echo ''; ?><?php if ($this->_tpl_vars['photo']['cid'] == '1'): ?><?php echo ''; ?><?php $this->assign('gnavibody', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['photo']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp))); ?><?php echo ''; ?><?php $this->assign('xoops_meta_description', ((is_array($_tmp=$this->_tpl_vars['gnavibody'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, '0', '160') : mb_substr($_tmp, '0', '160'))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'd3forum'): ?><?php echo ''; ?><?php echo ''; ?><?php if (substr ( $this->_tpl_vars['xoops_requesturi'] , -9 ) == '/index.php' || substr ( $this->_tpl_vars['xoops_requesturi'] , -1 ) == '/'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['category']['title']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['category']['desc']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'd3diary'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'wordpress'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'xpress'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'xpwiki'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'webphoto'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'piCal'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'pico'): ?><?php echo ''; ?><?php $this->assign('mybody', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['content']['body'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp))); ?><?php echo ''; ?><?php $this->assign('xoops_meta_description', ((is_array($_tmp=$this->_tpl_vars['mybody'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, '0', '160') : mb_substr($_tmp, '0', '160'))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'ccenter'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == 'bulletin'): ?><?php echo ''; ?><?php if (substr ( $this->_tpl_vars['xoops_requesturi'] , -9 ) == '/index.php' || substr ( $this->_tpl_vars['xoops_requesturi'] , -1 ) == '/'): ?><?php echo 'ここはお知らせのトップページです。||ここはお知らせのキーワード||ここにはお知らせの説明を書きましょう'; ?><?php else: ?><?php echo ''; ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['xoops_dirname'] == ""): ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_keywords']; ?><?php echo '||'; ?><?php echo $this->_tpl_vars['xoops_meta_description']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
