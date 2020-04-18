<?php

    $db = new PDO('pgsql:host=georesponse.postgres.database.azure.com;port=5432;dbname=georesponsedb;', 'postgres@georesponse', 'Geoadvantage2020');
    $sql = $db->prepare("select dept_name,nombre_total_de_cas, nombre_de_victimes,nombre_de_personnes_retablies from departement where reg_name = 'Adamaoua' and nombre_total_de_cas is not null");
    
    $sql->execute();
        
    echo "<table class='table table-bordered table-hover table-responsive table-sm .thead-light'>";
    echo "<tr> <th>Département</th> <th>Nombre de cas</th> <th>Nombre de victimes</th> <th>Nombre de rétablies</th> </tr>";
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
            foreach ($row as $field=>$value){
                echo "<td>{$value}</td>";
            }
            echo "</tr>";
         
    }
    echo "</table>";
 
?>
