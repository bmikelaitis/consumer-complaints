<?php
$ticker = $_POST["ticker"];
$volume = $_POST["volume"];

$tmp = exec("python testscriptphp.py $ticker",$output);
var_dump($output);
 echo $output[0];

?>
												
