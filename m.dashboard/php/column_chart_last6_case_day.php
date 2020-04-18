<?php
    $strQry="select datefme,contaminés_par_jour from (select * from contaminations_par_jour order by total_contaminés desc limit 6) as contamination order by total_contaminés asc";

    $db = new PDO('pgsql:host=georesponse.postgres.database.azure.com;port=5432;dbname=georesponsedb;', 'postgres@georesponse', 'Geoadvantage2020');
    $sql = $db->query($strQry);
    $data = array();

    $table = [['Jour', 'Nouveaux cas']];
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $data = array();
        foreach ($row as $field=>$value){ 
            array_push($data,$value);
        }
         array_push($table,$data);
    }
    echo json_encode($table);
?>
