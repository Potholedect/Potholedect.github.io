<?php

    include('../includes/dbconfig.php');
    
    $ref = "/";
    $fetchdata = $database->getreference($ref)->getValue();
       
    $getallinfo_array=array();
    $get_keys=array(); //array to store all keys of the potholes 
 
    foreach ($fetchdata as $index => $row) {
         $data=  $fetchdata[$index]['image'].",".$fetchdata[$index]['address'].",".$fetchdata[$index]['arterialPrio'].",".$fetchdata[$index]['latitude'].",".$fetchdata[$index]['longitude'].",".$fetchdata[$index]['no_of_reports'].",".$fetchdata[$index]['parish'].",".$fetchdata[$index]['priority'].",".$fetchdata[$index]['severity'];
         array_push($getallinfo_array,$data);
         array_push($get_keys,$index);
     }
     $total_numreports=count($fetchdata);



?>