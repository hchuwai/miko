<?php
include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php";
$list1=json_decode(fileget2($wangzhi),true);
include('template/'.$mkcms_bdyun.'/index.php');?>