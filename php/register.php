<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('connect.php');
if (isset($_POST['register']) && $_POST['register']=="true"){
  try {

    $sql = $con->prepare("SELECT * FROM users WHERE email = :email OR username = :username");
    $sql->bindParam(':username', $_POST['form_choose_username'], PDO::PARAM_STR);   
    $sql->bindParam(':email', $_POST['form_email'], PDO::PARAM_STR);
    $sql->execute();
    $result = $sql->fetchColumn();

    if ($result > 0){
      echo 'This username/email already exists.';
    }
    else{    

      $password = base64_encode($_POST['form_choose_password']);
      $sql = "INSERT users SET username = :username,
      name = :name,          
      email = :email,
      password = :password";
      $stmt = $con->prepare($sql);                                  
      $stmt->bindParam(':username', $_POST['form_choose_username'], PDO::PARAM_STR);   
      $stmt->bindParam(':email', $_POST['form_email'], PDO::PARAM_STR);
      $stmt->bindParam(':name', $_POST['form_name'], PDO::PARAM_STR); 
      $stmt->bindParam(':password', $password, PDO::PARAM_STR);  
      $stmt->execute();

      echo "User registered succesfully!";
    }
    }
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }
  }     

else {
  header("Location: ../index.php");
}


?>