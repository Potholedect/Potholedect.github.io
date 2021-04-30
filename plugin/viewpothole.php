<?php

include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/nav.php");
include("get_data.php");


$key = $_GET['key'];


?>

<div class="content" id="content">
<button id="editbtn" >edit</button>
   <div class="card">
        <img class="card-img-top" src="<?php echo  $fetchdata[$key]['image']; ?>" >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <ul class="list-group">
            <li class="list-group-item list-group-item-success"><i class="fa fa-briefcase"style="font-size:20px;"></i>   Reported By: <?php echo $fetchdata[$key]['userid'] ?></li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-user"style="font-size:20px;"></i>   Severity</li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-user"style="font-size:20px;"></i>   Priority</li>

            <li class="list-group-item list-group-item-success"><i class="fa fa-map-marker"style="font-size:20px;"></i>   Location</li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-clock-o"style="font-size:20px;"></i>   Contactor:</li>
            <li class="list-group-item list-group-item-success"><i class="fa fa-inr"style="font-size:20px;"></i>   Land Sureyor</li>
          </ul>
          
        </div>
        <div class="card-footer">
          <button type="button" class="btn" id="left-panel-link" >SHOW ON MAP </button>
        </div>
    </div>
</div>


<div class="content" id="updateform">
<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <button  class="btnRegister"  id="cancelbtn" value="Register">cancel</button>
                                        <button  class="btnRegister"  id="updatebtn" value="Register">update</button>


                                    </div>
                                </div>
                            </div>
</div>

<?php 
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


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $("#editbtn").click(function(){
    $("#content").toggle();
    $("#updateform").toggle();

  });

  $("#cancelbtn").click(function(){
    $("#content").toggle();
    $("#updateform").toggle();

  });

  $("#updatebtn").click(function(){
        var ajaxurl = 'update_record.php', 
        data =  {'postdata': <?php echo json_encode($dataPost);?>.split(",", 9),
        'key': <?php echo json_encode($key);?>}; 
        $.post(ajaxurl, data, function (response) { 
            // Response div goes here. 
            alert("action performed successfully"); 
        }); 
  });



</script>
<?php

include("../includes/footer.php");


?>