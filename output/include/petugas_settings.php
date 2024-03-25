<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapetugas = array();
	$tdatapetugas[".truncateText"] = true;
	$tdatapetugas[".NumberOfChars"] = 80;
	$tdatapetugas[".ShortName"] = "petugas";
	$tdatapetugas[".OwnerID"] = "";
	$tdatapetugas[".OriginalTable"] = "petugas";

//	field labels
$fieldLabelspetugas = array();
$fieldToolTipspetugas = array();
$pageTitlespetugas = array();
$placeHolderspetugas = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspetugas["English"] = array();
	$fieldToolTipspetugas["English"] = array();
	$placeHolderspetugas["English"] = array();
	$pageTitlespetugas["English"] = array();
	$fieldLabelspetugas["English"]["id"] = "Id";
	$fieldToolTipspetugas["English"]["id"] = "";
	$placeHolderspetugas["English"]["id"] = "";
	$fieldLabelspetugas["English"]["nama_petugas"] = "Nama Petugas";
	$fieldToolTipspetugas["English"]["nama_petugas"] = "";
	$placeHolderspetugas["English"]["nama_petugas"] = "";
	$fieldLabelspetugas["English"]["username"] = "Username";
	$fieldToolTipspetugas["English"]["username"] = "";
	$placeHolderspetugas["English"]["username"] = "";
	$fieldLabelspetugas["English"]["password"] = "Password";
	$fieldToolTipspetugas["English"]["password"] = "";
	$placeHolderspetugas["English"]["password"] = "";
	$fieldLabelspetugas["English"]["level"] = "Level";
	$fieldToolTipspetugas["English"]["level"] = "";
	$placeHolderspetugas["English"]["level"] = "";
	if (count($fieldToolTipspetugas["English"]))
		$tdatapetugas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspetugas[""] = array();
	$fieldToolTipspetugas[""] = array();
	$placeHolderspetugas[""] = array();
	$pageTitlespetugas[""] = array();
	if (count($fieldToolTipspetugas[""]))
		$tdatapetugas[".isUseToolTips"] = true;
}


	$tdatapetugas[".NCSearch"] = true;



$tdatapetugas[".shortTableName"] = "petugas";
$tdatapetugas[".nSecOptions"] = 0;
$tdatapetugas[".recsPerRowPrint"] = 1;
$tdatapetugas[".mainTableOwnerID"] = "";
$tdatapetugas[".moveNext"] = 1;
$tdatapetugas[".entityType"] = 0;

$tdatapetugas[".strOriginalTableName"] = "petugas";

	



$tdatapetugas[".showAddInPopup"] = false;

$tdatapetugas[".showEditInPopup"] = false;

$tdatapetugas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapetugas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapetugas[".fieldsForRegister"] = array();

$tdatapetugas[".listAjax"] = false;

	$tdatapetugas[".audit"] = false;

	$tdatapetugas[".locking"] = false;

$tdatapetugas[".edit"] = true;
$tdatapetugas[".afterEditAction"] = 1;
$tdatapetugas[".closePopupAfterEdit"] = 1;
$tdatapetugas[".afterEditActionDetTable"] = "";

$tdatapetugas[".add"] = true;
$tdatapetugas[".afterAddAction"] = 1;
$tdatapetugas[".closePopupAfterAdd"] = 1;
$tdatapetugas[".afterAddActionDetTable"] = "";

$tdatapetugas[".list"] = true;



$tdatapetugas[".reorderRecordsByHeader"] = true;


$tdatapetugas[".exportFormatting"] = 2;
$tdatapetugas[".exportDelimiter"] = ",";
		
$tdatapetugas[".view"] = true;

$tdatapetugas[".import"] = true;

$tdatapetugas[".exportTo"] = true;

$tdatapetugas[".printFriendly"] = true;

$tdatapetugas[".delete"] = true;

$tdatapetugas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapetugas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapetugas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapetugas[".searchSaving"] = false;
//

$tdatapetugas[".showSearchPanel"] = true;
		$tdatapetugas[".flexibleSearch"] = true;

$tdatapetugas[".isUseAjaxSuggest"] = true;

$tdatapetugas[".rowHighlite"] = true;





$tdatapetugas[".ajaxCodeSnippetAdded"] = false;

$tdatapetugas[".buttonsAdded"] = false;

$tdatapetugas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapetugas[".isUseTimeForSearch"] = false;



$tdatapetugas[".badgeColor"] = "6B8E23";


