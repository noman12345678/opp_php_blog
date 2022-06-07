<?php 


$msg_feedbk=$obj->feedback_data();

if(isset($_GET['status'])){

  if($_GET['status']=='dlt'){
 
   $dlete=$_GET['id'];
 
    $dlt=$obj->msg_delete($dlete);
 
   
 
     }
 
 }
 




?>




<table class="table">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">NAME</th>
      <th scope="col">MAIL</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php while($feed_backer_msg=mysqli_fetch_assoc($msg_feedbk)){?>
    <tr>
      <th ><?php echo $feed_backer_msg['feed_id'];  ?> </th>
      <th><?php echo $feed_backer_msg['feedbk_name'];  ?> </th>
      <td><?php echo $feed_backer_msg['feedbk_mail'];  ?>  </td>
      <td><?php echo $feed_backer_msg['feedbk_sub'];  ?>  </td>
      <td><?php echo $feed_backer_msg['feedbk_msg'];  ?> </td>
      <td>

     <a  href="?status=dlt&&id=<?php echo  $feed_backer_msg['feed_id'];  ?>" > <button class="btn-danger"
            name="DELETE">DELETE</button></a>
    





      </td>
    </tr>
     
    
    <?php } ?>
  </tbody>
</table>