<?php
    $strQry="SELECT datefme,total_contaminés FROM contaminations_par_jour";

    $db = new PDO('pgsql:host=georesponse.postgres.database.azure.com;port=5432;dbname=georesponsedb;', 'postgres@georesponse', 'Geoadvantage2020');
    $sql = $db->query($strQry);
    

    $table = [];
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $data = array();
        foreach ($row as $field=>$value){ 
            array_push($data,$value);
        }
         array_push($table,$data);
    }
    echo json_encode($table);
?>
