
<?php 

include "class/User.php";
$shagor = new User();
// $shagor->dis();

// print_r($_SESSION);
$email= $_SESSION['admin_email'];
$password= $_SESSION['password'];
if(($email && $password)==null){
    header("Location: index.php");

}
if(isset($_GET['admin_logout'])){
    if($_GET['admin_logout']=="logout"){
        $shagor->admin_logout();
    }
}



?>




<!-- mastering the template for simplification  -->


<!-- Header section  -->
<?php 
include_once("include/header.php");

?>
<!-- Header section  -->


<!-- top nav portion  -->
<?php 
include_once("include/navtop.php");

?>
<!-- top nav portion  -->
   
    <div id="layoutSidenav">
        <!-- this is the side nav portion  -->
        <?php 
            include_once("include/sidenav.php");

        ?>
        <!-- this is the side nav portion  -->
       
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <!-- loading view page  -->
                    

                    <?php 
                    if($view){
                       if($view=="add_Catagory"){
                        require("views/add_cat_page.php");
                       }
                       elseif($view=="manage_Catagory"){
                        require("views/manage_cat_page.php");
                       }
                       elseif($view=="dashboard"){
                        require("views/dash_page.php");
                       }
                       elseif ($view=="add_post") {
                        require("views/app_post_page.php");
                       }
                       elseif ($view=="manage_post") {
                        require("views/manage_post_page.php");
                       }
                    }
                    
                    
                    
                    ?>
                    
                </div>
            </main>
           <!-- footer start  -->
           <?php 
            include_once("include/footer.php");

        ?>

           <!-- footer end -->
        </div>
    </div>
   <!-- js script portion  -->
        <?php 
            include_once("include/script.php");

        ?>
   
   <!-- js script portion  -->
</body>

</html>