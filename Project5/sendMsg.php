<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
include("Connect.php");
if(isset($_REQUEST['q'])&&isset($_REQUEST['p'])&&isset($_REQUEST['u'])){
    $userName=$_GET['q'];
    $userPassword=$_GET['p'];
    $userMsg=$_GET['u'];
    $sql="SELECT *
    FROM `ChatLog`
    WHERE `Name`='$userName' AND `Password`=$userPassword";
    if($result=mysqli_query($con,$sql)){
        if(mysqli_num_rows($result)>0 ){
            echo "Logged In<br>";
            $sql1="UPDATE `ChatLog` 
            SET `ChatContent`='$userMsg'
            WHERE `Name`='$userName' 
            AND `Password`=$userPassword";
            if(mysqli_query($con,$sql1)){
                echo "MSG Sent";
            }
            else{
                echo "MSG didn't send";
            }
        }
        else{
            echo "Not Logged In! Failed to login.";
        }

    }
}
?>