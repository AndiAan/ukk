<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapelanggan = array();
	$tdatapelanggan[".truncateText"] = true;
	$tdatapelanggan[".NumberOfChars"] = 80;
	$tdatapelanggan[".ShortName"] = "pelanggan";
	$tdatapelanggan[".OwnerID"] = "";
	$tdatapelanggan[".OriginalTable"] = "pelanggan";

//	field labels
$fieldLabelspelanggan = array();
$fieldToolTipspelanggan = array();
$pageTitlespelanggan = array();
$placeHolderspelanggan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspelanggan["English"] = array();
	$fieldToolTipspelanggan["English"] = array();
	$placeHolderspelanggan["English"] = array();
	$pageTitlespelanggan["English"] = array();
	$fieldLabelspelanggan["English"]["PelangganID"] = "Pelanggan ID";
	$fieldToolTipspelanggan["English"]["PelangganID"] = "";
	$placeHolderspelanggan["English"]["PelangganID"] = "";
	$fieldLabelspelanggan["English"]["NamaPelanggan"] = "Nama Pelanggan";
	$fieldToolTipspelanggan["English"]["NamaPelanggan"] = "";
	$placeHolderspelanggan["English"]["NamaPelanggan"] = "";
	$fieldLabelspelanggan["English"]["Alamat"] = "Alamat";
	$fieldToolTipspelanggan["English"]["Alamat"] = "";
	$placeHolderspelanggan["English"]["Alamat"] = "";
	$fieldLabelspelanggan["English"]["NomorTelepon"] = "Nomor Telepon";
	$fieldToolTipspelanggan["English"]["NomorTelepon"] = "";
	$placeHolderspelanggan["English"]["NomorTelepon"] = "";
	if (count($fieldToolTipspelanggan["English"]))
		$tdatapelanggan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspelanggan[""] = array();
	$fieldToolTipspelanggan[""] = array();
	$placeHolderspelanggan[""] = array();
	$pageTitlespelanggan[""] = array();
	$fieldLabelspelanggan[""]["PelangganID"] = "Pelanggan ID";
	$fieldToolTipspelanggan[""]["PelangganID"] = "";
	$placeHolderspelanggan[""]["PelangganID"] = "";
	$fieldLabelspelanggan[""]["NamaPelanggan"] = "Nama Pelanggan";
	$fieldToolTipspelanggan[""]["NamaPelanggan"] = "";
	$placeHolderspelanggan[""]["NamaPelanggan"] = "";
	$fieldLabelspelanggan[""]["Alamat"] = "Alamat";
	$fieldToolTipspelanggan[""]["Alamat"] = "";
	$placeHolderspelanggan[""]["Alamat"] = "";
	$fieldLabelspelanggan[""]["NomorTelepon"] = "Nomor Telepon";
	$fieldToolTipspelanggan[""]["NomorTelepon"] = "";
	$placeHolderspelanggan[""]["NomorTelepon"] = "";
	if (count($fieldToolTipspelanggan[""]))
		$tdatapelanggan[".isUseToolTips"] = true;
}


	$tdatapelanggan[".NCSearch"] = true;



$tdatapelanggan[".shortTableName"] = "pelanggan";
$tdatapelanggan[".nSecOptions"] = 0;
$tdatapelanggan[".recsPerRowPrint"] = 1;
$tdatapelanggan[".mainTableOwnerID"] = "";
$tdatapelanggan[".moveNext"] = 1;
$tdatapelanggan[".entityType"] = 0;

$tdatapelanggan[".strOriginalTableName"] = "pelanggan";

	



$tdatapelanggan[".showAddInPopup"] = false;

$tdatapelanggan[".showEditInPopup"] = false;

$tdatapelanggan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapelanggan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapelanggan[".fieldsForRegister"] = array();

$tdatapelanggan[".listAjax"] = false;

	$tdatapelanggan[".audit"] = false;

	$tdatapelanggan[".locking"] = false;

$tdatapelanggan[".edit"] = true;
$tdatapelanggan[".afterEditAction"] = 1;
$tdatapelanggan[".closePopupAfterEdit"] = 1;
$tdatapelanggan[".afterEditActionDetTable"] = "";

$tdatapelanggan[".add"] = true;
$tdatapelanggan[".afterAddAction"] = 1;
$tdatapelanggan[".closePopupAfterAdd"] = 1;
$tdatapelanggan[".afterAddActionDetTable"] = "";

$tdatapelanggan[".list"] = true;



$tdatapelanggan[".reorderRecordsByHeader"] = true;


$tdatapelanggan[".exportFormatting"] = 2;
$tdatapelanggan[".exportDelimiter"] = ",";
		
$tdatapelanggan[".view"] = true;

$tdatapelanggan[".import"] = true;

$tdatapelanggan[".exportTo"] = true;

$tdatapelanggan[".printFriendly"] = true;

$tdatapelanggan[".delete"] = true;

