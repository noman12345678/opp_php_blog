<?php   include('admin\config\conf.php') ;  



$obj = new blog_prj(); 

if(isset($_POST['submit'])){


 $msg =$obj->admin_register($_POST);

 
  
 

 





}








?>



<?php  include('admin/includes/rg_header.php')  ;   ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4"><a href="admin/index.php" > Create Account</a></h3>
                                </div>
                                
                                <div class="card-body">
                                    <form action="#" method="POST">
                                    <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">USER NAME</label>
                                            <input name="name" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <?php if(isset($msg)){echo $msg;}?>
                                            <div id="emailHelp" class="form-text"></div>
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input name="email_addr" type="email" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <?php if(isset($msg)){echo $msg;}?>
                                            <div id="emailHelp" class="form-text">We'll never share your email with
                                                anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input name="pass_nm" type="password" class="form-control"
                                                id="exampleInputPassword1">
                                                <?php if(isset($msg)){echo $msg;}?>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <button name="submit" value="submit" type="submit"
                                                class="btn btn-primary">CREATE</button>
                                        </div>

                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="admin/index.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <?php include("admin/includes/rg_footer.php"); ?>

</body>

</html>