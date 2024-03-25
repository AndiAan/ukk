<?php
$dalTabledetailpenjualan = array();
$dalTabledetailpenjualan["DetailID"] = array("type"=>3,"varname"=>"DetailID", "name" => "DetailID");
$dalTabledetailpenjualan["PenjualanID"] = array("type"=>3,"varname"=>"PenjualanID", "name" => "PenjualanID");
$dalTabledetailpenjualan["ProdukID"] = array("type"=>3,"varname"=>"ProdukID", "name" => "ProdukID");
$dalTabledetailpenjualan["JumlahProduk"] = array("type"=>3,"varname"=>"JumlahProduk", "name" => "JumlahProduk");
$dalTabledetailpenjualan["Subtotal"] = array("type"=>14,"varname"=>"Subtotal", "name" => "Subtotal");
	$dalTabledetailpenjualan["DetailID"]["key"]=true;

$dal_info["kasir_at_localhost__detailpenjualan"] = &$dalTabledetailpenjualan;
?>