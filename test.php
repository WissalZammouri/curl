<?php
$url=$_POST["url"];
$init=curl_init($url);
curl_setopt($init,CURLOPT_URL,$url);
curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
$result=curl_exec($init);
$info=curl_getinfo($init);
echo json_encode($info);
curl_close($init);
?>