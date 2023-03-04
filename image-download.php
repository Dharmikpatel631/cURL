<?php 

$url ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBjMFianvLprqcE5ZGe47uQFjpGoyHXz5ZJF0bNvwZng&s";
$image = "image.jpg";

$fimage = fopen($image,'w+');
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_FILE,$fimage);
curl_exec($ch);
curl_close($ch);
fclose($fimage);

?>