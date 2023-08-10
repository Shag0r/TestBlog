<?php 
$titlepage="Add Post";
include_once ("class/Post.php");

$shagor=new Post();


if(isset($_POST['add_post'])){{
    $shagor->add_post($_POST);
}
   
 }


?>




<h1 class="mt-4"><?php echo $titlepage;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><?php echo $titlepage;?></li>
</ol>
<!-- --------------------- -->

<?php 






?>



<!-- add post  -->
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="cat_form shadow-lg p-3 rounded">
        



            <!-- <form action="" method="POST">
                <div class="form-group mb-3">
                    <label for="post_title"><b>Post Title</b></label>
                    <input type="text" name="post_title" id="post_title" placeholder="Enter Post Title" class="form-control mt-2" required>


                </div>
                <div class="form-group mb-3">
                    <label for="post_content"><b>Post Content</b></label>
                    <textarea id="post_content" name="post_content" class="form-control"required></textarea>


                </div>
                <div class="form-group mb-3">
                    <label for="post_img"><b>Post Image</b></label>
                    <input type="file" name="post_img" id="post_img"  class="form-control mt-2" required>


                </div>
                <div class="form-group mb-3">
                    <label for="post_user"><b>Author Name</b></label>
                    <input type="text" name="post_user" id="post_user" placeholder="Enter Author Name" class="form-control mt-2" required>


                </div>
                <div class="form-group mb-3">
                    <label for="post_user"><b>Author Name</b></label>
                    <input type="text" name="post_user" id="post_user" placeholder="Enter Author Name" class="form-control mt-2" required>


                </div>
                <div class="form-group mb-3">
                   
                    <input type="submit" name="add_cat" id="add_post" value="ADD Post" class="btn btn-lg btn-primary w-100 btn-block" >


                </div>

            </form> -->

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="post_title"><b>Post Title</b></label>
                    <input type="text" name="post_title" id="post_title" placeholder="Enter Post Title" class="form-control mt-2" required>
                </div>

                <div class="form-group mb-3">
                    <label for="post_content"><b>Post Content</b></label>
                    <textarea id="post_content" name="post_content" class="form-control" required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="post_img"><b>Post Image</b></label>
                    <input type="file" name="post_img" id="post_img" class="form-control mt-2" required>
                </div>

                <div class="form-group mb-3">
                    <label for="post_user"><b>Author Name</b></label>
                    <input type="text" name="post_user" id="post_user" placeholder="Enter Author Name" class="form-control mt-2" required>
                </div>

                <!-- <div class="form-group mb-3">
                    <label for="post_date"><b>Post Date</b></label>
                    <input type="datetime-local" name="post_date" id="post_date" class="form-control mt-2" required>
                </div> -->

                <div class="form-group mb-3">
                    <label for="post_summary"><b>Post Summary</b></label>
                    <textarea id="post_summary" name="post_summary" class="form-control" required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="post_status"><b>Post Status</b></label>
                    <select id="post_status" name="post_status" class="form-control" required>
                    <option value="1">Published</option>
                    <option value="0">Draft</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <input type="submit" name="add_post" id="add_post" value="ADD Post" class="btn btn-lg btn-primary w-100 btn-block">
                </div>
            </form>

        </div>
    </div>
</div>