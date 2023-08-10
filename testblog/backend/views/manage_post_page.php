<?php 
$titlepage="Manage Post";

include_once ("class/Post.php");
$shagor=new Post();

// if(isset($_GET['id'])){
//     $id=$_GET['id'];
//     $shagor->delete_catagory($id);
// }
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $shagor->delete_post($id);
}



?>




<h1 class="mt-4"><?php echo $titlepage;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><?php echo $titlepage;?></li>
</ol>

<!-- --------------------------------------------------------  -->

<?php 




?>




<h1 class="mt-4"><?php echo $titlepage;?></h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php echo $titlepage;?></li>
</ol>


<div class="card mb-4">
    
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
       All Posts
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Post ID</th>
                    <th>Post Title</th>

                    <th>Post Image</th>
                    <th>Author</th>
                    <th>Post Time</th>
                    <!-- <th>Post Summary</th> -->
                    <th>Post Status</th>

                    <th collspan="2">Action</th>
                    
                </tr>
            </thead>
            <tfoot>
            <tr>
                    <th>Post ID</th>
                    <th>Post Title</th>

                    <th>Post Image</th>
                    <th>Author</th>
                    <th>Post Time</th>
                    <!-- <th>Post Summary</th> -->
                    <th>Post Status</th>

                    <th collspan="2">Action</th>
                    
                </tr>
            </tfoot>

           


            <tbody>


            <?php 
            $data=$shagor->display_post();

            if(mysqli_num_rows($data)>0){
                $i=1;
                    foreach($data as $postItem){
                        ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $postItem['post_title'];?></td>
                           
                            <td><img src="../Upload/<?php echo $postItem['post_img'];?>" width="150px" height="150px"></td>
                            <td><?php echo $postItem['post_user'];?></td>
                            <td><?php echo $postItem['post_date'];?></td>
                           
                            <td><?php
                            if($postItem['post_status']=="1"){
                                echo "Published";
                            } 
                            else{
                                echo "Draft";
                            }
                            
                            
                            ?></td>
                            <td>
                                <a href="?id=<?php echo $postItem['post_id'] ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                <a href="updatepost.php?cid=<?php echo $postItem['post_id'] ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                   
                        </tr>



                        <?php
                    }


            }
            
            ?>
                
            </tbody>
        </table>
    </div>
</div>