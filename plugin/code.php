<?php


include("../includes/dbconfig.php");
if(isset($_POST['save_push_data'])){
    $image=$_POST['image'];
    $location =$_POST['location'];

    $data=[
        'image'=>$image,
        'location'=>$location
    ];

    $ref="/";
    $postdata = $database->getReference($ref)->push($data);

    if($postdata){
        echo "insert";
        $_SESSION['status']="Data Inserted";
        header("Location: insert.php");
    }else{
        echo "not";
      
    } 
}

?>