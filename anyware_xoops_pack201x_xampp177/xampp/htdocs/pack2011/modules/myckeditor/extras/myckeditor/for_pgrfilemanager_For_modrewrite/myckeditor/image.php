<?php
/**
 * @file image.php
 * @brief The page controller in the directory
 * @package myckeditor
 * @version $Id: ver0.07 2011/08/01 19:08:00 domifara $
 */

require_once "../../mainfile.php";
if (!defined('XOOPS_MODULE_PATH')) {
	define('XOOPS_MODULE_PATH', XOOPS_ROOT_PATH . '/modules');
}
if (!defined('XOOPS_MODULE_URL')) {
	define('XOOPS_MODULE_URL', XOOPS_URL . '/modules');
}
$_GET['type'] = 'Image';
require_once dirname(__FILE__) . '/pgrfilemanager/php/config_function.inc.dist.php';
//require_once dirname(__FILE__) . '/pgrfilemanager/php/config_auth.inc.dist.php';
define( 'FCK_ISADMIN' , false ) ;
define( 'FCK_CANUPLOAD' , false ) ;
$q_config = intval(preg_replace( '?[^0-9]?' , '' , @$_GET['config'] )) ;
if(empty($q_config)){
	require_once dirname(__FILE__) . '/pgrfilemanager/php/config.inc.dist.php';
}else{
	if ( file_exists( dirname(__FILE__) . '/pgrfilemanager/php/config.inc'.intval($q_config).'.dist.php') ) {
		require_once dirname(__FILE__) . '/pgrfilemanager/php/config.inc'.intval($q_config).'.dist.php';
	}else{
		exit('#');
	}
}

$mydirname = basename(dirname(__FILE__));

$q_path = preg_replace( '?[^a-zA-Z0-9_\.]?' , '' , @$_GET['path'] ) ;

$q_extension = strtolower( substr( strrchr( $q_path , '.' ) , 1 ) ) ;
$path = str_replace('.'.$q_extension,'',$q_path) ;

$path= DecodeFileName($path);
$extension = strtolower( substr( strrchr( $path , '.' ) , 1 ) ) ;
if ( $q_extension !== $extension ){
	exit();
}
if ( ! in_array($extension , array('gif','jpg','jpeg','png')) ){
	exit();
}
switch( $extension )
{
	case "gif": $ctype="image/gif"; break;
	case "png": $ctype="image/png"; break;
	case "jpeg":
	case "jpg": $ctype="image/jpeg"; break;
	default: exit;
}

if ( empty($path) ){
	exit();
}
$dir = dirname($path);
if ($dir == '.' ){
	$dir = '/';
}else{
	if ( substr($dir , 0, 1) !== '/'){
		$dir = '/' . $dir ;
	}

	if ( ! checkDirName($dir)){
		exit();
	}
}
$filrname= basename($path);
if ( ! checkFileName($filrname)){
	exit();
}
$filepath = realpath(FCK_UPLOAD_PATH_BASE .  $dir.  '/'.$filrname);
if ( ! checkRealPathName($filepath)){
	$filepath = XOOPS_MODULE_PATH .'/'.$mydirname.'/pgrfilemanager/img/blank.jpg';
}elseif ( empty($filepath) ){
	$filepath = XOOPS_MODULE_PATH .'/'.$mydirname.'/pgrfilemanager/img/blank.jpg';
}elseif(!file_exists($filepath)) {
	$filepath = XOOPS_MODULE_PATH .'/'.$mydirname.'/pgrfilemanager/img/blank.jpg';
}

header('Content-Type: ' . $ctype);
readfile($filepath);

?>