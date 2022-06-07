<?php  
 

include_once("view_includes/header.php"); 
include("admin/config/conf.php");
 

$obj= new blog_prj;

$cat=$obj-> mn_catgorey();









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
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


   <?php   include_once("view_includes/post.php"); ?>
   <?php   include_once("view_includes/recent_post.php");    ?>

   <?php   include_once("view_includes/blog_footer.php");    ?>

   <?php   include_once("view_includes/f_footer.php");    ?>

  </body>
</html>