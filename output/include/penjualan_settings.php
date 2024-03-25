<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapenjualan = array();
	$tdatapenjualan[".truncateText"] = true;
	$tdatapenjualan[".NumberOfChars"] = 80;
	$tdatapenjualan[".ShortName"] = "penjualan";
	$tdatapenjualan[".OwnerID"] = "";
	$tdatapenjualan[".OriginalTable"] = "penjualan";

//	field labels
$fieldLabelspenjualan = array();
$fieldToolTipspenjualan = array();
$pageTitlespenjualan = array();
$placeHolderspenjualan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspenjualan["English"] = array();
	$fieldToolTipspenjualan["English"] = array();
	$placeHolderspenjualan["English"] = array();
	$pageTitlespenjualan["English"] = array();
	$fieldLabelspenjualan["English"]["PenjualanID"] = "Penjualan ID";
	$fieldToolTipspenjualan["English"]["PenjualanID"] = "";
	$placeHolderspenjualan["English"]["PenjualanID"] = "";
	$fieldLabelspenjualan["English"]["TanggalPenjualan"] = "Tanggal Penjualan";
	$fieldToolTipspenjualan["English"]["TanggalPenjualan"] = "";
	$placeHolderspenjualan["English"]["TanggalPenjualan"] = "";
	$fieldLabelspenjualan["English"]["TotalHarga"] = "Total Harga";
	$fieldToolTipspenjualan["English"]["TotalHarga"] = "";
	$placeHolderspenjualan["English"]["TotalHarga"] = "";
	$fieldLabelspenjualan["English"]["PelangganID"] = "Pelanggan ID";
	$fieldToolTipspenjualan["English"]["PelangganID"] = "";
	$placeHolderspenjualan["English"]["PelangganID"] = "";
	if (count($fieldToolTipspenjualan["English"]))
		$tdatapenjualan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspenjualan[""] = array();
	$fieldToolTipspenjualan[""] = array();
	$placeHolderspenjualan[""] = array();
	$pageTitlespenjualan[""] = array();
	$fieldLabelspenjualan[""]["PenjualanID"] = "Penjualan ID";
	$fieldToolTipspenjualan[""]["PenjualanID"] = "";
	$placeHolderspenjualan[""]["PenjualanID"] = "";
	$fieldLabelspenjualan[""]["TanggalPenjualan"] = "Tanggal Penjualan";
	$fieldToolTipspenjualan[""]["TanggalPenjualan"] = "";
	$placeHolderspenjualan[""]["TanggalPenjualan"] = "";
	$fieldLabelspenjualan[""]["TotalHarga"] = "Total Harga";
	$fieldToolTipspenjualan[""]["TotalHarga"] = "";
	$placeHolderspenjualan[""]["TotalHarga"] = "";
	$fieldLabelspenjualan[""]["PelangganID"] = "Pelanggan ID";
	$fieldToolTipspenjualan[""]["PelangganID"] = "";
	$placeHolderspenjualan[""]["PelangganID"] = "";
	if (count($fieldToolTipspenjualan[""]))
		$tdatapenjualan[".isUseToolTips"] = true;
}


	$tdatapenjualan[".NCSearch"] = true;



$tdatapenjualan[".shortTableName"] = "penjualan";
$tdatapenjualan[".nSecOptions"] = 0;
$tdatapenjualan[".recsPerRowPrint"] = 1;
$tdatapenjualan[".mainTableOwnerID"] = "";
$tdatapenjualan[".moveNext"] = 1;
$tdatapenjualan[".entityType"] = 0;

$tdatapenjualan[".strOriginalTableName"] = "penjualan";

	



$tdatapenjualan[".showAddInPopup"] = false;

$tdatapenjualan[".showEditInPopup"] = false;

$tdatapenjualan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapenjualan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapenjualan[".fieldsForRegister"] = array();

