<?php 


function arterialPriorities($address){

    //**************Prio 1's*********************
    if(strpos($address,"Hope Rd")==true){
      $arterialPrio = 1;

    }
    if(strpos($address,"Constant Spring Rd")==true){
       $arterialPrio=1;
     }
    if(strpos($address,"Waterloo Rd")==true){
      $arterialPrio=1;

    }
    if(strpos($address,"Trafalgar Rd")==true){
      $arterialPrio=1;

    }

    if(strpos($address,"Lady Musgrave Rd")==true){
      $arterialPrio=1;

    }
    if(strpos($address,"Molynes Rd")==true){
      $arterialPrio=1;

    }

    if(strpos($address,"Hagley Park Rd")==true){
      $arterialPrio=1;

    }

    if(strpos($address,"Half Way Tree Rd")==true){
      $arterialPrio=1;

    }

    if(strpos($address,"Mona Rd")==true){
      $arterialPrio=1;

    }


    if(strpos($address,"Barbrican Rd")==true){
      $arterialPrio=1;

    }

    if(strpos($address,"Red Hills Rd")==true){
      $arterialPrio=1;

    }

    if(strpos($address,"Roehampton Dr")==true){
      $arterialPrio=1;

    }




    //**************Prio 2's*********************
    if(strpos($address,"Washington Blvd")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Meadowbrook Ave")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Olivier Rd")==true){
      $arterialPrio=2;

    }
    if(strpos($address,"Shortwood Rd")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Liguanea Ave")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Wellington Dr")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Garden Blvd")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Wellington Dr")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Seaview Ave")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Wellington Dr")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Paddington Terrace")==true){
      $arterialPrio=2;

    }

    //**************Prio 3's*********************
    if(strpos($address,"Lyndale Dr")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Bronze Rd")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Silver Rd")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Gold Rd")==true){
      $arterialPrio=2;

    }

    if(strpos($address,"Marathon Dr")==true){
      $arterialPrio=2;

    }


    return $arterialPrio;
  }













function get_aterial_prior($fetchdata){
    if ($fetchdata > 0) {
  
        $count=1;
        $testcount=1;
        $no_reports=1;
        foreach ($fetchdata as $key => $row) {
           
          
                // echo $count."-----".$testcount."<br>";
            $ariterial_prior=$row["arterialPtio"];
    
    
        }
    }

}


  

 
  ?>