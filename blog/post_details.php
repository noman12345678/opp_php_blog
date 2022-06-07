<?php   include_once('admin\config\conf.php') ;  



$obj = new blog_prj(); 

$dis_post=$obj->bg_post_publish();








?>








<?php  include('view_includes/header.php')  ;   ?>


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
  <?php  include('view_includes/cat_header.php')  ;   ?>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <?php  include('view_includes/banner.php')   ;  ?>

  <!-- Banner Ends Here -->
  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <?php while($post=mysqli_fetch_assoc( $dis_post)){?>
              <div class="col-lg-12">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="upload/<?php echo $post['post_img']?>" alt="">
                  </div>
                  <div class="down-content">
                    <span><?php echo $post['ad_ctg']?></span>
                    <a href="sng_post.php?view=post_view&&id=<?php echo $post['id'] ?>">
                      <h4><?php echo $post['post_title']?></h4>
                    </a>
                    <ul class="post-info">
                      <li><a href="#"><?php echo $post['post_author']?></a></li>
                      <li><a href="#"><?php echo $post['post_date']?> </a></li>
                      <li><a href="#"><?php echo $post['post_coment']?> </a></li>
                    </ul>
                    <p>

                      <?php echo $post['post_content_blog']?>
                      <br>
                      <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a>
                      for
                      more info. Thank you.</p>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#"><?php echo $post['post_tag']?></a>,</li>

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
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include('view_includes\f_footer.php') ; ?>

  <?php include('view_includes\blog_footer.php') ; ?>


</body>

</html>