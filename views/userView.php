<?php
  require("template/header.php");
 ?>


  <!-- start of the div class block -->
 <!-- <div class="block">

   <?php foreach ($info as $key => $value){
     ?>

     <div class="container accounts col-12 col-md-6 col-lg-4">
       <div class="row">
                <div class="card col-12 col-md-12 col-lg-12">
                  <div class="card-block col-12 col-md-12 col-lg-12">
                  <h3 class="card-title"><?php echo $value->getName(); ?></h3>
                  <p class="card-text"><?php echo $value->getAddress(); ?></p>
                  <p class="card-text"><?php echo $value->getCity(); ?></p>
                  </div>
                </div>
        </div>
    </div>

            <?php
              }
            ?>

  </div> -->
    <!-- end of the div class block -->
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>address</th>
          <th>City</th>
        </tr>
      </thead>

    <?php foreach ($info as $key => $value){
      ?>

      <tbody>
        <tr>
          <td><?php echo $value->getName(); ?></td>
          <td><?php echo $value->getAddress(); ?></td>
          <td><?php echo $value->getCity(); ?></td>
        </tr>

      </tbody>


    <?php
      }
    ?>

  </table>

 <?php
   require("template/footer.php");
