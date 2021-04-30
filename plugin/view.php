<?php
include('../includes/dbconfig.php');
include('priorization.php');
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/nav.php");

?>
<div id="loader" class="center"></div>

<div class="content " >
<div class="col md-12 mt-4">
    <div class="card" >
        <div class="card-body">
            <div class="table-responsive"  >
                <table class="table"   table-bordered>
                    <thead>
                        <tr>
                        <th>Type</th>
                            <th>Image</th>
                            <th>Location</th>
                            <th>Coordinates</th>
                            <th> # of reports </th>
                            <th> Arterial Priority </th>
                            <th> Priority </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php        
                     
                        $priority_keys=full_prioritization($fetchdata);
                        if ($fetchdata > 0) {

                            for ($x = 0; $x <count($fetchdata); $x++) {
                                $index=$priority_keys[$x];
                               
                                $img=  $fetchdata[$index]['image'];
                                $loc=  $fetchdata[$index]['address'].", ". $fetchdata[$index]['parish'];
                                $sev=  $fetchdata[$index]['severity'];
                                $coord=  $fetchdata[$index]['latitude'].",". $fetchdata[$index]['longitude'];
                                $no_reports=  $fetchdata[$index]['no_of_reports'];
                                $pri=  $fetchdata[$index]['priority'];
                                $art_pri= $fetchdata[$index]['arterialPrio'];


                        ?>
                        <tr>
                                <td><a href="viewpothole.php?key=<?php echo $index ?>"><?php echo " $sev"; ?></a></td>

                                <td><img src="<?php echo " $img"; ?>" width="80px" height="50px"></td>
                                
                                <td><?php echo " $loc"; ?></td>
                                <td><?php echo " $coord"; ?></td>
                                <td> <?php echo " $no_reports";?></td>
                                <td> <?php echo " $art_pri";?></td>
                                <td> <?php echo " $pri";?></td>

                        </tr>

                        <?php
                            }
                        } else {

                            echo "data not availiable ";
                        }
                        ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>

</div>


<script>

console.info(performance.navigation.type);
if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
  console.info( "This page is reloaded" );
  window.location.href = "../plugin/loader.php";

} else {
  console.info( "This page is not reloaded");
}
    </script>

<?php include('../includes/footer.php'); ?>