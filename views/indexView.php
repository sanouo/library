<?php
  require("template/header.php");
 ?>


 <!-- start of the div class formu for add account-->
 <div class="formu col-12 col-md-8 col-lg-6">
  <form action="index.php" method="post">
     <div class="form-group">
       <input type="text" class="form-control" id="formGroupExampleInput" name="title"  placeholder="title">
     </div>
     <div class="form-group">
       <input type="text" class="form-control" id="formGroupExampleInput1" name="author" placeholder="author">
     </div>
     <div class="form-group">
       <input type="text" class="form-control" id="formGroupExampleInput2" name="description" placeholder="description">
     </div>
     <div class="form-group">
       <input type="text" class="form-control" id="formGroupExampleInput2" name="releaseDate" placeholder="releaseDate">
     </div>
     <div class="form-group">
       <input type="text" class="form-control" id="formGroupExampleInput4" name="category" placeholder="category">
     </div>
     <div class="form-group">
       <input type="text" class="form-control" id="formGroupExampleInput5" name="available" placeholder="available">
     </div>
     <button type="submit" value="Submit" name="addBook" class="btn btn-primary submi">Submit</button>
   </form>
 </div>
 <!-- end of the div class formu for add account-->


  <!-- start of the div class block -->
 <div class="block">

   <?php foreach ($donnees as $key => $value){
     ?>

     <div class="container accounts col-12 col-md-6 col-lg-4">
       <div class="row">
                <div class="card col-12 col-md-12 col-lg-12">
                  <div class="card-block col-12 col-md-12 col-lg-12">
                  <h3 class="card-title"><?php echo $value->getTitle(); ?></h3>
                  <p class="card-text"><?php echo $value->getAuthor(); ?></p>
                  <p class="card-text"><?php echo $value->getDescription(); ?></p>
                  <p class="card-text"><?php echo $value->getReleaseDate(); ?></p>
                  <p class="card-text"><?php echo $value->getCategory(); ?></p>
                  <p class="card-text"><?php echo $value->getAvailable(); ?></p>
                  <a href="index.php?supprim=<?php echo $value->getId();?>"><i class="material-icons">delete</i></a>
                  <a href="views/descriptionView.php?id=<?php echo $value->getId();?>">update</a>
                  </div>
                </div>
        </div>
    </div>

            <?php
              }
            ?>

  </div>
    <!-- end of the div class block -->

<!--

    <table class="table">
      <thead>
        <tr>
          <th>title</th>
          <th>author</th>
          <th>description</th>
          <th>releaseDate</th>
          <th>Category</th>
        </tr>
      </thead>

    <?php foreach ($donnees as $key => $value){
      ?>

      <tbody>
        <tr>
          <td><?php echo $value->getTitle(); ?></td>
          <td><?php echo $value->getAuthor(); ?></td>
          <td><?php echo $value->getDescription(); ?></td>
          <td><?php echo $value->getReleaseDate(); ?></td>
          <td><?php echo $value->getCategory(); ?></td>
          <td><a href="index.php?supprim=<?php echo $value->getId();?>"><i class="material-icons">delete</i></a></td>
          <td><a href="views/descriptionView.php?id=<?php echo $value->getId();?>">info</a></td>




        </tr>

      </tbody>


    <?php
      }
    ?>

  </table> -->



<a href="user.php"><button type="button"  class="btn btn-primary">User</button></a>

 <?php
   require("template/footer.php");
