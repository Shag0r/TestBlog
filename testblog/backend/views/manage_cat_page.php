<?php 
$titlepage="Manage Catagory";
include_once ("class/Catagories.php");
$shagor=new Catagories();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $shagor->delete_catagory($id);
}


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
       All Catagories
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Catagory ID</th>
                    <th>Catagory Name</th>
                    <th>Catagory Description</th>
                    <th collspan="2">Action</th>
                    
                </tr>
            </thead>
            <tfoot>
                <tr>
              
                    <th>Catagory ID</th>
                    <th>Catagory Name</th>
                    <th>Catagory Description</th>
                    <th collspan="2">Action</th>
                    
              
                </tr>
            </tfoot>

           


            <tbody>


            <?php 
            $data=$shagor->display_catagory();

            if(mysqli_num_rows($data)>0){
                $i=1;
                    foreach($data as $catItem){
                        ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $catItem['cat_name'];?></td>
                            <td><?php echo $catItem['cat_description'];?></td>
                            <td>
                                <a href="?id=<?php echo $catItem['id'] ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                           <a href="updatecatagory.php?cid=<?php echo $catItem['id'] ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a></td>
                   
                        </tr>



                        <?php
                    }


            }
            
            ?>
                
            </tbody>
        </table>
    </div>
</div>