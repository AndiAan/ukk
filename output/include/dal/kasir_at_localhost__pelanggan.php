<?php
$dalTablepelanggan = array();
$dalTablepelanggan["PelangganID"] = array("type"=>3,"varname"=>"PelangganID", "name" => "PelangganID");
$dalTablepelanggan["NamaPelanggan"] = array("type"=>200,"varname"=>"NamaPelanggan", "name" => "NamaPelanggan");
$dalTablepelanggan["Alamat"] = array("type"=>201,"varname"=>"Alamat", "name" => "Alamat");
$dalTablepelanggan["NomorTelepon"] = array("type"=>200,"varname"=>"NomorTelepon", "name" => "NomorTelepon");
	$dalTablepelanggan["PelangganID"]["key"]=true;

$dal_info["kasir_at_localhost__pelanggan"] = &$dalTablepelanggan;
?>