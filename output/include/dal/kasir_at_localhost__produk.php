<?php
$dalTableproduk = array();
$dalTableproduk["ProdukID"] = array("type"=>3,"varname"=>"ProdukID", "name" => "ProdukID");
$dalTableproduk["NamaProduk"] = array("type"=>201,"varname"=>"NamaProduk", "name" => "NamaProduk");
$dalTableproduk["Harga"] = array("type"=>14,"varname"=>"Harga", "name" => "Harga");
$dalTableproduk["Stok"] = array("type"=>3,"varname"=>"Stok", "name" => "Stok");
	$dalTableproduk["ProdukID"]["key"]=true;

$dal_info["kasir_at_localhost__produk"] = &$dalTableproduk;
?>