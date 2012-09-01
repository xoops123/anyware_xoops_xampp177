<?php
/**
 * A simple description for this script
 *
 * PHP Version 5.2.4 or Upper version
 *
 * @package    Jquery
 * @author     Hidehito NOZAWA aka Suin <http://suin.asia/> ,remodeling version domifara
 * @copyright  2010 Hidehito NOZAWA
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU GPL v2 or later
 *
*************
XOOPS_ROOT_PATH.'/site_custom.ini.php'
*************
[jQuery]
usePrototype=0
;prototypeUrl= url of prototype.js library file
;funcNamePrefix=j
;GoogleApiKey=
;MainVersion=1 or url of jQuery Main library file
;UIVersion=1 or url of jQuery UI library file
;DefaultStylesheet = 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/smoothness/jquery-ui.css';
;feed_url = url of RSS feed

*/

if ( !defined('XOOPS_ROOT_PATH') ) exit;

class Jquery extends XCube_ActionFilter
{
	function preBlockFilter()
	{
		if ( !preg_match('/XOOPS Cube Legacy 2\.1/', XOOPS_VERSION) ) return;

		$jQuery = new Jquery_HeaderScript();
		$this->mRoot->mContext->setAttribute('headerScript',$jQuery);
		XCube_DelegateUtils::call('Site.JQuery.AddFunction', new XCube_Ref($jQuery));
	}

	function postFilter()
	{
		if ( !preg_match('/XOOPS Cube Legacy 2\.1/', XOOPS_VERSION) ) return;

		$jQuery = $this->mRoot->mContext->getAttribute('headerScript');
		XCube_DelegateUtils::call('Site.JQuery.AddFunction', new XCube_Ref($jQuery));
		$this->mRoot->mDelegateManager->add('Legacy_RenderSystem.BeginRender', array(&$this, 'hook'));
	}
	function hook(&$xoopsTpl)
	{
		if (array_key_exists('xoops_module_header',$xoopsTpl->_tpl_vars)
			|| basename(dirname($_SERVER['SCRIPT_FILENAME'])) == basename(XOOPS_ROOT_PATH) ) {
			if (!defined('_JQUERY_PEROLAD_LOADED')) {
				$jQuery = $this->mRoot->mContext->getAttribute('headerScript');
				$moduleHeader = $xoopsTpl->get_template_vars('xoops_module_header');
				$moduleHeader =  $jQuery->createLibraryTag() . $moduleHeader . $jQuery->createOnloadFunctionTag();
				$xoopsTpl->assign('xoops_module_header', $moduleHeader);
				define('_JQUERY_PEROLAD_LOADED', 1);
			}
		}
	}
}

class Jquery_HeaderScript
{
	//Legacy legacyRender Site Config site_custom.ini.php

	var $_mType = 'google';
	var $_mCore = "1";	//google japi version or  url of jQuery Main library file
	var $_mUi = "1";

	var $_mLibrary = array();
	var $_mScript = array();
	var $_mOnloadScript = array();
	var $_mStylesheet = array();
	var $_mLink = array();

	var $mUsePrototype = false;	//use prototype.js ?
	var $mFuncNamePrefix = "";	//jQuery $() function's name prefix for compatibility with prototype.js

    /**
     * __construct
     *
     * @param   void
     *
     * @return  void
    **/
	public function __construct()
	{
		$root = XCube_Root::getSingleton();

		//setup jQuery library location
		$MainVersion = $root->getSiteConfig('jQuery', 'MainVersion');
		if ( $MainVersion ){
			$this->_mCore = $MainVersion;
		}else{
			$this->_mCore = '1';
		}
		$UIVersion = $root->getSiteConfig('jQuery', 'UIVersion');
		if ( $UIVersion ){
			$this->_mUi = $UIVersion;
		}else{
			$this->_mUi = '1';
		}

		$core = str_replace('.', '', $this->_mCore);
		$this->_mType = is_numeric($core) ? 'google' : 'local';

		//use compatibility mode with prototype.js ?
		if($root->getSiteConfig('jQuery', 'usePrototype')==1){
			$this->mUsePrototype = true;
			$this->mPrototypeUrl = $root->getSiteConfig('jQuery', 'prototypeUrl');
			$this->mFuncNamePrefix = $root->getSiteConfig('jQuery', 'funcNamePrefix');
		}

		$this->_setupDefaultStylesheet();

	}


	/**
	 * _setupDefaultStylesheet
	 *
	 * @param	void
	 *
	 * @return	void
	**/
	public function _setupDefaultStylesheet()
	{
		$DefaultStylesheet = XCube_Root::getSingleton()->getSiteConfig('jQuery', 'DefaultStylesheet');
		if ( $DefaultStylesheet === ''  ){
			$DefaultStylesheet = false;
		}elseif ( empty($DefaultStylesheet) ){
			$DefaultStylesheet = 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/smoothness/jquery-ui.css';
		}
		if($DefaultStylesheet) $this->addStylesheet($DefaultStylesheet, false);
	}

	/**
	 * addLibrary
	 *
	 * @param	string $url
	 * @param	bool $xoopsUrl
	 *
	 * @return	void
	**/
	public function addLibrary($url, $xoopsUrl=true)
	{
		$libUrl = ($xoopsUrl==true) ? XOOPS_URL. $url : $url;
		if(! in_array($libUrl, $this->_mLibrary)){
			 $this->_mLibrary[] = $libUrl;
		}
	}

	/**
	 * addStylesheet
	 *
	 * @param	string $url
	 * @param	bool $xoopsUrl
	 *
	 * @return	void
	**/
	public function addStylesheet($url, $xoopsUrl=true)
	{
		$libUrl = ($xoopsUrl==true) ? XOOPS_URL. $url : $url;
		if(! in_array($libUrl, $this->_mStylesheet)){
			 $this->_mStylesheet[] = $libUrl;
		}
	}

