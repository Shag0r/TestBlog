<?php 
include_once("Connection.php");


class Post extends Connection{


    // to add post 
    public function add_post($pItem){

    $postTitle = $pItem['post_title'];
    $postContent = $pItem['post_content'];
    $postImg = $_FILES['post_img']['name'];
    $postTempImg = $_FILES['post_img']['tmp_name'];
    $postUser = $pItem['post_user'];
    $postSummary = $pItem['post_summary'];
    $postStatus = $pItem['post_status'];

    $sql = "INSERT INTO tbl_post (post_title, post_content, post_img, post_user, post_summary, post_status) 
                VALUES ('$postTitle', '$postContent', '$postImg', '$postUser', '$postSummary', '$postStatus')";
    $result = $this->conn->query($sql);
    if($result){
        move_uploaded_file($postTempImg,"../Upload/".$postImg);
    }




    //  ending paranthesis of function   
    }

    // display post 
    public function display_post(){
        $sql="SELECT * FROM `tbl_post`;";

        return $this->conn->query($sql);

    }

    public function delete_post($id){
        $sql="DELETE FROM `tbl_post` WHERE `post_id`=$id;";
        $this->conn->query($sql);
    }

    // edit post 
    public function edit($cid){
        
            $sql="SELECT * FROM `tbl_post` WHERE `post_id`=$cid;";
            return  $this->conn->query($sql);
    
    }
    // edit post 
    public function edit_post($pItem){
        $postId=$pItem['post_id'];
        $postTitle = $pItem['post_title'];
        $postContent = $pItem['post_content'];
        $postImg = $_FILES['post_img']['name'];
        $postTempImg = $_FILES['post_img']['tmp_name'];
        $postUser = $pItem['post_user'];
        $postSummary = $pItem['post_summary'];
        $postStatus = $pItem['post_status'];

        $sql = "UPDATE `tbl_post` SET `post_title`='$postTitle', `post_content`='$postContent', `post_img`='$postImg', `post_user`='$postUser', `post_date`=NOW(), `post_summary`='$postSummary', `post_status`='$postStatus' WHERE `post_id`='$postId'";
        $result=$this->conn->query($sql);
        if($result){
            move_uploaded_file($postTempImg,"../Upload/".$postImg);
            
            // header("Location: dashboard.php");

        }


        
    }


// emding paranthesis of the class 
}

?>