<?php
  require("template/header.php");
 ?>


<div class="formu col-12 col-md-8 col-lg-6">
 <form action="index.php" method="post">
   <div class="form-group">
     <select class="custom-select" name="available">
       <option selected><?php echo $update->getAvailable()?></option>
       <option value="yes">yes</option>
       <option value="no">no</option>
     </select>
   </div>

    <input type="hidden" class="form-control" id="formGroupExampleInput1" name="id"  value= '<?php echo $update->getId()?>' placeholder="">

    <button type="submit" value="Submit" name="submitUpdate" class="btn btn-primary submi">Submit</button>
 </form>
</div>


<?php
  require("template/footer.php");
