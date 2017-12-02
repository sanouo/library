<?php
  require("template/header.php");
 ?>

  <!-- start of the div class block -->
 <div class="block">

     <div class="container accounts col-12 col-md-6 col-lg-4">
       <div class="row">
                <div class="card col-12 col-md-12 col-lg-12">
                  <div class="card-block col-12 col-md-12 col-lg-12">
                  <h3 class="card-title"><?php echo $detail->getTitle(); ?></h3>
                  <p class="card-text"><?php echo $detail->getAuthor(); ?></p>
                  <p class="card-text"><?php echo $detail->getDescription(); ?></p>
                  <p class="card-text"><?php echo $detail->getReleaseDate(); ?></p>
                  <p class="card-text"><?php echo $detail->getCategory(); ?></p>
                  <p class="card-text"><?php echo $detail->getAvailable(); ?></p>
                  <a href="index.php?supprim=<?php echo $detail->getId();?>"><i class="material-icons">delete</i></a>
                  <a href="views/detailView.php?id=<?php echo $detail->getId();?>">detail</a>

                  </div>
                </div>
        </div>
    </div>


  </div>
    <!-- end of the div class block -->


    <?php
      require("template/footer.php");
