<?php

include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/nav.php");
?>

<div class=container>
    <div id="loader" class="center">

    <img src="../assets/img/loading_g.gif">
    </div>

</div>

<script>


        document.onreadystatechange = function() {
                document.querySelector(
                  "#loader").style.visibility = "visible";
        };

        

        window.location.href = "../plugin/view.php";

    </script>

<?php include('../includes/footer.php'); ?>