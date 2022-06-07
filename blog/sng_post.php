 <?php  


include_once("view_includes/header.php"); 
include("admin/config/conf.php");


$obj= new blog_prj;

$cat=$obj-> mn_catgorey();

if (isset($_REQUEST['view'])){

    if ($_REQUEST['view']='post_view') {

       $id=$_REQUEST[htmlspecialchars('id')];

      $post_t_shw=$obj->bg_post_singel($id);
    }
    
}









?>

 <body>

     <!-- ***** Preloader Start ***** -->
     <div id="preloader">
         <div class="jumper">
             <div></div>
             <div></div>
             <div></div>
         </div>
     </div>
     <!-- ***** Preloader End ***** -->

     <!-- Header -->
     <?php  include_once("view_includes/cat_header.php");?>

     <!-- Page Content -->
     <!-- Banner Starts Here -->
     <?php  include_once("view_includes/banner.php"); ?>
     <!-- Banner Ends Here -->

     <section class="call-to-action">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="main-content">
                         <div class="row">
                             <div class="col-lg-8">
                                 <span>Stand Blog HTML5 Template</span>
                                 <h4>Creative HTML Template For Bloggers!</h4>
                             </div>
                             <div class="col-lg-4">
                                 <div class="main-button">
                                     <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog"
                                         target="_parent">Download Now!</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="blog-posts">

         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="all-blog-posts">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="blog-post">
                                     <div class="blog-thumb">
                                         <img src="upload/<?php echo $post_t_shw['post_img']?>" alt="">
                                     </div>
                                     <div class="down-content">
                                         <span><?php echo $post_t_shw['ad_ctg']?></span>
                                         <a>
                                             <h4><?php  echo  $post_t_shw['post_title']; ?></h4>
                                         </a>
                                         <ul class="post-info">
                                             <li><a href="#"><?php echo $post_t_shw['post_author']?></a></li>
                                             <li><a href="#"><?php echo $post_t_shw['post_date']?> </a></li>
                                             <li><a href="#"><?php echo $post_t_shw['post_coment']?> </a></li>
                                         </ul>
                                         <p>

                                             <?php echo $post_t_shw['post_content_blog']?>
                                             <br>
                                             <a rel="nofollow" href="https://templatemo.com/contact"
                                                 target="_parent">Contact TemplateMo</a> for
                                             more info. Thank you. </p>
                                         <div class="post-options">
                                             <div class="row">
                                                 <div class="col-6">
                                                     <ul class="post-tags">
                                                         <li><i class="fa fa-tags"></i></li>
                                                         <li><a href="#"><?php echo $post_t_shw['post_tag']?></a></li>

                                                     </ul>
                                                 </div>
                                                 <div class="col-6">
                                                     <ul class="post-share">
                                                         <li><i class="fa fa-share-alt"></i></li>
                                                         <li><a href="#">Facebook</a>,</li>
                                                         <li><a href="#"> Twitter</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>







                 <div class="col-lg-4">
                     <div class="sidebar">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="sidebar-item search">
                                     <?php  include_once("view_includes/search.php") ;?>
                                 </div>
                             </div>
                             <?php  include_once("view_includes/recent_post.php");?>
                             <?php    include_once("view_includes/side_catagoreys.php"); ?>
                             <?php  include_once("view_includes/f_tag.php"); ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <?php   include_once("view_includes/blog_footer.php");    ?>

     <?php   include_once("view_includes/f_footer.php");    ?>


 </body>

 </html>