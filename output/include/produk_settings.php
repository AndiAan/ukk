<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproduk = array();
	$tdataproduk[".truncateText"] = true;
	$tdataproduk[".NumberOfChars"] = 80;
	$tdataproduk[".ShortName"] = "produk";
	$tdataproduk[".OwnerID"] = "";
	$tdataproduk[".OriginalTable"] = "produk";

//	field labels
$fieldLabelsproduk = array();
$fieldToolTipsproduk = array();
$pageTitlesproduk = array();
$placeHoldersproduk = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduk["English"] = array();
	$fieldToolTipsproduk["English"] = array();
	$placeHoldersproduk["English"] = array();
	$pageTitlesproduk["English"] = array();
	$fieldLabelsproduk["English"]["ProdukID"] = "Produk ID";
	$fieldToolTipsproduk["English"]["ProdukID"] = "";
	$placeHoldersproduk["English"]["ProdukID"] = "";
	$fieldLabelsproduk["English"]["NamaProduk"] = "Nama Produk";
	$fieldToolTipsproduk["English"]["NamaProduk"] = "";
	$placeHoldersproduk["English"]["NamaProduk"] = "";
	$fieldLabelsproduk["English"]["Harga"] = "Harga";
	$fieldToolTipsproduk["English"]["Harga"] = "";
	$placeHoldersproduk["English"]["Harga"] = "";
	$fieldLabelsproduk["English"]["Stok"] = "Stok";
	$fieldToolTipsproduk["English"]["Stok"] = "";
	$placeHoldersproduk["English"]["Stok"] = "";
	if (count($fieldToolTipsproduk["English"]))
		$tdataproduk[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproduk[""] = array();
	$fieldToolTipsproduk[""] = array();
	$placeHoldersproduk[""] = array();
	$pageTitlesproduk[""] = array();
	if (count($fieldToolTipsproduk[""]))
		$tdataproduk[".isUseToolTips"] = true;
}


	$tdataproduk[".NCSearch"] = true;



$tdataproduk[".shortTableName"] = "produk";
$tdataproduk[".nSecOptions"] = 0;
$tdataproduk[".recsPerRowPrint"] = 1;
$tdataproduk[".mainTableOwnerID"] = "";
$tdataproduk[".moveNext"] = 1;
$tdataproduk[".entityType"] = 0;

$tdataproduk[".strOriginalTableName"] = "produk";

	



$tdataproduk[".showAddInPopup"] = false;

$tdataproduk[".showEditInPopup"] = false;

