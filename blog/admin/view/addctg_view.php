 <?php
 
 if (isset($_POST['add_ctg_btn'])){
        
       $msg= $obj->add_catagorey($_POST);
 }
 
 
 
 
 
 
 
 
 
 
 ?>
 <h1>ADD CATAGOREY</h1>
 <?php if(isset( $msg)){echo  $msg ;}?>

 <form action="" method="POST">

       

         <div class="form-group">
                 <label class="small mb-1" for="inputEmailAddress">ADD CATGOREY </label>
                 <input class="form-control py-4" id="inputEmailAddress" type="text" name="add_ctg" placeholder="ADD CATGOREY " />
         </div>
         <div class="form-group">
                 <label class="small mb-1" for="inputEmailAddress"> CATGOREY DESCRIPTION</label>
                 <input class="form-control py-4" id="inputEmailAddress" type=" text" name="des_ctg" placeholder=" WRITE CATGOREY DESCRIPTION" />
         </div>
         <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                 <input type="submit" value="ADD CATGOREY " name="add_ctg_btn" class="btn btn-primary">
         </div>

 </form>