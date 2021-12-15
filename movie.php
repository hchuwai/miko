<?php 
include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php?cid=movie";
$listm=json_decode(fileget2($wangzhi),true);
include('template/'.$mkcms_bdyun.'/movie.php');?>