$tdatapetugas[".allSearchFields"] = array();
$tdatapetugas[".filterFields"] = array();
$tdatapetugas[".requiredSearchFields"] = array();

$tdatapetugas[".allSearchFields"][] = "id";
	$tdatapetugas[".allSearchFields"][] = "nama_petugas";
	$tdatapetugas[".allSearchFields"][] = "username";
	$tdatapetugas[".allSearchFields"][] = "password";
	$tdatapetugas[".allSearchFields"][] = "level";
	

$tdatapetugas[".googleLikeFields"] = array();
$tdatapetugas[".googleLikeFields"][] = "id";
$tdatapetugas[".googleLikeFields"][] = "nama_petugas";
$tdatapetugas[".googleLikeFields"][] = "username";
$tdatapetugas[".googleLikeFields"][] = "password";
$tdatapetugas[".googleLikeFields"][] = "level";


$tdatapetugas[".advSearchFields"] = array();
$tdatapetugas[".advSearchFields"][] = "id";
$tdatapetugas[".advSearchFields"][] = "nama_petugas";
$tdatapetugas[".advSearchFields"][] = "username";
$tdatapetugas[".advSearchFields"][] = "password";
$tdatapetugas[".advSearchFields"][] = "level";

$tdatapetugas[".tableType"] = "list";

$tdatapetugas[".printerPageOrientation"] = 0;
$tdatapetugas[".nPrinterPageScale"] = 100;

$tdatapetugas[".nPrinterSplitRecords"] = 40;

$tdatapetugas[".nPrinterPDFSplitRecords"] = 40;



$tdatapetugas[".geocodingEnabled"] = false;





