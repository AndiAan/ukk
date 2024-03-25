<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadetailpenjualan = array();
	$tdatadetailpenjualan[".truncateText"] = true;
	$tdatadetailpenjualan[".NumberOfChars"] = 80;
	$tdatadetailpenjualan[".ShortName"] = "detailpenjualan";
	$tdatadetailpenjualan[".OwnerID"] = "";
	$tdatadetailpenjualan[".OriginalTable"] = "detailpenjualan";

//	field labels
$fieldLabelsdetailpenjualan = array();
$fieldToolTipsdetailpenjualan = array();
$pageTitlesdetailpenjualan = array();
$placeHoldersdetailpenjualan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdetailpenjualan["English"] = array();
	$fieldToolTipsdetailpenjualan["English"] = array();
	$placeHoldersdetailpenjualan["English"] = array();
	$pageTitlesdetailpenjualan["English"] = array();
	$fieldLabelsdetailpenjualan["English"]["DetailID"] = "Detail ID";
	$fieldToolTipsdetailpenjualan["English"]["DetailID"] = "";
	$placeHoldersdetailpenjualan["English"]["DetailID"] = "";
	$fieldLabelsdetailpenjualan["English"]["PenjualanID"] = "Penjualan ID";
	$fieldToolTipsdetailpenjualan["English"]["PenjualanID"] = "";
	$placeHoldersdetailpenjualan["English"]["PenjualanID"] = "";
	$fieldLabelsdetailpenjualan["English"]["ProdukID"] = "Produk ID";
	$fieldToolTipsdetailpenjualan["English"]["ProdukID"] = "";
	$placeHoldersdetailpenjualan["English"]["ProdukID"] = "";
	$fieldLabelsdetailpenjualan["English"]["JumlahProduk"] = "Jumlah Produk";
	$fieldToolTipsdetailpenjualan["English"]["JumlahProduk"] = "";
	$placeHoldersdetailpenjualan["English"]["JumlahProduk"] = "";
	$fieldLabelsdetailpenjualan["English"]["Subtotal"] = "Subtotal";
	$fieldToolTipsdetailpenjualan["English"]["Subtotal"] = "";
	$placeHoldersdetailpenjualan["English"]["Subtotal"] = "";
	if (count($fieldToolTipsdetailpenjualan["English"]))
		$tdatadetailpenjualan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdetailpenjualan[""] = array();
	$fieldToolTipsdetailpenjualan[""] = array();
	$placeHoldersdetailpenjualan[""] = array();
	$pageTitlesdetailpenjualan[""] = array();
	$fieldLabelsdetailpenjualan[""]["DetailID"] = "Detail ID";
	$fieldToolTipsdetailpenjualan[""]["DetailID"] = "";
	$placeHoldersdetailpenjualan[""]["DetailID"] = "";
	$fieldLabelsdetailpenjualan[""]["PenjualanID"] = "Penjualan ID";
	$fieldToolTipsdetailpenjualan[""]["PenjualanID"] = "";
	$placeHoldersdetailpenjualan[""]["PenjualanID"] = "";
	$fieldLabelsdetailpenjualan[""]["ProdukID"] = "Produk ID";
	$fieldToolTipsdetailpenjualan[""]["ProdukID"] = "";
	$placeHoldersdetailpenjualan[""]["ProdukID"] = "";
	$fieldLabelsdetailpenjualan[""]["JumlahProduk"] = "Jumlah Produk";
	$fieldToolTipsdetailpenjualan[""]["JumlahProduk"] = "";
	$placeHoldersdetailpenjualan[""]["JumlahProduk"] = "";
	$fieldLabelsdetailpenjualan[""]["Subtotal"] = "Subtotal";
	$fieldToolTipsdetailpenjualan[""]["Subtotal"] = "";
	$placeHoldersdetailpenjualan[""]["Subtotal"] = "";
	if (count($fieldToolTipsdetailpenjualan[""]))
		$tdatadetailpenjualan[".isUseToolTips"] = true;
}


	$tdatadetailpenjualan[".NCSearch"] = true;



