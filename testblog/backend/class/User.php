<?php 
 
session_start();
include "Connection.php";

    class User extends Connection{

    public function user_login($data){
        // print_r($data);
        $email=$data['email'];
        $password=md5($data['password']);
        $sql = "SELECT * FROM `tbl_user` WHERE `email` ='$email' AND `password`='$password'";
        $result= $this->conn->query($sql);
        if($row= mysqli_fetch_assoc($result)){

            $_SESSION['admin_email']=$row['email'];
            $_SESSION['password']= $row['password'];

            // print_r($row);
            header("Location: dashboard.php");



        }
        else{
            
           
            if(empty($email)){
                $_SESSION['msg']="Please! Enter Email";

            }
            if(empty($password)){
                $_SESSION['msg']="Please! Enter Password";

            }
            if(empty($email) && empty($password)) {
                $_SESSION['msg']="Incorrect email or pass";
               
            }
            
        }

    }

  

   

   
    public function user_register($data) {
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password']; 

        $sql = "INSERT INTO `tbl_user` (`name`, `email`, `password`, `status`) 
                VALUES ('$name', '$email', '$password', 1)";

        if ($this->conn->query($sql)) {
            $_SESSION['msg'] = "Registration successful. You can now log in.";
            header("Location: index.php");
        } else {
            $_SESSION['msg'] = "Error during registration: " . $this->conn->error;
        }
    }

    
    public function checkExistingUser($email) {
        $sql = "SELECT * FROM `tbl_user` WHERE `email` = '$email'";
        $result = $this->conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return true; 
        }
        
        return false; 
    }
   

    // logout function 
    public function admin_logout(){
        // destroying the session 
        session_destroy();
        header("Location: ../index.php");
        

    }
 
    }


?>