	/**
	 * addScript
	 *
	 * @param	string $script
	 * @param	bool $isOnloadFunction
	 *
	 * @return	void
	**/
	public function addScript($script, $isOnloadFunction=true)
	{
		if($isOnloadFunction==true){
			$this->_mOnloadScript[] = $script;
		}
		else{
			$this->_mScript[] = $script;
		}
	}

	/**
	 * getLibraryArr
	 *
	 * @param	void
	 *
	 * @return	string[]
	**/
	public function getLibraryArr()
	{
		return $this->_mLibrary;
	}

	/**
	 * getScriptArr
	 *
	 * @param	bool	$isOnloadFunction
	 *
	 * @return	string[]
	**/
	public function getScriptArr($isOnloadFunction=true)
	{
		if($isOnloadFunction==true){
			return $this->_mOnloadScript;
		}
		else{
			return $this->_mScript;
		}
	}

	/**
	 * addLink
	 *
	 * @param	string	$rel
	 * @param	string	$href
	 * @param	string	$type
	 * @param	string	$title
	 *
	 * @return	void
	**/
	public function addLink(/*** string ***/ $rel, /*** string ***/ $href, /*** string ***/ $type, /*** string ***/ $title=null)
	{
		$this->_mLink[] = array('rel'=>$rel, 'type'=>$type, 'title'=>$title, 'href'=>$href);
	}


	/**
	 * createLibraryTag
	 *
	 * @param	void
	 *
	 * @return	string
	**/
	public function createLibraryTag()
	{
		$html = "";

		//prototype.js compatibility
		if($this->mUsePrototype){
			$html .= '<script type="text/javascript" src="'. $this->mPrototypeUrl .'"></script>';
		}

		//load main library
		if($this->_mType=='google'){
			$html .= $this->_loadGoogleJQueryLibrary();
		}
		elseif($this->_mType=='local'){
			$html .= $this->_loadLocalJQueryLibrary();
		}

		//load plugin libraries
		foreach($this->_mLibrary as $lib){
			$html .= "<script type=\"text/javascript\" src=\"". $lib ."\"></script>\n";
		}

		//load css
		foreach($this->_mStylesheet as $css){
			$html .= "<link type=\"text/css\" rel=\"stylesheet\" href=\"". $css ."\" />\n";
		}

		//load link
		foreach($this->_mLink as $link){
			$title = $link['title'] ? 'title="'.$link['title'].'" ' : null;
			$html .= sprintf("<link type=\"%s\" rel=\"%s\" href=\"%s\" $title/>\n", $link['type'], $link['rel'], $link['href']);
		}

		//set rss auto-discovery
		$feed_url = XCube_Root::getSingleton()->getSiteConfig('jQuery', 'feed_url');
		if ( $feed_url ){
			$html .= sprintf('<link rel="alternate" type="application/rss+xml" title="rss" href="%s" />'."\n", $feed_url);
		}

		return $html;
	}

	/**
	 * _loadGoogleJQueryLibrary
	 *
	 * @param	void
	 *
	 * @return	string
	**/
	protected function _loadGoogleJQueryLibrary()
	{
		$apiKey = XCube_Root::getSingleton()->getSiteConfig('jQuery', 'GoogleApiKey');
		$apiKey = (isset($apiKey)) ? '?key='.$apiKey : null;
		return '<script type="text/javascript" src="http://www.google.com/jsapi'.$apiKey.'"></script>
<script type="text/javascript"><!--
google.load("language", "1");
google.load("jquery", "'. $this->_mCore .'");
google.load("jqueryui", "'. $this->_mUi .'");
//-->
</script>
';
	}

	/**
	 * _loadLocalJQueryLibrary
	 *
	 * @param	void
	 *
	 * @return	string
	**/
	protected function _loadLocalJQueryLibrary()
	{
		$html = "";
		if($this->_mCore) $html .= '<script type="text/javascript" src="'. $this->_mCore .'"></script>';
		if($this->_mUi) $html .= '<script type="text/javascript" src="'. $this->_mUi .'"></script>';

		return $html;
	}

	/**
	 * createOnloadFunctionTag
	 *
	 * @param	void
	 *
	 * @return	string
	**/
	public function createOnloadFunctionTag()
	{
		$html = null;
		if(count($this->_mOnloadScript)>0||count($this->_mScript)>0){
			$html = "<script type=\"text/javascript\"><!--\n";
			if($this->_mType == "google"){
				$html .= "google.setOnLoadCallback(function() {\n";
			}
			if($this->mUsePrototype == true){
				$html .= "jQuery.noConflict();\n";
			}
			$html .= "jQuery(function($){\n";
			$html .= $this->_makeScript(true);
			if($this->_mType == "google"){
				$html .= "\n});\n";
			}
			$html .= "\n});\n";
			$html .= $this->_makeScript(false);
			$html .= "//--></script>"."\n";
		}
		return $html;
	}

	/**
	 * _makeScript
	 *
	 * @param	bool	$isOnloadFunction
	 *
	 * @return	string
	**/
	protected function _makeScript($isOnloadFunction=true)
	{
		$html = null;
		$scriptArr = ($isOnloadFunction===true) ? $this->_mOnloadScript : $this->_mScript;
		foreach($scriptArr as $script){
			$html .= $this->_convertFuncName($script);
		}
		return $html;
	}

	/**
	 * _convertFuncName
	 *
	 * @param	string $script
	 *
	 * @return	string
	**/
	protected function _convertFuncName($script)
	{
		if($this->mFuncNamePrefix){
			$script = str_replace("$(", $this->mFuncNamePrefix."$(", $script);
		}
		return $script;
	}


}
?>