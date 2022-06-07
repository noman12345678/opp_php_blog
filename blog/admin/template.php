<?php

session_start(); 

include("config/conf.php");
 
$obj = new blog_prj(); 



$id=$_SESSION['adminid'];

$log_name= $_SESSION['admin'];

if($id == null  ){

    
   
    header("location:index.php ");

}




if(isset($_POST['search_submit'])){

  
    $obj->admin_search($_POST);



}




if(isset($_GET['adminlogout'])){

 if ($_GET['adminlogout']=='logout'){
   
    $obj->admin_logout();

  

 }
}


?>

<?php include_once("includes/header.php");?>
    <body class="sb-nav-fixed">
        <?php    include_once("includes/topnav.php");?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
              <?php  include_once("includes/sidenav.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php           
                        if(isset($view)){


                        if($view=="dashboard"){

                            include("view/dash_view.php");
                           


                        }elseif($view=="add_post"){

                            include("view/addpst_view.php");


                        }elseif($view=="add_catagorey"){

                           include("view/addctg_view.php");

                        }elseif($view=="mange_catagorey"){


                         include("view/mng_ctg.php");
                         
                    

 
                       }elseif($view=="mange_ post"){

                          include("view/mngpst_view.php");


                       }elseif($view=="edit_ctg"){

                        include("view/mng_ctg_edit.php");


                       }elseif($view=="massage"){

                        include("view/msg.php");


                       }elseif($view=="edit_blog"){

                          
                        include("view/bg_blog_edit.php");



                       }
                        
                        }
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        ?>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php   include_once("includes/footer.php") ;?>
    </body>
</html>
 