$tdatapenjualan[".listAjax"] = false;

	$tdatapenjualan[".audit"] = false;

	$tdatapenjualan[".locking"] = false;

$tdatapenjualan[".edit"] = true;
$tdatapenjualan[".afterEditAction"] = 1;
$tdatapenjualan[".closePopupAfterEdit"] = 1;
$tdatapenjualan[".afterEditActionDetTable"] = "";

$tdatapenjualan[".add"] = true;
$tdatapenjualan[".afterAddAction"] = 1;
$tdatapenjualan[".closePopupAfterAdd"] = 1;
$tdatapenjualan[".afterAddActionDetTable"] = "";

$tdatapenjualan[".list"] = true;



$tdatapenjualan[".reorderRecordsByHeader"] = true;


$tdatapenjualan[".exportFormatting"] = 2;
$tdatapenjualan[".exportDelimiter"] = ",";
		
$tdatapenjualan[".view"] = true;

$tdatapenjualan[".import"] = true;

$tdatapenjualan[".exportTo"] = true;

$tdatapenjualan[".printFriendly"] = true;

$tdatapenjualan[".delete"] = true;

$tdatapenjualan[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapenjualan[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapenjualan[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapenjualan[".searchSaving"] = false;
//

$tdatapenjualan[".showSearchPanel"] = true;
		$tdatapenjualan[".flexibleSearch"] = true;

$tdatapenjualan[".isUseAjaxSuggest"] = true;

$tdatapenjualan[".rowHighlite"] = true;





$tdatapenjualan[".ajaxCodeSnippetAdded"] = false;

$tdatapenjualan[".buttonsAdded"] = false;

$tdatapenjualan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapenjualan[".isUseTimeForSearch"] = false;



$tdatapenjualan[".badgeColor"] = "008b8b";


$tdatapenjualan[".allSearchFields"] = array();
$tdatapenjualan[".filterFields"] = array();
$tdatapenjualan[".requiredSearchFields"] = array();

$tdatapenjualan[".allSearchFields"][] = "PenjualanID";
	$tdatapenjualan[".allSearchFields"][] = "TanggalPenjualan";
	$tdatapenjualan[".allSearchFields"][] = "TotalHarga";
	$tdatapenjualan[".allSearchFields"][] = "PelangganID";
	

$tdatapenjualan[".googleLikeFields"] = array();
$tdatapenjualan[".googleLikeFields"][] = "PenjualanID";
$tdatapenjualan[".googleLikeFields"][] = "TanggalPenjualan";
$tdatapenjualan[".googleLikeFields"][] = "TotalHarga";
$tdatapenjualan[".googleLikeFields"][] = "PelangganID";


$tdatapenjualan[".advSearchFields"] = array();
$tdatapenjualan[".advSearchFields"][] = "PenjualanID";
$tdatapenjualan[".advSearchFields"][] = "TanggalPenjualan";
$tdatapenjualan[".advSearchFields"][] = "TotalHarga";
$tdatapenjualan[".advSearchFields"][] = "PelangganID";

$tdatapenjualan[".tableType"] = "list";

$tdatapenjualan[".printerPageOrientation"] = 0;
$tdatapenjualan[".nPrinterPageScale"] = 100;

$tdatapenjualan[".nPrinterSplitRecords"] = 40;

$tdatapenjualan[".nPrinterPDFSplitRecords"] = 40;



$tdatapenjualan[".geocodingEnabled"] = false;





$tdatapenjualan[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapenjualan[".pageSize"] = 20;

$tdatapenjualan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapenjualan[".strOrderBy"] = $tstrOrderBy;

$tdatapenjualan[".orderindexes"] = array();

$tdatapenjualan[".sqlHead"] = "SELECT PenjualanID,  	TanggalPenjualan,  	TotalHarga,  	PelangganID";
$tdatapenjualan[".sqlFrom"] = "FROM penjualan";
$tdatapenjualan[".sqlWhereExpr"] = "";
$tdatapenjualan[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapenjualan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapenjualan[".arrGroupsPerPage"] = $arrGPP;

$tdatapenjualan[".highlightSearchResults"] = true;

$tableKeyspenjualan = array();
$tableKeyspenjualan[] = "PenjualanID";
$tdatapenjualan[".Keys"] = $tableKeyspenjualan;

$tdatapenjualan[".listFields"] = array();
$tdatapenjualan[".listFields"][] = "PenjualanID";
$tdatapenjualan[".listFields"][] = "TanggalPenjualan";
$tdatapenjualan[".listFields"][] = "TotalHarga";
$tdatapenjualan[".listFields"][] = "PelangganID";

$tdatapenjualan[".hideMobileList"] = array();


$tdatapenjualan[".viewFields"] = array();
$tdatapenjualan[".viewFields"][] = "PenjualanID";
$tdatapenjualan[".viewFields"][] = "TanggalPenjualan";
$tdatapenjualan[".viewFields"][] = "TotalHarga";
$tdatapenjualan[".viewFields"][] = "PelangganID";

$tdatapenjualan[".addFields"] = array();
$tdatapenjualan[".addFields"][] = "TanggalPenjualan";
$tdatapenjualan[".addFields"][] = "TotalHarga";
$tdatapenjualan[".addFields"][] = "PelangganID";

$tdatapenjualan[".masterListFields"] = array();
$tdatapenjualan[".masterListFields"][] = "PenjualanID";
$tdatapenjualan[".masterListFields"][] = "TanggalPenjualan";
$tdatapenjualan[".masterListFields"][] = "TotalHarga";
$tdatapenjualan[".masterListFields"][] = "PelangganID";

$tdatapenjualan[".inlineAddFields"] = array();

$tdatapenjualan[".editFields"] = array();
$tdatapenjualan[".editFields"][] = "TanggalPenjualan";
$tdatapenjualan[".editFields"][] = "TotalHarga";
$tdatapenjualan[".editFields"][] = "PelangganID";

$tdatapenjualan[".inlineEditFields"] = array();

$tdatapenjualan[".updateSelectedFields"] = array();
$tdatapenjualan[".updateSelectedFields"][] = "TanggalPenjualan";
$tdatapenjualan[".updateSelectedFields"][] = "TotalHarga";
$tdatapenjualan[".updateSelectedFields"][] = "PelangganID";


$tdatapenjualan[".exportFields"] = array();
$tdatapenjualan[".exportFields"][] = "PenjualanID";
$tdatapenjualan[".exportFields"][] = "TanggalPenjualan";
$tdatapenjualan[".exportFields"][] = "TotalHarga";
$tdatapenjualan[".exportFields"][] = "PelangganID";

$tdatapenjualan[".importFields"] = array();
$tdatapenjualan[".importFields"][] = "PenjualanID";
$tdatapenjualan[".importFields"][] = "TanggalPenjualan";
$tdatapenjualan[".importFields"][] = "TotalHarga";
$tdatapenjualan[".importFields"][] = "PelangganID";

$tdatapenjualan[".printFields"] = array();
$tdatapenjualan[".printFields"][] = "PenjualanID";
$tdatapenjualan[".printFields"][] = "TanggalPenjualan";
$tdatapenjualan[".printFields"][] = "TotalHarga";
$tdatapenjualan[".printFields"][] = "PelangganID";


//	PenjualanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PenjualanID";
	$fdata["GoodName"] = "PenjualanID";
	$fdata["ownerTable"] = "penjualan";
	$fdata["Label"] = GetFieldLabel("penjualan","PenjualanID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PenjualanID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PenjualanID";

	
	
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




	$tdatapenjualan["PenjualanID"] = $fdata;
//	TanggalPenjualan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TanggalPenjualan";
	$fdata["GoodName"] = "TanggalPenjualan";
	$fdata["ownerTable"] = "penjualan";
	$fdata["Label"] = GetFieldLabel("penjualan","TanggalPenjualan");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TanggalPenjualan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TanggalPenjualan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapenjualan["TanggalPenjualan"] = $fdata;
//	TotalHarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalHarga";
	$fdata["GoodName"] = "TotalHarga";
	$fdata["ownerTable"] = "penjualan";
	$fdata["Label"] = GetFieldLabel("penjualan","TotalHarga");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalHarga";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalHarga";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdatapenjualan["TotalHarga"] = $fdata;
//	PelangganID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PelangganID";
	$fdata["GoodName"] = "PelangganID";
	$fdata["ownerTable"] = "penjualan";
	$fdata["Label"] = GetFieldLabel("penjualan","PelangganID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pelanggan";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PelangganID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NamaPelanggan";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapenjualan["PelangganID"] = $fdata;


$tables_data["penjualan"]=&$tdatapenjualan;
$field_labels["penjualan"] = &$fieldLabelspenjualan;
$fieldToolTips["penjualan"] = &$fieldToolTipspenjualan;
$placeHolders["penjualan"] = &$placeHolderspenjualan;
$page_titles["penjualan"] = &$pageTitlespenjualan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["penjualan"] = array();
//	detailpenjualan
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detailpenjualan";
		$detailsParam["dOriginalTable"] = "detailpenjualan";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detailpenjualan";
	$detailsParam["dCaptionTable"] = GetTableCaption("detailpenjualan");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["penjualan"][$dIndex] = $detailsParam;

	
		$detailsTablesData["penjualan"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["penjualan"][$dIndex]["masterKeys"][]="PenjualanID";

				$detailsTablesData["penjualan"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["penjualan"][$dIndex]["detailKeys"][]="PenjualanID";

// tables which are master tables for current table (detail)
$masterTablesData["penjualan"] = array();


	
				$strOriginalDetailsTable="pelanggan";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pelanggan";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pelanggan";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["penjualan"][0] = $masterParams;
				$masterTablesData["penjualan"][0]["masterKeys"] = array();
	$masterTablesData["penjualan"][0]["masterKeys"][]="PelangganID";
				$masterTablesData["penjualan"][0]["detailKeys"] = array();
	$masterTablesData["penjualan"][0]["detailKeys"][]="PelangganID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_penjualan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PenjualanID,  	TanggalPenjualan,  	TotalHarga,  	PelangganID";
$proto0["m_strFrom"] = "FROM penjualan";
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
	"m_strName" => "PenjualanID",
	"m_strTable" => "penjualan",
	"m_srcTableName" => "penjualan"
));

$proto6["m_sql"] = "PenjualanID";
$proto6["m_srcTableName"] = "penjualan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TanggalPenjualan",
	"m_strTable" => "penjualan",
	"m_srcTableName" => "penjualan"
));

$proto8["m_sql"] = "TanggalPenjualan";
$proto8["m_srcTableName"] = "penjualan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalHarga",
	"m_strTable" => "penjualan",
	"m_srcTableName" => "penjualan"
));

$proto10["m_sql"] = "TotalHarga";
$proto10["m_srcTableName"] = "penjualan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PelangganID",
	"m_strTable" => "penjualan",
	"m_srcTableName" => "penjualan"
));

$proto12["m_sql"] = "PelangganID";
$proto12["m_srcTableName"] = "penjualan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "penjualan";
$proto15["m_srcTableName"] = "penjualan";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "PenjualanID";
$proto15["m_columns"][] = "TanggalPenjualan";
$proto15["m_columns"][] = "TotalHarga";
$proto15["m_columns"][] = "PelangganID";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "penjualan";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "penjualan";
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
$proto0["m_srcTableName"]="penjualan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_penjualan = createSqlQuery_penjualan();


	
		;

				

$tdatapenjualan[".sqlquery"] = $queryData_penjualan;

$tableEvents["penjualan"] = new eventsBase;
$tdatapenjualan[".hasEvents"] = false;

?>