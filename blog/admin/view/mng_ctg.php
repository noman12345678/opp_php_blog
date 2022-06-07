<?php  $viewdata=$obj->mn_catgorey(); 


if(isset($_GET['status'])){

 if($_GET['status']=='delete'){

  $remove=$_GET['id'];

   $dlt=$obj->ctg_delete($remove );

  

    }

}










?>

<h2 style="text-align:center;margin-top:9px;"> <a style="text-decoration: none;" href="manage_catagorey">MANAGE CATAGOREY </a> </h2>

<table class="table" style="margin-top: 29px;">
<?php   if(isset($dlt)){   echo $dlt ;     }?>
  <thead>
    <tr>
      <th scope="col">NO </th>
      <th scope="col">CATAGOREY</th>
      <th scope="col">DESCRIPTION </th>
      <th scope="col">ACTION </th>
    </tr>
  </thead>
  <tbody>
    <?php  while($data=mysqli_fetch_assoc($viewdata)){?>
    <tr>
      <th scope="row"><?php  echo $data['cat_id'];?> </th>
      <td><?php echo $data['ad_ctg']; ?> </td>
      <td style="width:656px;"><?php echo $data['ctg_description'];?> </td>
      <td>
        <a href="?status=delete&&id=<?php echo $data['cat_id'] ; ?> "> <button class="btn-success"
            name="DELETE">DELETE</button></a>
        <a href="edit.php?status=edit&&id=<?php echo $data ['cat_id'] ; ?>"><button class="btn-warning ">EDIT</button></a>


      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>