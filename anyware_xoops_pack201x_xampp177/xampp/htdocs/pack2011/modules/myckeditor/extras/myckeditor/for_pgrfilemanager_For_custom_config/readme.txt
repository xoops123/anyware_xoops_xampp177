2011/07/31 domifara

これは、pgrfilemanagerマネージャーの
複数の設定を画面上で切り替えて使うためものです。

複数のルートディレクトリまたは、違う設定に
切り替えながら画像を選択することが可能になります。


 /myckeditor/pgrfilemanager/php/ディレクトリの中に入れて使用します。

config.inc1.dist.php
config.inc2.dist.php
config.inc3.dist.php
とりあえず

3パターンの設定を画面上で選べるようにしています。
数字の小さい順に必要な数だけ入れてください。
一つでも追加すれば、pgrfilemanagerマネージャーを起動したときに
config選択のコンポボックスが表示されます。

エディターで、
26行目からの下記の設定がプリセット可能です

内容はmyckeditorの一般設定の項目と同じですので、そちらを参考にしてください

下記が初期値です。
[quote]
//---------------------------------------------------------------------
/*
*TODO If this is SECOND CONFIG ,You need edit config paramater
*/
//Use [siteimg] in ImageManager Integration  : true or false
$cnf_usesiteimg = false;

//Automatically shrinks in GD or ImageMagick after upload  : true or false
$resizebyimagemagick = true;

//Automatically shrinks in GD or ImageMagick after upload : int 480 (at 10-1024)
$resizepixels = 480;

//pgrfilemanager Package treating images :string 'GD' or 'ImageMagick'
$pgrthumbmode = 'GD';

//base root directory path :string exp. 'W:/www/xcl22/uploads/fckeditor'
$cnf_rootpath = XOOPS_ROOT_PATH.'/uploads/fckeditor';

//base root directory url :string exp. 'http://localhost/xcl22/uploads/fckeditor'
$cnf_rooturl = XOOPS_URL.'/uploads/fckeditor';

//cache directory path  :string exp. 'W:/www/xcl22/uploads/fckeditor/cache'
$cnf_cachepath = XOOPS_ROOT_PATH.'/uploads/fckeditor/cache';

//cache directory url :string exp. 'http://localhost/xcl22/uploads/fckeditor/cache'
$cnf_cacheurl = XOOPS_URL.'/uploads/fckeditor/cache';

//use mod_rewrite .htaccess : true or false
$userewrite = false;

//use Images trustmode  : true or false
$usetrustim = false;

//trust_path base
define( 'FCK_TRUSTUPLOAD_PATH_BASE' , XOOPS_TRUST_PATH.'/uploads/myckeditor' ) ;
define( 'FCK_TRUSTCACHE_PATH_BASE' , XOOPS_TRUST_PATH.'/uploads/myckeditor/cache' ) ;

//---------------------------------------------------------------------
[/quote]

[注意]
他の行変更しないようにしてください。

base root directory path を別のディレクトリにすることが可能ですが、
このベースのディレクトリだけはあらかじめ、FTPソフトで書き込み可で作成しておいてください。

また、このベースのディレクトリを追加した場合は、このベースのディレクトリへのURLも変更が必要です。



