
<?php
session_start();
include 'connect.php';


if(isset($_POST['submit'])){
  $user= $_POST['username'];
  $password= $_POST['password'];
  $login_sql= "SELECT * FROM users WHERE username ='$user'";

    $output=  connect()->query($login_sql);
      // code...
  $row = $output->fetch_assoc();

      $verify= $row['password'];

      $usertype= $row['usertype'];
       if(($password == $verify) && $usertype == "ADMIN"){
          echo "Verified";
        $SESSION['UserID'] = $row['UserID'];
         $_SESSION['username']= $row['username'];
         //$_SESSION['FName']= $row['Fname'];
         $_SESSION['usertype']= $usertype;
         header("Location: ../../codeigniter/application/controller/admin");
        }
        if(password_verify($password, $verify) && $usertype== 'Client'){
          $SESSION['UserID'] = $row['UserID'];
          $_SESSION['Username']= $row['Username'];
          $_SESSION['UserType']= $usertype;
          header("Location: ../../project/menu.php?login=success");
        }
        else{

            echo "
            ----ERRONEOUS DETAILS---- ";
            echo '<script language="javascript">';
            echo 'alert("USERNAME OR PASSWORD INCORRECT")';
            echo '</script>';
             header("Location: ../../codeigniter/application/controller/login");
        }
      }
 ?>
