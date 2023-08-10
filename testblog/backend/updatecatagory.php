<?php
include_once("class/Connection.php");
include_once("class/Catagories.php");
$shagor= new Catagories();
 


?>



<?php
$titlepage="Update catagory";
?>


<!-- header  -->
<?php 
include_once("include/header.php");

?>
<!-- top nav  -->
 <?php 
include_once("include/navtop.php");

?>

        <div id="layoutSidenav">
           <!-- this is the side nav portion  -->
        <?php 
            include_once("include/sidenav.php");

        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $titlepage;?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?php echo $titlepage;?></li>
                        </ol>

                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                            <div class="cat_form shadow-lg p-3 rounded">

                            <?php
                            if(isset($_GET['cid'])){
                                $cid=$_GET['cid'];
                                $data=$shagor->edit($cid);
                                $row=mysqli_fetch_assoc($data);
                                ?>
                                 <form action="" method="POST">
                                    <div class="form-group mb-3">
                                        <label for="cat_name"><b>Catagory ID</b></label>
                                        <input type="text" name="id" id="id" value="<?php echo $row['id']; ?>" class="form-control mt-2"readonly>


                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="cat_name"><b>Catagory Name</b></label>
                                        <input type="text" name="cat_name" id="cat_name" value="<?php echo $row['cat_name']; ?>" class="form-control mt-2"required>


                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="cat_description"><b>Catagory Description</b></label>
                                        <input type="text" name="cat_description" id="cat_description" value="<?php echo $row['cat_description']; ?>" class="form-control mt-2" required>


                                    </div>
                                    <div class="form-group mb-3">
                                    
                                        <input type="submit" name="update" id="add_cat" value="Catagory update" class="btn btn-lg btn-primary w-100 btn-block" >


                                    </div>

                                </form>

                                <?php
                                 if(isset($_POST['update'])){
                                    $shagor->edit_catagory($_POST);
                                }
                            }

                            ?>

                            
                            
                            
                            
                            
                            
                           
        



           


                                    </div>
                                </div>
                        </div>
                                            







                     
                        
                </main>
                <?php 
            include_once("include/footer.php");

        ?>

            </div>
        </div>
        <?php 
            include_once("include/script.php");

        ?>
    </body>
</html>

                          <!-- ------------------  -->
                          <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                                <div class="form-group mb-3">
                                    <label for="post_title"><b>Post ID</b></label>
                                    <input type="text" name="post_id" id="post_id"
                                    value="<?php echo $row['post_id'];?>" class="form-control mt-2" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="post_title"><b>Post Title</b></label>
                                    <input type="text" name="post_title" id="post_title"
                                    value="<?php echo $row['post_title'];?>" class="form-control mt-2" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="post_content"><b>Post Content</b></label>
                                    <textarea id="post_content" name="post_content" class="form-control" required>
                                    <?php echo $row['post_content'];?>
                                    </textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="post_img"><b>Post Image</b></label>
                                    <input type="file" name="post_img" id="post_img" class="form-control mt-2" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="post_user"><b>Author Name</b></label>
                                    <input type="text" name="post_user" id="post_user" value="<?php echo $row['post_user'];?>" class="form-control mt-2" required>
                                </div>

                                

                                <div class="form-group mb-3">
                                    <label for="post_summary"><b>Post Summary</b></label>
                                    <textarea id="post_summary" name="post_summary" class="form-control" required>
                                    <?php echo $row['post_summary'];?>
                                    </textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="post_status"><b>Post Status</b></label>
                                    <select id="post_status" name="post_status" class="form-control" required>
                                    <option value="1">Published</option>
                                    <option value="0">Draft</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="submit" name="update" id="add_post" value="update" class="btn btn-lg btn-primary w-100 btn-block">
                                </div>
                            </form>