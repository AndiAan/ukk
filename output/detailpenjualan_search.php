<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
add_nocache_headers();

require_once("classes/searchclause.php");
require_once("include/detailpenjualan_variables.php");
require_once("classes/searchcontrol.php");
require_once("classes/advancedsearchcontrol.php");
require_once("classes/panelsearchcontrol.php");







$layout = new TLayout("search_bootstrap", "DeliciousOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "detailpenjualan_search";
$layout->blocks["top"] = array();
$layout->containers["searchpage"] = array();
$layout->container_properties["searchpage"] = array(  );
$layout->containers["searchpage"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header" );
$layout->containers["header"] = array();
$layout->container_properties["header"] = array(  );
$layout->containers["header"][] = array("name"=>"bssearchheader",
	"block"=>"searchheader", "substyle"=>1  );

$layout->skins["header"] = "";


$layout->skins["searchpage"] = "";

$layout->blocks["top"][] = "searchpage";
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"bssearchfields",
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "";

$layout->blocks["top"][] = "fields";
$layout->containers["bottombuttons"] = array();
$layout->container_properties["bottombuttons"] = array(  );
$layout->containers["bottombuttons"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"bbuttons" );
$layout->containers["bbuttons"] = array();
$layout->container_properties["bbuttons"] = array(  );
$layout->containers["bbuttons"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"leftbuttons" );
$layout->containers["leftbuttons"] = array();
$layout->container_properties["leftbuttons"] = array(  );
$layout->containers["leftbuttons"][] = array("name"=>"srchbuttons",
	"block"=>"searchbuttons", "substyle"=>1  );

$layout->skins["leftbuttons"] = "";


$layout->skins["bbuttons"] = "";


$layout->skins["bottombuttons"] = "";

$layout->blocks["top"][] = "bottombuttons";
$page_layouts["detailpenjualan_search"] = $layout;




require_once('include/xtempl.php');
require_once('classes/searchpage.php');
require_once('classes/searchpage_dash.php');
$xt = new Xtempl();

// id that used to add to controls names
$id = postvalue("id");
$id = $id ? $id : 1;
	
$mode = SEARCH_SIMPLE;
if( postvalue("mode") == "dashsearch" )
	$mode = SEARCH_DASHBOARD;
else if( postvalue("mode") == "inlineLoadCtrl" )
{
	// load search panel control
	$mode = SEARCH_LOAD_CONTROL;
	$layoutVersion = postvalue("layoutVersion");
}

$params = array();
$params["id"] = $id;
$params['xt'] = &$xt;
$params["mode"] = $mode;
$params['chartName'] = $cname;
$params['reportName'] = $rname;
$params['tName'] = $strTableName;
$params['pageType'] = PAGE_SEARCH;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'detailpenjualan';
$params['layoutVersion'] = $layoutVersion;

$params['searchControllerId'] = postvalue('searchControllerId') ? postvalue('searchControllerId') : $id;
$params['ctrlField'] = postvalue('ctrlField');

$params['needSettings'] = postvalue('isNeedSettings');

if( $mode == SEARCH_DASHBOARD )
{
	$params["dashTName"] = postvalue("table");
	$params["dashElementName"] = postvalue("dashelement");
}

// e.g. crosstable params
$params["extraPageParams"] = SearchPage::getExtraPageParams();


$pageObject = new SearchPage($params);

if( $mode == SEARCH_LOAD_CONTROL )
{
	$pageObject->displaySearchControl();
	return;
}

$pageObject->init();
$pageObject->process();
?>