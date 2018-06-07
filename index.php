<?php

include "vendor/autoload.php";
use Twitter\Search\Search;

$search = new Search();
$search->setToken("uOfrqHJhdPCDlbUcPpC16YHQH","4spM3Y1wTmuiI0uooTF4pXKbyb2VDWOxIpVCUbAQlw55CCCBn8");
$value = ["q" => "ahmed khan"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";