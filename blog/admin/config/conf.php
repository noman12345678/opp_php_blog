<?php


class  blog_prj{

    private $con;
   
    public function __construct(){
   
   
         $dbhost="localhost";
         $dbuser="root";
         $dbpass="";
         $dbname="blog";
   
         $this->con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) ;
   
   
   
   
   
   
   
    }
    
      public function admin_login($data){
          

              $ad_em = htmlspecialchars($data['lg_email']);
          $ad_pas =htmlspecialchars(md5($data['lg_pass']));

      $query="SELECT * FROM admin_info  WHERE  ad_email='$ad_em' && ad_pass='$ad_pas'
      ";

      $run_query=mysqli_query($this->con,$query);

      $chk_count=mysqli_num_rows($run_query);
      if(empty($ad_em) || empty($ad_pas) ){

        $error="<span style='color:red;'  >the field is reqired</span>";

        return $error;


     
    
      }elseif($run_query==true){

            if ($chk_count>0) {
              
            session_start();
 
            $_SESSION['adminemail']=$ad_em  ;

          $usr_query= "SELECT * FROM admin_info  WHERE  ad_email='$ad_em' ";
             
            $rn_query=mysqli_query($this->con,$usr_query);

            if ($rn_query==true){
            

              $login_qr=mysqli_fetch_assoc($rn_query);
             

              $_SESSION['adminid']=$login_qr['id'];
              $_SESSION['admin']=$login_qr['usr_name'];
          
            

 

              header("location: dashboard.php");





              
            }
            



           
            
              
          

             
          }
         
          
           
      }






     }

     public function admin_register($data){
      $user_name=htmlspecialchars($data['name']);
      $admn_email=htmlspecialchars($data['email_addr']);
      $admn_pass=htmlspecialchars(md5($data['pass_nm']));

      $user_reg_chk_qry="SELECT * FROM admin_info  WHERE  ad_email='$admn_email' ";

      $ran_qry=mysqli_query($this->con,$user_reg_chk_qry);
      $count=mysqli_num_rows($ran_qry);
      
      if(empty($user_name) ||  empty($admn_email) || empty($admn_pass)   ){


        $err="<span style='color:red;' >this field is required</span>";

      return $err;
     

      }elseif ($count==0){
         
       $query="INSERT INTO admin_info (`usr_name` ,`ad_email`, `ad_pass`) VALUES ('$user_name','$admn_email','$admn_pass') ";


        if(mysqli_query($this->con,$query)){

                $redirect="<script>window.location.href='admin/index.php';</script>";
                 
            echo $redirect;

        }

      }

      else{
             
       


          $warrning="<script>alert('the user name is taken(change mail or name)');setTimeout(function(){
            window.location ='register.php';
          },100);</script>";

           echo $warrning;
             
          

      }



     }
    

  public function admin_logout(){

  session_destroy();

    header("location: index.php");
        



  }
 public function add_catagorey($ctg_data){

  $ctg_name=htmlspecialchars($ctg_data['add_ctg']);
  $ctg_des=htmlspecialchars($ctg_data['des_ctg']);
  
  $query="INSERT INTO catagorey( ad_ctg , ctg_description)  VALUE ('$ctg_name' , ' $ctg_des')";

  if (mysqli_query($this->con,$query)){

 
     return "CATAGOREY ADDED SUCCESSFULLY";

  }





 }
 public function mn_catgorey(){

  $qry="SELECT * FROM catagorey";

  if (mysqli_query($this->con,$qry)) {

   $catagorey= mysqli_query($this->con,$qry) ;
   
   return $catagorey;



    
  } 








 } 


 public function ctg_delete($id){
  
  $qyery=" DELETE FROM  catagorey WHERE cat_id=$id";


   if (mysqli_query($this->con,$qyery)) {
     

    return "delete";
     
  }
   

  }


 public function data($id){
  
  $query="SELECT * FROM catagorey WHERE cat_id =$id";

    if(mysqli_query($this->con,$query)){
     
      $get=mysqli_query($this->con,$query);

      $recive_data = mysqli_fetch_assoc($get);

      return  $recive_data;

    }

 }


 public function ctg_edt($info){

  $ctg_name=htmlspecialchars($info['add_ctg']);
  $ctg_des=htmlspecialchars($info['des_ctg']);
  $ctg_edt_id=$info['ctg_id'];

  $qury="UPDATE  catagorey SET  	ad_ctg ='$ctg_name ', ctg_description='$ctg_des'  WHERE  cat_id= $ctg_edt_id ";

  if (mysqli_query($this->con,$qury)){
   
   
    return "update";


     
  }




 }

 public function bg_post($data){
  $post_title_bh=htmlspecialchars( $data['post_title'])       ;
  $post_write_bg= htmlspecialchars($data['type_post']);     
  $post_pic_bg=$_FILES['cover_pic']['name'];
  $post_pic_tmp_bg=$_FILES['cover_pic']['tmp_name'];
  $post_cat_bg=htmlspecialchars($data['cat_name']);
  $post_summary_bg=htmlspecialchars($data['post_summary']);
  $post_tag_bg=htmlspecialchars($data['bg_tag']);
  $post_status_bg=htmlspecialchars($data['post_stat']);

  $query="INSERT INTO post (post_title,post_img,post_author,post_date,post_coment,post_content_blog,post_status,post_ctg_blog,post_tag,post_sum) VALUE ('$post_title_bh','$post_pic_bg','admin',now(),5,'$post_write_bg',$post_status_bg,$post_cat_bg,'$post_tag_bg',' $post_summary_bg')";

  if (mysqli_query($this->con,$query)){

    move_uploaded_file($post_pic_tmp_bg,'../upload/'.$post_pic_bg);

    return "  post added ";
 
    

     
  }

   

}


 public function bg_post_mng(){
 

  $query="SELECT * FROM   blog_post_ctg ";

  if (mysqli_query($this->con,$query)) {

    $show_post=mysqli_query($this->con,$query);

    return $show_post;
 
  }

  






 }
 public function bg_post_publish(){
 

  $query="SELECT * FROM  blog_post_ctg WHERE post_status =1";

  if (mysqli_query($this->con,$query)) {

    $show_post=mysqli_query($this->con,$query);

    return $show_post;
 
  }

  






 }
 public function bg_post_singel($id){
 

  $query="SELECT * FROM  blog_post_ctg WHERE  id =$id";

  if (mysqli_query($this->con,$query)) {

    $singel_post=mysqli_query($this->con,$query);
    $post_info=mysqli_fetch_assoc($singel_post);

    return $post_info;
 
  }

 }
 public function post_dtl(){


  $query="SELECT * FROM  blog_post_ctg WHERE post_status =1";

  if (mysqli_query($this->con,$query)) {

    $show_post=mysqli_query($this->con,$query);

    return $show_post;
 
  }







 }