$tdatadetailpenjualan[".shortTableName"] = "detailpenjualan";
$tdatadetailpenjualan[".nSecOptions"] = 0;
$tdatadetailpenjualan[".recsPerRowPrint"] = 1;
$tdatadetailpenjualan[".mainTableOwnerID"] = "";
$tdatadetailpenjualan[".moveNext"] = 1;
$tdatadetailpenjualan[".entityType"] = 0;

$tdatadetailpenjualan[".strOriginalTableName"] = "detailpenjualan";

	



$tdatadetailpenjualan[".showAddInPopup"] = false;

$tdatadetailpenjualan[".showEditInPopup"] = false;

$tdatadetailpenjualan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadetailpenjualan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadetailpenjualan[".fieldsForRegister"] = array();

$tdatadetailpenjualan[".listAjax"] = false;

	$tdatadetailpenjualan[".audit"] = false;

	$tdatadetailpenjualan[".locking"] = false;

$tdatadetailpenjualan[".edit"] = true;
$tdatadetailpenjualan[".afterEditAction"] = 1;
$tdatadetailpenjualan[".closePopupAfterEdit"] = 1;
$tdatadetailpenjualan[".afterEditActionDetTable"] = "";

$tdatadetailpenjualan[".add"] = true;
$tdatadetailpenjualan[".afterAddAction"] = 1;
$tdatadetailpenjualan[".closePopupAfterAdd"] = 1;
$tdatadetailpenjualan[".afterAddActionDetTable"] = "";

$tdatadetailpenjualan[".list"] = true;



$tdatadetailpenjualan[".reorderRecordsByHeader"] = true;


$tdatadetailpenjualan[".exportFormatting"] = 2;
$tdatadetailpenjualan[".exportDelimiter"] = ",";
		
$tdatadetailpenjualan[".view"] = true;

$tdatadetailpenjualan[".import"] = true;

$tdatadetailpenjualan[".exportTo"] = true;

$tdatadetailpenjualan[".printFriendly"] = true;

$tdatadetailpenjualan[".delete"] = true;

