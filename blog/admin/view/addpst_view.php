<?php
 
 $post_ctg=$obj->mn_catgorey();


 if (isset($_POST['add_post'])) {

    $msg=$obj->bg_post($_POST);

    
 
      
 }



?>


<h1 > ADD POST</h1>
<?php if(isset($msg)){ echo $msg; }?>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-floating">

        <label for="floatingInputValue">TITLE </label>

        <textarea  class="form-control" placeholder=" TITLE "  
        name="post_title" ></textarea>
    </div>

    <div class="form-floating">
        <label for="floatingTextarea2">type post</label>
        <textarea class="form-control" placeholder="type post" name="type_post" id="floatingTextarea2"
            style="height: 100px" id="post"></textarea>
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">cover pohto</label>
        <input class="form-control" type="file" name="cover_pic" id="formFile">
    </div>
    <div class="form-floating">
        <label>CATAGOREY</label>
        <select name="cat_name" class="form-select" aria-label="Default select example">
            <?php  while($c_tg=mysqli_fetch_assoc($post_ctg)){ ?>
            <option  value="<?php echo  $c_tg['cat_id'];?>" ><?php echo  $c_tg['ad_ctg']; ?> </option>
            <?php } ?>
        </select>
    </div>
    <label for="floatingTextarea2">Summary</label>
    <div class="form-floating">
  <textarea   name="post_summary" class="form-control" placeholder="Type summary  here" id="floatingTextarea2" style="height: 100px"></textarea>
 
</div>
            </br>

<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Tag</span>
  <input name="bg_tag" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
            </br>
<div class="form-floating">
            <span>STATAUS</span>

        <select  name="post_stat" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
 
  <option value="1">PUBLISH </option>
  <option value="0"> UNPUBLISH</option>
 
</select>
</div>

<input  type="submit" class="from-control  btn-primary btn btn-block" name="add_post" value="ADD POST">  



</form>