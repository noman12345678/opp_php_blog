<?php

  $dis_post=$obj->bg_post_publish();



?>


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
                  <a
                      rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for
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
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item search">
                <?php  include_once("search.php") ;?>
              </div>
            </div>
            <?php  include_once("recent_post.php");?>
            <?php    include_once("side_catagoreys.php"); ?>
            <?php  include_once("f_tag.php"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>