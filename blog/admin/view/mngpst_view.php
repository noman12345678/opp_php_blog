 <?php
  
 
 $post=$obj->bg_post_mng();



 if(isset($_GET['status'])){

  if($_GET['status']=='dlt'){
 
   $dlete=$_GET['id'];
 
    $dlt=$obj->blog_delete($dlete);
 
   
 
     }
 
 }

 
 ?>
<h2 style="text-align:center;margin-top:9px;"> <a style="text-decoration: none;" href="manage_post">MANAGE  POST  </a> </h2>

<table class="table" style="margin-top: 29px;">
 
  <thead>
    <tr>
      <th scope="col">NO </th>
      <th scope="col">TITLE </th>
      <th scope="col">CONTENT</th>
      <th scope="col">cover pohto </th>
      <th scope="col">tag</th>
      <th scope="col">status</th>
      <th scope="col">author</th>
      <th scope="col">time</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php while($show=mysqli_fetch_assoc($post)){?>

    <tr> 
    
    <td><?php echo $show['id']?></td>
    <td><?php echo $show['post_title']?></td>
    <td style="height:100px;"><?php echo $show['post_content_blog']?></td>
    <td><img height="100px"; src="../upload/<?php echo $show['post_img']?>" alt=""></td>
    <td><?php echo $show['post_tag']?></td>
    <td><?php 
    if ($show['post_status']==1){
      echo "publish";
    }
    else{
      echo "unpublish";
    }
    
    
    ?></td>
    <td><?php echo $show['post_author']?></td>
    <td><?php echo $show['post_date']?></td>
   
    <td>
     
    <a  href="?status=dlt&&id=<?php echo   $show['id'];  ?>" > <button class="btn-danger"
            name="DELETE">DELETE</button></a>

            <a  href="edit.php?status=edt&&id=<?php echo  $show['id'];  ?>" > <button class="btn-success"
            name="edit">EDIT</button></a>
  
  
  </td>
     


    </tr>

  <?php }?>


  </tbody>
 
</table>