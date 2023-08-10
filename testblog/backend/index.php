<?php 
include_once "class/User.php";
$shagor = new User();


if(isset($_POST['login'])){
    // print_r($_POST);

    $shagor->user_login($_POST);

}

if(isset($_SESSION['admin_email'])){
    header("Location: dashboard.php");
}



?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - TestBlog Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row   vh-100 justify-content-center align-items-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg  p-4">
                                <div class="card-header bg-primary text-light">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <!-- display massage  -->
                                    <?php 
                                    if(isset($_SESSION['msg'])){
                                        ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                              <strong>Warning!</strong> <?php 
                                              
                                                echo $_SESSION['msg'];
                                            
                                              
                                              
                                              ?>
                                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                        <?php
                                    }
                                    
                                    ?>



                                    <form action="" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="email" type="email"
                                                placeholder="name@example.com" required/>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" type="password"
                                                placeholder="Password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            
                                           <input type="submit" value="Login" name="login" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>