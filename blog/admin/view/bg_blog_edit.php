 
<?php



if (isset($_GET['status'])) {
    
    if($_GET['status']=='edt'){

        $blog_id= $_GET['id'];

        $bg_updt= $obj->blog_edt_data($blog_id);
      
        


    }


}

if (isset($_POST['add_bg_btn_cng'])){


    $edt_bg=$obj->bg_edt($_POST);
   

    
}



$post_ctg=$obj->mn_catgorey();






?>





 
 
 
 
 
 
 
 
 
 
 <h1 style="text-align:center;"> <a href="manage_post.php" target="_blank" rel="noopener noreferrer"> EDIT
         POST </a></h1>

    


 <?php if(isset($edt_bg)){
 
 //$redirect="<script type='text/javascript'>

// window.location='manage_post.php';
 
 
 //</script>";
   
  //  echo $redirect;

  
     
}?>  
 <form enctype="multipart/form-data" action="" method="POST">
  <input type="hidden"  name="post_id_hd" value="<?php   echo $id ;?> "  >   
   <h1><?php  if(isset($edt_bg)){ echo $edt_bg;}  ?></h1>

<div class="form-group">
    <label class="small mb-1" for="inputEmailAddress">  </label>
    <div class="form-floating">

        <label for="floatingInputValue">TITLE </label>

        <textarea class="form-control" placeholder=" TITLE " value="" name="post_title_cng"><?php  echo $bg_updt['post_title'];  ?></textarea>
    </div>

    <div class="form-floating">
        <label for="floatingTextarea2">type post</label>
        <textarea class="form-control" placeholder="type post" value=""  name="type_post_cng" id="floatingTextarea2"
            style="height: 100px" id="post"><?php echo $bg_updt['post_content_blog'];  ?></textarea>
    </div>

     
    <div class="form-floating">
        <label>CATAGOREY</label>
        <select name="cat_name_cng" class="form-select" aria-label="Default select example">
            <?php  while($c_tg=mysqli_fetch_assoc($post_ctg)){ ?>
            <option value="<?php echo  $c_tg['cat_id'];?>"><?php echo  $c_tg['ad_ctg']; ?> </option>
            <?php } ?>
        </select>
        <span>  
        </select>
    </div></span>
    </div>
    <label for="floatingTextarea2">Summary</label>
    <div class="form-floating">
        <textarea name="post_summary_cng" value=""  class="form-control" placeholder="Type summary  here" id="floatingTextarea2"
            style="height: 100px"></textarea>

    </div>
    </br>

    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Tag</span>
        <input  value="<?php echo $bg_updt['post_tag'];  ?>" name="bg_tag_cng" type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-lg">
    </div>
    </br>
    <div class="form-floating">
        <span>STATAUS</span>

        <select   name="post_stat_cng" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            
            <option value="1">PUBLISH </option>
            <option value="0"> UNPUBLISH</option>

        </select>
    </div>

    <input type="submit" class="from-control  btn-primary btn btn-block" name="add_bg_btn_cng" value="UPDATE POST"> 


 </form>