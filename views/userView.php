<?php
  require("template/header.php");
 ?>


  
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

  <a href="index.php"><button type="button"  class="btn btn-primary">Home</button></a>

 <?php
   require("template/footer.php");
