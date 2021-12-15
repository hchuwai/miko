<?php include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php?cid=tv";
$listt=json_decode(fileget2($wangzhi),true);
include('template/'.$mkcms_bdyun.'/tv.php');?>