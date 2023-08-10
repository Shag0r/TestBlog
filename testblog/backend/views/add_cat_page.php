<?php 
$titlepage="Add Catagory";




?>




<h1 class="mt-4"><?php echo $titlepage;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><?php echo $titlepage;?></li>
</ol>

<?php 
include_once ("class/Catagories.php");
$shagor=new Catagories();



if(isset($_POST['add_cat'])){
   $shagor->add_cat($_POST);
}


?>



<!-- add catagories  -->
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="cat_form shadow-lg p-3 rounded">
       



            <form action="" method="POST">
                <div class="form-group mb-3">
                    <label for="cat_name"><b>Catagory Name</b></label>
                    <input type="text" name="cat_name" id="cat_name" placeholder="Enter Catagory name" class="form-control mt-2"required>


                </div>
                <div class="form-group mb-3">
                    <label for="cat_description"><b>Catagory Description</b></label>
                    <input type="text" name="cat_description" id="cat_description" placeholder="Enter Catagory description" class="form-control mt-2" required>


                </div>
                <div class="form-group mb-3">
                   
                    <input type="submit" name="add_cat" id="add_cat" value="ADD Catagory" class="btn btn-lg btn-primary w-100 btn-block" >


                </div>

            </form>
        </div>
    </div>
</div>