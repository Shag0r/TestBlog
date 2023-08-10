<?php 
include_once("Connection.php");



// class start 
class Catagories extends Connection{
    
// function for the add catagories 
public function add_cat($cat){
    // print_r($cat);
    $cat_name=$cat['cat_name'];
    $cat_description = $cat['cat_description'];
    $sql=" INSERT INTO `tbl_catagories`(`cat_name`, `cat_description`) VALUES (' $cat_name','$cat_description')";

     $result= $this->conn->query($sql);
    


}
// add catagories end 

// ------------------------
//displaycatagories 
public function display_catagory(){
    $sql= "SELECT * FROM `tbl_catagories`;";
    return $this->conn->query($sql);


}


// manage catagories end

// delete catagory start 
public function delete_catagory($cid){
    $sql="DELETE FROM `tbl_catagories` WHERE `id`=$cid;";
    $this->conn->query($sql);

}

// delete catagory end 
public function edit($cid){
    $sql="SELECT * FROM `tbl_catagories` WHERE `id`=$cid";

    return  $this->conn->query($sql);

}
public function edit_catagory($cat){
    $cat_id = $cat['id'];
    $cat_name = $cat['cat_name'];
    $cat_description = $cat['cat_description'];
    
    $sql = "UPDATE `tbl_catagories` SET `cat_name`='$cat_name', `cat_description`='$cat_description' WHERE `id`='$cat_id'";
    $update = $this->conn->query($sql);
    

}



}






?>