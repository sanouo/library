<?php
  require("template/header.php");
 ?>


 <!-- start of the div class formu for add book-->
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
       <input type="text" class="form-control" id="formGroupExampleInput3" name="releaseDate" placeholder="2017-12-1">
     </div>

    <div class="form-group">
    <select class="custom-select" name="category">
    <option selected>category</option>
    <option value="novel">novel</option>
    <option value="fantastic">fantastic</option>
    <option value="adventure">adventure</option>
    <option value="fantastique">action</option>
    </select>
    </div>

     <div class="form-group">
     <select class="custom-select" name="available">
     <option selected>available</option>
     <option value="yes">yes</option>
     <option value="no">no</option>
     </select>
     </div>

     <button type="submit" value="Submit" name="addBook" class="btn btn-primary submi">Submit</button>
   </form>
 </div>
 <!-- end of the div class formu for add book-->

<br>

<!-- start div class sort -->
 <div class="formu col-12 col-md-8 col-lg-6 sort">
  <form action="index.php" method="post">
     <div class="form-group">
 <select class="custom-select" name="sort">
   <option selected>Open this select menu</option>
   <option value="novel">novel</option>
   <option value="fantastic">fantastic</option>
   <option value="adventure">adventure</option>
   <option value="action">action</option>
 </select>
</div>
<input type="submit" name="search" value="search">
</form>
</div>
<!-- end div class sort -->



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
                  <a href="detail.php?id=<?php echo $value->getId();?>">detail</a>

                  </div>
                </div>
        </div>
    </div>

            <?php
              }
            ?>

  </div>
    <!-- end of the div class block -->

<div class="user">
<a href="user.php"><button type="button"  class="btn btn-primary">User</button></a>
</div>


 <?php
   require("template/footer.php");
