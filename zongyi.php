<?php include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php?cid=zy";
$listz=json_decode(fileget2($wangzhi),true);
include('template/'.$mkcms_bdyun.'/zongyi.php');?>