public function feedbacker($recived_feedback){


  $feedbacker_name=htmlspecialchars($recived_feedback['name']);
  $feedbacker_mail=htmlspecialchars($recived_feedback['email']);
  $feedbacker_sub=htmlspecialchars($recived_feedback['subject']);
  $feedbacker_msg=htmlspecialchars($recived_feedback['message']);


  $query="INSERT INTO `feedback_info`(`feedbk_name`, `feedbk_mail`, `feedbk_sub`, `feedbk_msg`) VALUES (' $feedbacker_name','  $feedbacker_mail',' $feedbacker_sub','$feedbacker_msg')";

  if (mysqli_query($this->con,$query)==true) {

               
    return "thanks for your feedback ";
       



    
  }







}
  
public function feedback_data(){

 $query="SELECT * FROM `feedback_info`";

 if(mysqli_query($this->con,$query)){


    $feed_back_msg=mysqli_query($this->con,$query);

    return $feed_back_msg;




 }









}public function msg_delete($id){


  $qyery=" DELETE FROM `feedback_info`   WHERE feed_id=$id";


  if (mysqli_query($this->con,$qyery)) {

    $reload="<script> 
      window.location ='massage.php';
     </script>";


     echo $reload;
    

    
    
 }







}public function blog_delete($id){


  $qyery=" DELETE FROM `post`  WHERE id=$id";


  if (mysqli_query($this->con,$qyery)) {
    

   return "delete";
    
 }







}
public function blog_edt_data($data){



 $query="SELECT * FROM `blog_post_ctg` WHERE `id`=$data";
 $ran_q=mysqli_query($this->con,$query);

 if($ran_q==true){
        
    

    $blog_db_data=mysqli_fetch_assoc($ran_q);

    return $blog_db_data;





 }
 else{
 
  $redirect="<script type='text/javascript'>

   alert('problem');
  
  
  </script>";

   echo $redirect;
 }








}
public function bg_edt($data_cng){


  $post_title_bh_cng=htmlspecialchars($data_cng['post_title_cng'])       ;
  $post_write_bg_cng= htmlspecialchars($data_cng['type_post_cng']);     
  $post_cat_bg_cng=htmlspecialchars($data_cng['cat_name_cng']);
  $post_summary_bg_cng=htmlspecialchars($data_cng['post_summary_cng']);
  $post_tag_bg_cng=htmlspecialchars($data_cng['bg_tag_cng']);
  $post_status_bg_cng=htmlspecialchars($data_cng['post_stat_cng']);
  $updt_post_id=$data_cng['post_id_hd'];

$query="UPDATE `blog_post_ctg` SET `post_title`='$post_title_bh_cng',`post_author`='admin',`post_date`=now(),`post_coment`=5,`post_content_blog`='$post_write_bg_cng',`post_status`=$post_status_bg_cng,`post_ctg_blog`=$post_cat_bg_cng,`post_tag`='$post_tag_bg_cng',`post_sum`='$post_summary_bg_cng' WHERE `id`='$updt_post_id' ";

$run_query_updt=mysqli_query($this->con,$query);
  if ($run_query_updt==true){


   $redirect="<script>window.location='manage_post.php'</script>";


 echo $redirect;
    
   

   
  }else{

    
    echo mysqli_error($this->con);

  }








}
public function admin_search($srch_data){


$ad_search_data=htmlspecialchars($srch_data['search']);

$query="SELECT * FROM `post`,`feedback_info` `catagorey` ";

 








}








 }


 
 



  




 




?>