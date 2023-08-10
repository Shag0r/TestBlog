<?php 
include_once("backend/class/Connection.php");
include_once("backend/class/Catagories.php");
include_once("backend/class/Post.php");
$p=new Post();

$shagor=new Catagories();




?>








<!-- header script part  -->
<?php include('includes/header.php');?>
    <!-- header start -->
    <div class="header-area">
        <div class="header-menue  mb-50">
            <div class="container-fluid">
                <!-- nav area start  -->
               <?php include('includes/navber.php');?>
                <!-- banner start  -->
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 pb-80 pt-80 ">
                        <h1 class="mt-50 text-center"> Test Blog <img src="images/blogger.svg" height="80px"
                                width="80px" alt=""></h1>

                    </div>
                    <div class="col-2"></div>
                </div>
                <!-- banner end  -->
                <!-- poster banner  -->
                <div class="bannerMain">
                <img src="images/great.jpg" class="img-fluid w-100" alt="Responsive image">
                </div>
               

                <!-- poster banner end -->



            </div>



        </div>

    </div>

    <!-- header end -->
    <!-- catagory display  -->
    <?php include('includes/cata.php');?>
    <!-- catagory display  end-->
    <!-- main section start  -->
    <section class="blogarea pb-80 pt-80 ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 bblog ">
                    <h3 class="text-center">Blogs</h3>
                    <hr>

                    <?php include('includes/blogs.php');?>
                </div>
                <div class="col-md-4">
                    <div class="row">
                       <!-- recentposts  -->
                       <?php include('includes/recent.php');?>

                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- main section end  -->
   <?php include('includes/footer.php');?>
   <?php include('includes/lowscript.php');?>






   