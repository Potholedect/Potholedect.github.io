<?php include('../includes/header.php'); ?>
<!-- <?php session_start();?> -->
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <form action="code.php" method="post">
                <div class="form-group">
                    <input type="text" name="image" class="form control">

                </div>

                <div class="form-group">
                    <input type="text" name="location" class="form control">

                </div>
                <div class="form-group">
                    <button type="submit" name="save_pus_data"> Save Data</button>
                </div>
            </form>
        </div>

    </div>
</div>



<?php include('../includes/footer.php'); ?>