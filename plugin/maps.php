<?php

include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/nav.php");
include('get_data.php');

?>

<div class="content">
    <div id="map" style="height: 600px; width: 100%;">
    </div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9etM9rqnYas63ypURAkvEFn_W_sU0NM4&callback=initMap">
    </script>
</div>


<?php include('../includes/footer.php'); ?>   
<script type="text/javascript">
	
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: { lat: 18.1096, lng: -77.2975},
        });

    
        var getalldata = <?php echo json_encode($getallinfo_array); ?>;
        var getallkeys = <?php echo json_encode($get_keys); ?>;

        const infowindow = new google.maps.InfoWindow();

      
          for(i=0; i<getalldata.length; i++){
      
                const currentdata = getalldata[i].split(",", 9);
                const latlng = {
                    lat: parseFloat(currentdata[3]),
                    lng: parseFloat(currentdata[4]),
                  };
              
              const contentString =                    
    
'<div class="card" style="width: 29rem;">'+
                                              '<img class="card-img-top"  src= "'+currentdata[0]+'" alt="Card image cap">'+
                                              '<div class="card-body">'+
                                                          '<table class="table">'+
                                                          ' <thead class="thead-dark">'+
                                                            "</thead>"+
                                                            "<tbody>"+
                                                                "<tr>"+
                                                                  "<td>address:"+currentdata[1]+"</td>"+
                                                                  "<td>parish:"+currentdata[6]+"</td>"+
                                                                "</tr>"+
                                                                "<tr>"+
                                                                  "<td>arterialPrio:"+currentdata[2]+"</td>"+
                                                                  "<td>priority:"+currentdata[7]+"</td>"+
                                                                "</tr>"+
                                                                "<tr>"+
                                                                  "<td>latitude: "+ currentdata[3]+"</td>"+
                                                                  "<td>severity: "+ currentdata[8]+"</td>"+
                                                                "</tr>"+
                                                                "<tr>"+
                                                                  "<td>longitude: "+ currentdata[4]+"</td>"+
                                                                  "<td>no_of_reports: "+ currentdata[5]+"</td>"+
                                                                "</tr>"+
                                                            "</tbody>"+

                                                    "</table>"+
                                              "</div>"+
                                              '<a href="viewpothole.php?key='+getallkeys[i]+'" class="btn btn-primary">More Info</a>'+

"<br> <br>"+
                                      "</div>";
              const infowindow = new google.maps.InfoWindow({
                content: contentString,
              });
              const marker = new google.maps.Marker({
                position: latlng,
                map,
                title: "Uluru (Ayers Rock)",
              });
              marker.addListener("click", () => {
                infowindow.open(map, marker);
              });
          } 
    
    }


</script>