$tdatapelanggan[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapelanggan[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapelanggan[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapelanggan[".searchSaving"] = false;
//

$tdatapelanggan[".showSearchPanel"] = true;
		$tdatapelanggan[".flexibleSearch"] = true;

$tdatapelanggan[".isUseAjaxSuggest"] = true;

$tdatapelanggan[".rowHighlite"] = true;





$tdatapelanggan[".ajaxCodeSnippetAdded"] = false;

$tdatapelanggan[".buttonsAdded"] = false;

$tdatapelanggan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapelanggan[".isUseTimeForSearch"] = false;





$tdatapelanggan[".allSearchFields"] = array();
$tdatapelanggan[".filterFields"] = array();
$tdatapelanggan[".requiredSearchFields"] = array();

$tdatapelanggan[".allSearchFields"][] = "PelangganID";
	$tdatapelanggan[".allSearchFields"][] = "NamaPelanggan";
	$tdatapelanggan[".allSearchFields"][] = "Alamat";
	$tdatapelanggan[".allSearchFields"][] = "NomorTelepon";
	

$tdatapelanggan[".googleLikeFields"] = array();
$tdatapelanggan[".googleLikeFields"][] = "PelangganID";
$tdatapelanggan[".googleLikeFields"][] = "NamaPelanggan";
$tdatapelanggan[".googleLikeFields"][] = "Alamat";
$tdatapelanggan[".googleLikeFields"][] = "NomorTelepon";


$tdatapelanggan[".advSearchFields"] = array();
$tdatapelanggan[".advSearchFields"][] = "PelangganID";
$tdatapelanggan[".advSearchFields"][] = "NamaPelanggan";
$tdatapelanggan[".advSearchFields"][] = "Alamat";
$tdatapelanggan[".advSearchFields"][] = "NomorTelepon";

$tdatapelanggan[".tableType"] = "list";

$tdatapelanggan[".printerPageOrientation"] = 0;
$tdatapelanggan[".nPrinterPageScale"] = 100;

$tdatapelanggan[".nPrinterSplitRecords"] = 40;

$tdatapelanggan[".nPrinterPDFSplitRecords"] = 40;



$tdatapelanggan[".geocodingEnabled"] = false;





$tdatapelanggan[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapelanggan[".pageSize"] = 20;

$tdatapelanggan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapelanggan[".strOrderBy"] = $tstrOrderBy;

$tdatapelanggan[".orderindexes"] = array();

$tdatapelanggan[".sqlHead"] = "SELECT PelangganID,  	NamaPelanggan,  	Alamat,  	NomorTelepon";
$tdatapelanggan[".sqlFrom"] = "FROM pelanggan";
$tdatapelanggan[".sqlWhereExpr"] = "";
$tdatapelanggan[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapelanggan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapelanggan[".arrGroupsPerPage"] = $arrGPP;

$tdatapelanggan[".highlightSearchResults"] = true;

$tableKeyspelanggan = array();
$tableKeyspelanggan[] = "PelangganID";
$tdatapelanggan[".Keys"] = $tableKeyspelanggan;

$tdatapelanggan[".listFields"] = array();
$tdatapelanggan[".listFields"][] = "PelangganID";
$tdatapelanggan[".listFields"][] = "NamaPelanggan";
$tdatapelanggan[".listFields"][] = "Alamat";
$tdatapelanggan[".listFields"][] = "NomorTelepon";

$tdatapelanggan[".hideMobileList"] = array();


$tdatapelanggan[".viewFields"] = array();
$tdatapelanggan[".viewFields"][] = "PelangganID";
$tdatapelanggan[".viewFields"][] = "NamaPelanggan";
$tdatapelanggan[".viewFields"][] = "Alamat";
$tdatapelanggan[".viewFields"][] = "NomorTelepon";

$tdatapelanggan[".addFields"] = array();
$tdatapelanggan[".addFields"][] = "NamaPelanggan";
$tdatapelanggan[".addFields"][] = "Alamat";
$tdatapelanggan[".addFields"][] = "NomorTelepon";

$tdatapelanggan[".masterListFields"] = array();
$tdatapelanggan[".masterListFields"][] = "PelangganID";
$tdatapelanggan[".masterListFields"][] = "NamaPelanggan";
$tdatapelanggan[".masterListFields"][] = "Alamat";
$tdatapelanggan[".masterListFields"][] = "NomorTelepon";

$tdatapelanggan[".inlineAddFields"] = array();
$tdatapelanggan[".inlineAddFields"][] = "NamaPelanggan";
$tdatapelanggan[".inlineAddFields"][] = "Alamat";
$tdatapelanggan[".inlineAddFields"][] = "NomorTelepon";

$tdatapelanggan[".editFields"] = array();
$tdatapelanggan[".editFields"][] = "NamaPelanggan";
$tdatapelanggan[".editFields"][] = "Alamat";
$tdatapelanggan[".editFields"][] = "NomorTelepon";

$tdatapelanggan[".inlineEditFields"] = array();
$tdatapelanggan[".inlineEditFields"][] = "NamaPelanggan";
$tdatapelanggan[".inlineEditFields"][] = "Alamat";
$tdatapelanggan[".inlineEditFields"][] = "NomorTelepon";

$tdatapelanggan[".updateSelectedFields"] = array();
$tdatapelanggan[".updateSelectedFields"][] = "NamaPelanggan";
$tdatapelanggan[".updateSelectedFields"][] = "Alamat";
$tdatapelanggan[".updateSelectedFields"][] = "NomorTelepon";


$tdatapelanggan[".exportFields"] = array();
$tdatapelanggan[".exportFields"][] = "PelangganID";
$tdatapelanggan[".exportFields"][] = "NamaPelanggan";
$tdatapelanggan[".exportFields"][] = "Alamat";
$tdatapelanggan[".exportFields"][] = "NomorTelepon";

$tdatapelanggan[".importFields"] = array();
$tdatapelanggan[".importFields"][] = "PelangganID";
$tdatapelanggan[".importFields"][] = "NamaPelanggan";
$tdatapelanggan[".importFields"][] = "Alamat";
$tdatapelanggan[".importFields"][] = "NomorTelepon";

$tdatapelanggan[".printFields"] = array();
$tdatapelanggan[".printFields"][] = "PelangganID";
$tdatapelanggan[".printFields"][] = "NamaPelanggan";
$tdatapelanggan[".printFields"][] = "Alamat";
$tdatapelanggan[".printFields"][] = "NomorTelepon";


//	PelangganID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PelangganID";
	$fdata["GoodName"] = "PelangganID";
	$fdata["ownerTable"] = "pelanggan";
	$fdata["Label"] = GetFieldLabel("pelanggan","PelangganID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PelangganID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PelangganID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapelanggan["PelangganID"] = $fdata;
//	NamaPelanggan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NamaPelanggan";
	$fdata["GoodName"] = "NamaPelanggan";
	$fdata["ownerTable"] = "pelanggan";
	$fdata["Label"] = GetFieldLabel("pelanggan","NamaPelanggan");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NamaPelanggan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NamaPelanggan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapelanggan["NamaPelanggan"] = $fdata;
//	Alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Alamat";
	$fdata["GoodName"] = "Alamat";
	$fdata["ownerTable"] = "pelanggan";
	$fdata["Label"] = GetFieldLabel("pelanggan","Alamat");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Alamat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Alamat";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapelanggan["Alamat"] = $fdata;
//	NomorTelepon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NomorTelepon";
	$fdata["GoodName"] = "NomorTelepon";
	$fdata["ownerTable"] = "pelanggan";
	$fdata["Label"] = GetFieldLabel("pelanggan","NomorTelepon");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NomorTelepon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NomorTelepon";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapelanggan["NomorTelepon"] = $fdata;


$tables_data["pelanggan"]=&$tdatapelanggan;
$field_labels["pelanggan"] = &$fieldLabelspelanggan;
$fieldToolTips["pelanggan"] = &$fieldToolTipspelanggan;
$placeHolders["pelanggan"] = &$placeHolderspelanggan;
$page_titles["pelanggan"] = &$pageTitlespelanggan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pelanggan"] = array();
//	penjualan
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="penjualan";
		$detailsParam["dOriginalTable"] = "penjualan";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "penjualan";
	$detailsParam["dCaptionTable"] = GetTableCaption("penjualan");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["pelanggan"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pelanggan"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pelanggan"][$dIndex]["masterKeys"][]="PelangganID";

				$detailsTablesData["pelanggan"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pelanggan"][$dIndex]["detailKeys"][]="PelangganID";

// tables which are master tables for current table (detail)
$masterTablesData["pelanggan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pelanggan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PelangganID,  	NamaPelanggan,  	Alamat,  	NomorTelepon";
$proto0["m_strFrom"] = "FROM pelanggan";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "PelangganID",
	"m_strTable" => "pelanggan",
	"m_srcTableName" => "pelanggan"
));

$proto6["m_sql"] = "PelangganID";
$proto6["m_srcTableName"] = "pelanggan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NamaPelanggan",
	"m_strTable" => "pelanggan",
	"m_srcTableName" => "pelanggan"
));

$proto8["m_sql"] = "NamaPelanggan";
$proto8["m_srcTableName"] = "pelanggan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Alamat",
	"m_strTable" => "pelanggan",
	"m_srcTableName" => "pelanggan"
));

$proto10["m_sql"] = "Alamat";
$proto10["m_srcTableName"] = "pelanggan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NomorTelepon",
	"m_strTable" => "pelanggan",
	"m_srcTableName" => "pelanggan"
));

$proto12["m_sql"] = "NomorTelepon";
$proto12["m_srcTableName"] = "pelanggan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "pelanggan";
$proto15["m_srcTableName"] = "pelanggan";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "PelangganID";
$proto15["m_columns"][] = "NamaPelanggan";
$proto15["m_columns"][] = "Alamat";
$proto15["m_columns"][] = "NomorTelepon";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "pelanggan";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "pelanggan";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pelanggan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pelanggan = createSqlQuery_pelanggan();


	
		;

				

$tdatapelanggan[".sqlquery"] = $queryData_pelanggan;

$tableEvents["pelanggan"] = new eventsBase;
$tdatapelanggan[".hasEvents"] = false;

?>