$tdataproduk[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproduk[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproduk[".fieldsForRegister"] = array();

$tdataproduk[".listAjax"] = false;

	$tdataproduk[".audit"] = false;

	$tdataproduk[".locking"] = false;

$tdataproduk[".edit"] = true;
$tdataproduk[".afterEditAction"] = 1;
$tdataproduk[".closePopupAfterEdit"] = 1;
$tdataproduk[".afterEditActionDetTable"] = "";

$tdataproduk[".add"] = true;
$tdataproduk[".afterAddAction"] = 1;
$tdataproduk[".closePopupAfterAdd"] = 1;
$tdataproduk[".afterAddActionDetTable"] = "";

$tdataproduk[".list"] = true;



$tdataproduk[".reorderRecordsByHeader"] = true;


$tdataproduk[".exportFormatting"] = 2;
$tdataproduk[".exportDelimiter"] = ",";
		
$tdataproduk[".view"] = true;

$tdataproduk[".import"] = true;

$tdataproduk[".exportTo"] = true;

$tdataproduk[".printFriendly"] = true;

$tdataproduk[".delete"] = true;

$tdataproduk[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataproduk[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataproduk[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataproduk[".searchSaving"] = false;
//

$tdataproduk[".showSearchPanel"] = true;
		$tdataproduk[".flexibleSearch"] = true;

$tdataproduk[".isUseAjaxSuggest"] = true;

$tdataproduk[".rowHighlite"] = true;





$tdataproduk[".ajaxCodeSnippetAdded"] = false;

$tdataproduk[".buttonsAdded"] = false;

$tdataproduk[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduk[".isUseTimeForSearch"] = false;



$tdataproduk[".badgeColor"] = "e8926f";


$tdataproduk[".allSearchFields"] = array();
$tdataproduk[".filterFields"] = array();
$tdataproduk[".requiredSearchFields"] = array();

$tdataproduk[".allSearchFields"][] = "ProdukID";
	$tdataproduk[".allSearchFields"][] = "NamaProduk";
	$tdataproduk[".allSearchFields"][] = "Harga";
	$tdataproduk[".allSearchFields"][] = "Stok";
	

$tdataproduk[".googleLikeFields"] = array();
$tdataproduk[".googleLikeFields"][] = "ProdukID";
$tdataproduk[".googleLikeFields"][] = "NamaProduk";
$tdataproduk[".googleLikeFields"][] = "Harga";
$tdataproduk[".googleLikeFields"][] = "Stok";


$tdataproduk[".advSearchFields"] = array();
$tdataproduk[".advSearchFields"][] = "ProdukID";
$tdataproduk[".advSearchFields"][] = "NamaProduk";
$tdataproduk[".advSearchFields"][] = "Harga";
$tdataproduk[".advSearchFields"][] = "Stok";

$tdataproduk[".tableType"] = "list";

$tdataproduk[".printerPageOrientation"] = 0;
$tdataproduk[".nPrinterPageScale"] = 100;

$tdataproduk[".nPrinterSplitRecords"] = 40;

$tdataproduk[".nPrinterPDFSplitRecords"] = 40;



$tdataproduk[".geocodingEnabled"] = false;





$tdataproduk[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataproduk[".pageSize"] = 20;

$tdataproduk[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproduk[".strOrderBy"] = $tstrOrderBy;

$tdataproduk[".orderindexes"] = array();

$tdataproduk[".sqlHead"] = "SELECT ProdukID,  	NamaProduk,  	Harga,  	Stok";
$tdataproduk[".sqlFrom"] = "FROM produk";
$tdataproduk[".sqlWhereExpr"] = "";
$tdataproduk[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduk[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduk[".arrGroupsPerPage"] = $arrGPP;

$tdataproduk[".highlightSearchResults"] = true;

$tableKeysproduk = array();
$tableKeysproduk[] = "ProdukID";
$tdataproduk[".Keys"] = $tableKeysproduk;

$tdataproduk[".listFields"] = array();
$tdataproduk[".listFields"][] = "ProdukID";
$tdataproduk[".listFields"][] = "NamaProduk";
$tdataproduk[".listFields"][] = "Harga";
$tdataproduk[".listFields"][] = "Stok";

$tdataproduk[".hideMobileList"] = array();


$tdataproduk[".viewFields"] = array();
$tdataproduk[".viewFields"][] = "ProdukID";
$tdataproduk[".viewFields"][] = "NamaProduk";
$tdataproduk[".viewFields"][] = "Harga";
$tdataproduk[".viewFields"][] = "Stok";

$tdataproduk[".addFields"] = array();
$tdataproduk[".addFields"][] = "NamaProduk";
$tdataproduk[".addFields"][] = "Harga";
$tdataproduk[".addFields"][] = "Stok";

$tdataproduk[".masterListFields"] = array();
$tdataproduk[".masterListFields"][] = "ProdukID";
$tdataproduk[".masterListFields"][] = "NamaProduk";
$tdataproduk[".masterListFields"][] = "Harga";
$tdataproduk[".masterListFields"][] = "Stok";

$tdataproduk[".inlineAddFields"] = array();

$tdataproduk[".editFields"] = array();
$tdataproduk[".editFields"][] = "NamaProduk";
$tdataproduk[".editFields"][] = "Harga";
$tdataproduk[".editFields"][] = "Stok";

$tdataproduk[".inlineEditFields"] = array();

$tdataproduk[".updateSelectedFields"] = array();
$tdataproduk[".updateSelectedFields"][] = "NamaProduk";
$tdataproduk[".updateSelectedFields"][] = "Harga";
$tdataproduk[".updateSelectedFields"][] = "Stok";


$tdataproduk[".exportFields"] = array();
$tdataproduk[".exportFields"][] = "ProdukID";
$tdataproduk[".exportFields"][] = "NamaProduk";
$tdataproduk[".exportFields"][] = "Harga";
$tdataproduk[".exportFields"][] = "Stok";

$tdataproduk[".importFields"] = array();
$tdataproduk[".importFields"][] = "ProdukID";
$tdataproduk[".importFields"][] = "NamaProduk";
$tdataproduk[".importFields"][] = "Harga";
$tdataproduk[".importFields"][] = "Stok";

$tdataproduk[".printFields"] = array();
$tdataproduk[".printFields"][] = "ProdukID";
$tdataproduk[".printFields"][] = "NamaProduk";
$tdataproduk[".printFields"][] = "Harga";
$tdataproduk[".printFields"][] = "Stok";


//	ProdukID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdukID";
	$fdata["GoodName"] = "ProdukID";
	$fdata["ownerTable"] = "produk";
	$fdata["Label"] = GetFieldLabel("produk","ProdukID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataproduk["ProdukID"] = $fdata;
//	NamaProduk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NamaProduk";
	$fdata["GoodName"] = "NamaProduk";
	$fdata["ownerTable"] = "produk";
	$fdata["Label"] = GetFieldLabel("produk","NamaProduk");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NamaProduk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NamaProduk";

	
	
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




	$tdataproduk["NamaProduk"] = $fdata;
//	Harga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Harga";
	$fdata["GoodName"] = "Harga";
	$fdata["ownerTable"] = "produk";
	$fdata["Label"] = GetFieldLabel("produk","Harga");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Harga";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Harga";

	
	
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




	$tdataproduk["Harga"] = $fdata;
//	Stok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Stok";
	$fdata["GoodName"] = "Stok";
	$fdata["ownerTable"] = "produk";
	$fdata["Label"] = GetFieldLabel("produk","Stok");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Stok";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Stok";

	
	
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




	$tdataproduk["Stok"] = $fdata;


$tables_data["produk"]=&$tdataproduk;
$field_labels["produk"] = &$fieldLabelsproduk;
$fieldToolTips["produk"] = &$fieldToolTipsproduk;
$placeHolders["produk"] = &$placeHoldersproduk;
$page_titles["produk"] = &$pageTitlesproduk;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["produk"] = array();
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
		
	$detailsTablesData["produk"][$dIndex] = $detailsParam;

	
		$detailsTablesData["produk"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["produk"][$dIndex]["masterKeys"][]="ProdukID";

				$detailsTablesData["produk"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["produk"][$dIndex]["detailKeys"][]="ProdukID";

// tables which are master tables for current table (detail)
$masterTablesData["produk"] = array();


	
				$strOriginalDetailsTable="petugas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="petugas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "petugas";
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
					$masterTablesData["produk"][0] = $masterParams;
				$masterTablesData["produk"][0]["masterKeys"] = array();
	$masterTablesData["produk"][0]["masterKeys"][]="id";
				$masterTablesData["produk"][0]["detailKeys"] = array();
	$masterTablesData["produk"][0]["detailKeys"][]="ProdukID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_produk()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdukID,  	NamaProduk,  	Harga,  	Stok";
$proto0["m_strFrom"] = "FROM produk";
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
	"m_strName" => "ProdukID",
	"m_strTable" => "produk",
	"m_srcTableName" => "produk"
));

$proto6["m_sql"] = "ProdukID";
$proto6["m_srcTableName"] = "produk";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NamaProduk",
	"m_strTable" => "produk",
	"m_srcTableName" => "produk"
));

$proto8["m_sql"] = "NamaProduk";
$proto8["m_srcTableName"] = "produk";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Harga",
	"m_strTable" => "produk",
	"m_srcTableName" => "produk"
));

$proto10["m_sql"] = "Harga";
$proto10["m_srcTableName"] = "produk";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Stok",
	"m_strTable" => "produk",
	"m_srcTableName" => "produk"
));

$proto12["m_sql"] = "Stok";
$proto12["m_srcTableName"] = "produk";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "produk";
$proto15["m_srcTableName"] = "produk";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ProdukID";
$proto15["m_columns"][] = "NamaProduk";
$proto15["m_columns"][] = "Harga";
$proto15["m_columns"][] = "Stok";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "produk";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "produk";
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
$proto0["m_srcTableName"]="produk";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_produk = createSqlQuery_produk();


	
		;

				

$tdataproduk[".sqlquery"] = $queryData_produk;

$tableEvents["produk"] = new eventsBase;
$tdataproduk[".hasEvents"] = false;

?>