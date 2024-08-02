<?php
    require 'db_connected.php';
     session_start();

     $name=trim($_POST['name']);
     $email=trim($_POST['email']);
     $password=trim($_POST['password']);
     $cpassword=trim($_POST['cpassword']);
     $phone=trim($_POST['phone']);
     $address=trim($_POST['address']);
     $photo= $_FILES['photo'];
     $status = 0;
     $role = 2;

     if($password != $cpassword){
        $_SESSION['fail'] ='Your Password Not Match Please Check your Password!';

        header("location:register.php");
     }else{
        $bathphoto ='img/';
        $fullpath=$bathphoto.$photo['name'];

        move_uploaded_file($photo['tmp_name'],$fullpath);

        $sql= "INSERT INTO user (name, email, password, phone_no, address, photo , status) 
        VALUES (:name, :email, :password, :phone_no, :address, :photo , :status)";


        $stmt =$conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        $stmt->bindParam(':phone_no', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':photo', $fullpath);
        $stmt->bindParam(':status', $status);

        $stmt->execute();

        $user_id =$conn->lastInsertId();

        $sql="INSERT INTO model_has_roles (user_id, role_id) 
        VALUES (:user_id, :role_id);";

        $stmt =$conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':role_id', $role);

        $stmt->execute();



        $_SESSION['resuccess'] = 'Create Account Successful';
        header("location:login.php");

     }


?>