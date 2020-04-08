<?php


$json = file_get_contents('http://3.20.253.184:8080/geoserver/georesponse/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=georesponse%3Aquartiers&outputFormat=application%2Fjson');

echo $json
    
?>