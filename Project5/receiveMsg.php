<?php
include("Connect.php");
if(isset($_REQUEST['q'])){
    $otherName=$_GET['q'];
    $sql="SELECT `ChatContent` 
    FROM `ChatLog` 
    WHERE `Name`='$otherName'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0 ){
            while ($row = $result->fetch_assoc()) {
                echo $row['ChatContent'];
            }
        }
}
?>