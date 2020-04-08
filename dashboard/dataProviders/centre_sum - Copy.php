<?php

    $db = new PDO('pgsql:host=georesponse.postgres.database.azure.com;port=5432;dbname=georesponsedb;', 'postgres@georesponse', 'Geoadvantage2020');
    $sql = $db->prepare("select nombre_total_de_cas, nombre_de_victimes,nombre_de_personnes_retablies from region where name = 'Centre'");
    $params = ["per"=>$periode];
    $sql->execute($params);
        
    echo "<table class='table table-bordered table-hover table-sm table-striped'>";
    echo "<tr> <th>locationid</th> <th>taxename</th> <th>uid</th> <th>paymentstatus</th> <th>periode</th> </tr>";
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
            foreach ($row as $field=>$value){
                echo "<td>{$value}</td>";
            }
            echo "</tr>";
         
    }
    echo "</table>";
 
?>