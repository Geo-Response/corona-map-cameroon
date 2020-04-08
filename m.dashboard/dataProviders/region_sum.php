<?php

    $db = new PDO('pgsql:host=georesponse.postgres.database.azure.com;port=5432;dbname=georesponsedb;', 'postgres@georesponse', 'Geoadvantage2020');
    $sql = $db->prepare("select sum(nombre_total_de_cas) as cas, sum(nombre_de_victimes) as victime,sum(nombre_de_personnes_retablies)  as retablies from region");
    $sql->execute();
        

    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
         
         echo json_encode($row);
    }
   
 
?>