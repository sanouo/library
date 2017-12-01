<?php
  require("template/header.php");
 ?>


  <!-- start of the div class block -->
 <div class="block">

   <?php foreach ($info as $key => $value){
     ?>

     <div class="container accounts col-12 col-md-6 col-lg-4">
       <div class="row">
                <div class="card col-12 col-md-12 col-lg-12">
                  <div class="card-block col-12 col-md-12 col-lg-12">
                  <h3 class="card-title"><?php echo $value->getName(); ?></h3>
                  <p class="card-text"><?php echo $value->getAdress(); ?></p>
                  <p class="card-text"><?php echo $value->getCity(); ?></p>
                  </div>
                </div>
        </div>
    </div>

            <?php
              }
            ?>

  </div>
    <!-- end of the div class block -->

 <?php
   require("template/footer.php");
