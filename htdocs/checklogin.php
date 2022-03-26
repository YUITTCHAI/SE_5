<?php 
session_start();
        if(isset($_POST['username'])){
                  require_once("connection_connect.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];
					echo "$username";
					echo "$password";
                  $sql="SELECT * FROM user 
                  WHERE  uid='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_array($result);
                    $_SESSION["uid"] = $row["uid"];
                    $_SESSION["name"] = $row["name"];
                    $_SESSION["surname"] = $row["surname"];
                    $_SESSION["idTypeuser"]=$row["idTypeuser"];
                    if($_SESSION["idTypeuser"]=="1"){
                      Header("Location: index_main.php");
                    }
                    if($_SESSION["idTypeuser"]=="2"){
                      Header("Location: professor/index_main.php");
                    }
                    
                  }
                  else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
                }else{

                    Header("Location: index.php"); //user & password incorrect back to login again
                    
               }
               mysql_close();
?>