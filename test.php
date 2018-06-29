<?php
//variables
$urlString=$_POST["urls"];
$urls=explode(";",$urlString);


foreach ($urls as $url) 
{
    //initialisation
    $init=curl_init($url);
    curl_setopt($init,CURLOPT_URL,$url);
    curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
    
    //execute
    $result=curl_exec($init);
    
    //get HTTP code & time
    $code=curl_getinfo($init, CURLINFO_HTTP_CODE);
    $time=curl_getinfo($init,CURLINFO_TOTAL_TIME);

    //display results
    include('resultPage.html');
}
curl_close($init);
?>