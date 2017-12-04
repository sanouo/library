<?php
  require("template/header.php");
 ?>


<!-- start table   -->
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>address</th>
          <th>City</th>
        </tr>
      </thead>

    <?php foreach ($info as $key => $value){
      ?>

      <tbody>
        <tr>
          <td><?php echo $value->getId(); ?></td>          
          <td><?php echo $value->getName(); ?></td>
          <td><?php echo $value->getAddress(); ?></td>
          <td><?php echo $value->getCity(); ?></td>
        </tr>
      </tbody>

    <?php
      }
    ?>

  </table>
<!-- end table -->


<!-- start div class home -->
<div class="home">
  <a href="index.php"><button type="button"  class="btn btn-primary">Home</button></a>
</div>
<!-- end div class home -->


 <?php
   require("template/footer.php");
