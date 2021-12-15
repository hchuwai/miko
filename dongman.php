<?php include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php?cid=comic";
$listc=json_decode(fileget2($wangzhi),true);
include('template/'.$mkcms_bdyun.'/dongman.php');?>