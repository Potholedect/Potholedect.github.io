<?php
//loop through every record , check if the distance is less than 1
//if it is , increment  number of reports 
// once thats done , update the number of reports for that pothole in firebase

include('euclidean_distance.php');
include('update_record.php');

function reportcount($fetchdata){
    if ($fetchdata > 0) {

        $count=1;
        $testcount=1;
        $no_reports=1;
        $checked_keys=array();
        foreach ($fetchdata as $key => $row) {
            if (!(in_array($key, $checked_keys)))
            {
            foreach ($fetchdata as $key1 => $row2) {
                // echo $count."-----".$testcount."<br>";
                
                    if ($count==$testcount){
                        $testcount+=1;
                    }else{
                        $coord1=[$row['latitude'],$row['longitude']];
                        $coord2=[$row2['latitude'],$row2['longitude']];
                        $distance = eucDistance($coord1,$coord2);
                        if($distance<=0.0009){
                            $no_reports+=1;
                            array_push($checked_keys,$key1);
                        }
                        // echo  "Coord1(".$coord1[0].",".$coord1[1].") ---------- ". "Coord2(".$coord2[0].",".$coord2[1].") ==>  ".$distance;
                        // echo "<br> <br> <br>";
                        $testcount+=1;
                    }
        
            }
        }
            // echo "no_of reports for  Coord1(".$coord1[0].",".$coord1[1].") -----------------".$no_reports;
            // echo "<br> <br>";
            //update that row in the databse
            if($no_reports>=1){
                $Postdata=[
                    'no_of_reports' => $no_reports,
                    'address' => $row['address'],
                    'image' => $row['image'],
                    'latitude' => $row['latitude'],
                    'longitude' => $row['longitude'],
                    'parish' => $row['parish'],
                    'severity' => $row['severity'],
                    'priority'=> $no_reports+$row['arterialPrio']
                ];
               
                update_rec($Postdata,$key);
            }
           
            $count+=1;
            $testcount=1;
            $no_reports=1;
    
            
    
        }
    }
}

?>