<?php

// curl_init();
// curl_setopt();
// curl_exec();
// curl_close();

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://localhost/php-rest-api/api-fetch-all.php");
curl_exec($ch);
curl_close($ch);
?>