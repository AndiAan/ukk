<?php
$dalTablepetugas = array();
$dalTablepetugas["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablepetugas["nama_petugas"] = array("type"=>201,"varname"=>"nama_petugas", "name" => "nama_petugas");
$dalTablepetugas["username"] = array("type"=>201,"varname"=>"username", "name" => "username");
$dalTablepetugas["password"] = array("type"=>201,"varname"=>"password", "name" => "password");
$dalTablepetugas["level"] = array("type"=>3,"varname"=>"level", "name" => "level");
	$dalTablepetugas["id"]["key"]=true;

$dal_info["kasir_at_localhost__petugas"] = &$dalTablepetugas;
?>