$tdatapetugas[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapetugas[".pageSize"] = 20;

$tdatapetugas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapetugas[".strOrderBy"] = $tstrOrderBy;

$tdatapetugas[".orderindexes"] = array();

$tdatapetugas[".sqlHead"] = "SELECT id,  	nama_petugas,  	username,  	password,  	`level`";
$tdatapetugas[".sqlFrom"] = "FROM petugas";
$tdatapetugas[".sqlWhereExpr"] = "";
$tdatapetugas[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdatapetugas[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapetugas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapetugas[".arrGroupsPerPage"] = $arrGPP;

$tdatapetugas[".highlightSearchResults"] = true;

$tableKeyspetugas = array();
$tableKeyspetugas[] = "id";
$tdatapetugas[".Keys"] = $tableKeyspetugas;

$tdatapetugas[".listFields"] = array();
$tdatapetugas[".listFields"][] = "id";
$tdatapetugas[".listFields"][] = "nama_petugas";
$tdatapetugas[".listFields"][] = "username";
$tdatapetugas[".listFields"][] = "password";
$tdatapetugas[".listFields"][] = "level";

$tdatapetugas[".hideMobileList"] = array();


$tdatapetugas[".viewFields"] = array();
$tdatapetugas[".viewFields"][] = "id";
$tdatapetugas[".viewFields"][] = "nama_petugas";
$tdatapetugas[".viewFields"][] = "username";
$tdatapetugas[".viewFields"][] = "password";
$tdatapetugas[".viewFields"][] = "level";

$tdatapetugas[".addFields"] = array();
$tdatapetugas[".addFields"][] = "nama_petugas";
$tdatapetugas[".addFields"][] = "username";
$tdatapetugas[".addFields"][] = "password";
$tdatapetugas[".addFields"][] = "level";

$tdatapetugas[".masterListFields"] = array();
$tdatapetugas[".masterListFields"][] = "id";
$tdatapetugas[".masterListFields"][] = "nama_petugas";
$tdatapetugas[".masterListFields"][] = "username";
$tdatapetugas[".masterListFields"][] = "password";
$tdatapetugas[".masterListFields"][] = "level";

$tdatapetugas[".inlineAddFields"] = array();
$tdatapetugas[".inlineAddFields"][] = "nama_petugas";
$tdatapetugas[".inlineAddFields"][] = "username";
$tdatapetugas[".inlineAddFields"][] = "password";
$tdatapetugas[".inlineAddFields"][] = "level";

$tdatapetugas[".editFields"] = array();
$tdatapetugas[".editFields"][] = "nama_petugas";
$tdatapetugas[".editFields"][] = "username";
$tdatapetugas[".editFields"][] = "password";
$tdatapetugas[".editFields"][] = "level";

$tdatapetugas[".inlineEditFields"] = array();
$tdatapetugas[".inlineEditFields"][] = "nama_petugas";
$tdatapetugas[".inlineEditFields"][] = "username";
$tdatapetugas[".inlineEditFields"][] = "password";
$tdatapetugas[".inlineEditFields"][] = "level";

$tdatapetugas[".updateSelectedFields"] = array();
$tdatapetugas[".updateSelectedFields"][] = "nama_petugas";
$tdatapetugas[".updateSelectedFields"][] = "username";
$tdatapetugas[".updateSelectedFields"][] = "password";
$tdatapetugas[".updateSelectedFields"][] = "level";


$tdatapetugas[".exportFields"] = array();
$tdatapetugas[".exportFields"][] = "id";
$tdatapetugas[".exportFields"][] = "nama_petugas";
$tdatapetugas[".exportFields"][] = "username";
$tdatapetugas[".exportFields"][] = "password";
$tdatapetugas[".exportFields"][] = "level";

$tdatapetugas[".importFields"] = array();
$tdatapetugas[".importFields"][] = "id";
$tdatapetugas[".importFields"][] = "nama_petugas";
$tdatapetugas[".importFields"][] = "username";
$tdatapetugas[".importFields"][] = "password";
$tdatapetugas[".importFields"][] = "level";

$tdatapetugas[".printFields"] = array();
$tdatapetugas[".printFields"][] = "id";
$tdatapetugas[".printFields"][] = "nama_petugas";
$tdatapetugas[".printFields"][] = "username";
$tdatapetugas[".printFields"][] = "password";
$tdatapetugas[".printFields"][] = "level";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "petugas";
	$fdata["Label"] = GetFieldLabel("petugas","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatapetugas["id"] = $fdata;
//	nama_petugas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama_petugas";
	$fdata["GoodName"] = "nama_petugas";
	$fdata["ownerTable"] = "petugas";
	$fdata["Label"] = GetFieldLabel("petugas","nama_petugas");
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

		$fdata["strField"] = "nama_petugas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama_petugas";

	
	
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




	$tdatapetugas["nama_petugas"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "petugas";
	$fdata["Label"] = GetFieldLabel("petugas","username");
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

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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




	$tdatapetugas["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "petugas";
	$fdata["Label"] = GetFieldLabel("petugas","password");
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

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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




	$tdatapetugas["password"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "petugas";
	$fdata["Label"] = GetFieldLabel("petugas","level");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`level`";

	
	
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




	$tdatapetugas["level"] = $fdata;


$tables_data["petugas"]=&$tdatapetugas;
$field_labels["petugas"] = &$fieldLabelspetugas;
$fieldToolTips["petugas"] = &$fieldToolTipspetugas;
$placeHolders["petugas"] = &$placeHolderspetugas;
$page_titles["petugas"] = &$pageTitlespetugas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["petugas"] = array();
//	produk
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="produk";
		$detailsParam["dOriginalTable"] = "produk";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "produk";
	$detailsParam["dCaptionTable"] = GetTableCaption("produk");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["petugas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["petugas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["petugas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["petugas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["petugas"][$dIndex]["detailKeys"][]="ProdukID";

// tables which are master tables for current table (detail)
$masterTablesData["petugas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_petugas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nama_petugas,  	username,  	password,  	`level`";
$proto0["m_strFrom"] = "FROM petugas";
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
	"m_strName" => "id",
	"m_strTable" => "petugas",
	"m_srcTableName" => "petugas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "petugas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama_petugas",
	"m_strTable" => "petugas",
	"m_srcTableName" => "petugas"
));

$proto8["m_sql"] = "nama_petugas";
$proto8["m_srcTableName"] = "petugas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "petugas",
	"m_srcTableName" => "petugas"
));

$proto10["m_sql"] = "username";
$proto10["m_srcTableName"] = "petugas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "petugas",
	"m_srcTableName" => "petugas"
));

$proto12["m_sql"] = "password";
$proto12["m_srcTableName"] = "petugas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "petugas",
	"m_srcTableName" => "petugas"
));

$proto14["m_sql"] = "`level`";
$proto14["m_srcTableName"] = "petugas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "petugas";
$proto17["m_srcTableName"] = "petugas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nama_petugas";
$proto17["m_columns"][] = "username";
$proto17["m_columns"][] = "password";
$proto17["m_columns"][] = "level";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "petugas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "petugas";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="petugas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_petugas = createSqlQuery_petugas();


	
		;

					

$tdatapetugas[".sqlquery"] = $queryData_petugas;

$tableEvents["petugas"] = new eventsBase;
$tdatapetugas[".hasEvents"] = false;

?>