$tdatadetailpenjualan[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadetailpenjualan[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadetailpenjualan[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadetailpenjualan[".searchSaving"] = false;
//

$tdatadetailpenjualan[".showSearchPanel"] = true;
		$tdatadetailpenjualan[".flexibleSearch"] = true;

$tdatadetailpenjualan[".isUseAjaxSuggest"] = true;

$tdatadetailpenjualan[".rowHighlite"] = true;





$tdatadetailpenjualan[".ajaxCodeSnippetAdded"] = false;

$tdatadetailpenjualan[".buttonsAdded"] = false;

$tdatadetailpenjualan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetailpenjualan[".isUseTimeForSearch"] = false;



$tdatadetailpenjualan[".badgeColor"] = "2f4f4f";


$tdatadetailpenjualan[".allSearchFields"] = array();
$tdatadetailpenjualan[".filterFields"] = array();
$tdatadetailpenjualan[".requiredSearchFields"] = array();

$tdatadetailpenjualan[".allSearchFields"][] = "DetailID";
	$tdatadetailpenjualan[".allSearchFields"][] = "PenjualanID";
	$tdatadetailpenjualan[".allSearchFields"][] = "ProdukID";
	$tdatadetailpenjualan[".allSearchFields"][] = "JumlahProduk";
	$tdatadetailpenjualan[".allSearchFields"][] = "Subtotal";
	

$tdatadetailpenjualan[".googleLikeFields"] = array();
$tdatadetailpenjualan[".googleLikeFields"][] = "DetailID";
$tdatadetailpenjualan[".googleLikeFields"][] = "PenjualanID";
$tdatadetailpenjualan[".googleLikeFields"][] = "ProdukID";
$tdatadetailpenjualan[".googleLikeFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".googleLikeFields"][] = "Subtotal";


$tdatadetailpenjualan[".advSearchFields"] = array();
$tdatadetailpenjualan[".advSearchFields"][] = "DetailID";
$tdatadetailpenjualan[".advSearchFields"][] = "PenjualanID";
$tdatadetailpenjualan[".advSearchFields"][] = "ProdukID";
$tdatadetailpenjualan[".advSearchFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".advSearchFields"][] = "Subtotal";

$tdatadetailpenjualan[".tableType"] = "list";

$tdatadetailpenjualan[".printerPageOrientation"] = 0;
$tdatadetailpenjualan[".nPrinterPageScale"] = 100;

$tdatadetailpenjualan[".nPrinterSplitRecords"] = 40;

$tdatadetailpenjualan[".nPrinterPDFSplitRecords"] = 40;



$tdatadetailpenjualan[".geocodingEnabled"] = false;





$tdatadetailpenjualan[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadetailpenjualan[".pageSize"] = 20;

$tdatadetailpenjualan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetailpenjualan[".strOrderBy"] = $tstrOrderBy;

$tdatadetailpenjualan[".orderindexes"] = array();

$tdatadetailpenjualan[".sqlHead"] = "SELECT DetailID,  	PenjualanID,  	ProdukID,  	JumlahProduk,  	Subtotal";
$tdatadetailpenjualan[".sqlFrom"] = "FROM detailpenjualan";
$tdatadetailpenjualan[".sqlWhereExpr"] = "";
$tdatadetailpenjualan[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetailpenjualan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetailpenjualan[".arrGroupsPerPage"] = $arrGPP;

$tdatadetailpenjualan[".highlightSearchResults"] = true;

$tableKeysdetailpenjualan = array();
$tableKeysdetailpenjualan[] = "DetailID";
$tdatadetailpenjualan[".Keys"] = $tableKeysdetailpenjualan;

$tdatadetailpenjualan[".listFields"] = array();
$tdatadetailpenjualan[".listFields"][] = "DetailID";
$tdatadetailpenjualan[".listFields"][] = "PenjualanID";
$tdatadetailpenjualan[".listFields"][] = "ProdukID";
$tdatadetailpenjualan[".listFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".listFields"][] = "Subtotal";

$tdatadetailpenjualan[".hideMobileList"] = array();


$tdatadetailpenjualan[".viewFields"] = array();
$tdatadetailpenjualan[".viewFields"][] = "DetailID";
$tdatadetailpenjualan[".viewFields"][] = "PenjualanID";
$tdatadetailpenjualan[".viewFields"][] = "ProdukID";
$tdatadetailpenjualan[".viewFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".viewFields"][] = "Subtotal";

$tdatadetailpenjualan[".addFields"] = array();
$tdatadetailpenjualan[".addFields"][] = "DetailID";
$tdatadetailpenjualan[".addFields"][] = "PenjualanID";
$tdatadetailpenjualan[".addFields"][] = "ProdukID";
$tdatadetailpenjualan[".addFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".addFields"][] = "Subtotal";

$tdatadetailpenjualan[".masterListFields"] = array();
$tdatadetailpenjualan[".masterListFields"][] = "DetailID";
$tdatadetailpenjualan[".masterListFields"][] = "PenjualanID";
$tdatadetailpenjualan[".masterListFields"][] = "ProdukID";
$tdatadetailpenjualan[".masterListFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".masterListFields"][] = "Subtotal";

$tdatadetailpenjualan[".inlineAddFields"] = array();
$tdatadetailpenjualan[".inlineAddFields"][] = "DetailID";
$tdatadetailpenjualan[".inlineAddFields"][] = "PenjualanID";
$tdatadetailpenjualan[".inlineAddFields"][] = "ProdukID";
$tdatadetailpenjualan[".inlineAddFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".inlineAddFields"][] = "Subtotal";

$tdatadetailpenjualan[".editFields"] = array();
$tdatadetailpenjualan[".editFields"][] = "DetailID";
$tdatadetailpenjualan[".editFields"][] = "PenjualanID";
$tdatadetailpenjualan[".editFields"][] = "ProdukID";
$tdatadetailpenjualan[".editFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".editFields"][] = "Subtotal";

$tdatadetailpenjualan[".inlineEditFields"] = array();
$tdatadetailpenjualan[".inlineEditFields"][] = "DetailID";
$tdatadetailpenjualan[".inlineEditFields"][] = "PenjualanID";
$tdatadetailpenjualan[".inlineEditFields"][] = "ProdukID";
$tdatadetailpenjualan[".inlineEditFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".inlineEditFields"][] = "Subtotal";

$tdatadetailpenjualan[".updateSelectedFields"] = array();
$tdatadetailpenjualan[".updateSelectedFields"][] = "DetailID";
$tdatadetailpenjualan[".updateSelectedFields"][] = "PenjualanID";
$tdatadetailpenjualan[".updateSelectedFields"][] = "ProdukID";
$tdatadetailpenjualan[".updateSelectedFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".updateSelectedFields"][] = "Subtotal";


$tdatadetailpenjualan[".exportFields"] = array();
$tdatadetailpenjualan[".exportFields"][] = "DetailID";
$tdatadetailpenjualan[".exportFields"][] = "PenjualanID";
$tdatadetailpenjualan[".exportFields"][] = "ProdukID";
$tdatadetailpenjualan[".exportFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".exportFields"][] = "Subtotal";

$tdatadetailpenjualan[".importFields"] = array();
$tdatadetailpenjualan[".importFields"][] = "DetailID";
$tdatadetailpenjualan[".importFields"][] = "PenjualanID";
$tdatadetailpenjualan[".importFields"][] = "ProdukID";
$tdatadetailpenjualan[".importFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".importFields"][] = "Subtotal";

$tdatadetailpenjualan[".printFields"] = array();
$tdatadetailpenjualan[".printFields"][] = "DetailID";
$tdatadetailpenjualan[".printFields"][] = "PenjualanID";
$tdatadetailpenjualan[".printFields"][] = "ProdukID";
$tdatadetailpenjualan[".printFields"][] = "JumlahProduk";
$tdatadetailpenjualan[".printFields"][] = "Subtotal";


//	DetailID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DetailID";
	$fdata["GoodName"] = "DetailID";
	$fdata["ownerTable"] = "detailpenjualan";
	$fdata["Label"] = GetFieldLabel("detailpenjualan","DetailID");
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

		$fdata["strField"] = "DetailID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DetailID";

	
	
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




	$tdatadetailpenjualan["DetailID"] = $fdata;
//	PenjualanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PenjualanID";
	$fdata["GoodName"] = "PenjualanID";
	$fdata["ownerTable"] = "detailpenjualan";
	$fdata["Label"] = GetFieldLabel("detailpenjualan","PenjualanID");
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetailpenjualan["PenjualanID"] = $fdata;
//	ProdukID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdukID";
	$fdata["GoodName"] = "ProdukID";
	$fdata["ownerTable"] = "detailpenjualan";
	$fdata["Label"] = GetFieldLabel("detailpenjualan","ProdukID");
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

		$fdata["strField"] = "ProdukID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProdukID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetailpenjualan["ProdukID"] = $fdata;
//	JumlahProduk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "JumlahProduk";
	$fdata["GoodName"] = "JumlahProduk";
	$fdata["ownerTable"] = "detailpenjualan";
	$fdata["Label"] = GetFieldLabel("detailpenjualan","JumlahProduk");
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

		$fdata["strField"] = "JumlahProduk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JumlahProduk";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetailpenjualan["JumlahProduk"] = $fdata;
//	Subtotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Subtotal";
	$fdata["GoodName"] = "Subtotal";
	$fdata["ownerTable"] = "detailpenjualan";
	$fdata["Label"] = GetFieldLabel("detailpenjualan","Subtotal");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Subtotal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subtotal";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetailpenjualan["Subtotal"] = $fdata;


$tables_data["detailpenjualan"]=&$tdatadetailpenjualan;
$field_labels["detailpenjualan"] = &$fieldLabelsdetailpenjualan;
$fieldToolTips["detailpenjualan"] = &$fieldToolTipsdetailpenjualan;
$placeHolders["detailpenjualan"] = &$placeHoldersdetailpenjualan;
$page_titles["detailpenjualan"] = &$pageTitlesdetailpenjualan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detailpenjualan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["detailpenjualan"] = array();


	
				$strOriginalDetailsTable="produk";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="produk";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "produk";
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
					$masterTablesData["detailpenjualan"][0] = $masterParams;
				$masterTablesData["detailpenjualan"][0]["masterKeys"] = array();
	$masterTablesData["detailpenjualan"][0]["masterKeys"][]="ProdukID";
				$masterTablesData["detailpenjualan"][0]["detailKeys"] = array();
	$masterTablesData["detailpenjualan"][0]["detailKeys"][]="ProdukID";
		
	
				$strOriginalDetailsTable="penjualan";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="penjualan";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "penjualan";
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
					$masterTablesData["detailpenjualan"][1] = $masterParams;
				$masterTablesData["detailpenjualan"][1]["masterKeys"] = array();
	$masterTablesData["detailpenjualan"][1]["masterKeys"][]="PenjualanID";
				$masterTablesData["detailpenjualan"][1]["detailKeys"] = array();
	$masterTablesData["detailpenjualan"][1]["detailKeys"][]="PenjualanID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detailpenjualan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DetailID,  	PenjualanID,  	ProdukID,  	JumlahProduk,  	Subtotal";
$proto0["m_strFrom"] = "FROM detailpenjualan";
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
	"m_strName" => "DetailID",
	"m_strTable" => "detailpenjualan",
	"m_srcTableName" => "detailpenjualan"
));

$proto6["m_sql"] = "DetailID";
$proto6["m_srcTableName"] = "detailpenjualan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PenjualanID",
	"m_strTable" => "detailpenjualan",
	"m_srcTableName" => "detailpenjualan"
));

$proto8["m_sql"] = "PenjualanID";
$proto8["m_srcTableName"] = "detailpenjualan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdukID",
	"m_strTable" => "detailpenjualan",
	"m_srcTableName" => "detailpenjualan"
));

$proto10["m_sql"] = "ProdukID";
$proto10["m_srcTableName"] = "detailpenjualan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "JumlahProduk",
	"m_strTable" => "detailpenjualan",
	"m_srcTableName" => "detailpenjualan"
));

$proto12["m_sql"] = "JumlahProduk";
$proto12["m_srcTableName"] = "detailpenjualan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Subtotal",
	"m_strTable" => "detailpenjualan",
	"m_srcTableName" => "detailpenjualan"
));

$proto14["m_sql"] = "Subtotal";
$proto14["m_srcTableName"] = "detailpenjualan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "detailpenjualan";
$proto17["m_srcTableName"] = "detailpenjualan";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "DetailID";
$proto17["m_columns"][] = "PenjualanID";
$proto17["m_columns"][] = "ProdukID";
$proto17["m_columns"][] = "JumlahProduk";
$proto17["m_columns"][] = "Subtotal";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "detailpenjualan";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "detailpenjualan";
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
$proto0["m_srcTableName"]="detailpenjualan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detailpenjualan = createSqlQuery_detailpenjualan();


	
		;

					

$tdatadetailpenjualan[".sqlquery"] = $queryData_detailpenjualan;

$tableEvents["detailpenjualan"] = new eventsBase;
$tdatadetailpenjualan[".hasEvents"] = false;

?>