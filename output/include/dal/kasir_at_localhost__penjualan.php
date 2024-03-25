<?php
$dalTablepenjualan = array();
$dalTablepenjualan["PenjualanID"] = array("type"=>3,"varname"=>"PenjualanID", "name" => "PenjualanID");
$dalTablepenjualan["TanggalPenjualan"] = array("type"=>7,"varname"=>"TanggalPenjualan", "name" => "TanggalPenjualan");
$dalTablepenjualan["TotalHarga"] = array("type"=>14,"varname"=>"TotalHarga", "name" => "TotalHarga");
$dalTablepenjualan["PelangganID"] = array("type"=>3,"varname"=>"PelangganID", "name" => "PelangganID");
	$dalTablepenjualan["PenjualanID"]["key"]=true;

$dal_info["kasir_at_localhost__penjualan"] = &$dalTablepenjualan;
?>