 
<?php



if (isset($_GET['status'])) {
    
    if($_GET['status']=='edit'){

        $cat_id= $_GET['id'];

        $ctg_updt= $obj->data($cat_id);
      
        


    }


}

if (isset($_POST['add_ctg_btn'])){


    $edt_ctg=$obj->ctg_edt($_POST);
   

    
}










?>





 
 
 
 
 
 
 
 
 
 
 <h1 style="text-align:center;"> <a href="manage_catagorey.php" target="_blank" rel="noopener noreferrer"> EDIT
         CATAGOREY </a></h1>

    


<?php if(isset($edt_ctg)){
 
 $redirect="<script type='text/javascript'>

 window.location='manage_catagorey.php';
 
 
 </script>";
   
    echo $redirect;

  
     
}?>
 <form action="" method="POST">



     <div class="form-group">
         <label class="small mb-1" for="inputEmailAddress">EDIT CATGOREY </label>
         <input class="form-control py-4" id="inputEmailAddress" type="text" name="add_ctg"
             placeholder="ADD CATGOREY "  value="<?php  echo $ctg_updt['ad_ctg']; ?>"/>
     </div>
     <div class="form-group">
         <label class="small mb-1" for="inputEmailAddress">EDIT CATGOREY DESCRIPTION</label>
         <input class="form-control py-4" id="inputEmailAddress" type=" text" name="des_ctg"
             placeholder=" WRITE CATGOREY DESCRIPTION"  value="<?php  echo $ctg_updt['ctg_description']; ?>"/>
     </div>
     <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
         <input type="hidden"     name="ctg_id"  value="<?php     echo $ctg_updt['cat_id']; ?>"   >

         <input type="submit" value="UPDATE  CATGOREY " name="add_ctg_btn" class="btn btn-primary">
     </div>

 </form>