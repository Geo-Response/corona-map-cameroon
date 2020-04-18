<?php

    $db = new PDO('pgsql:host=georesponse.postgres.database.azure.com;port=5432;dbname=georesponsedb;', 'postgres@georesponse', 'Geoadvantage2020');
    $sql = $db->prepare("select nombre_total_de_cas, nombre_de_victimes,nombre_de_personnes_retablies from region where name = 'Adamaoua'");
    $sql->execute();
        

    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
//         foreach ($row as $field=>$value){
//                $data = 
//            }
         echo json_encode($row);
    }
   
 
?>