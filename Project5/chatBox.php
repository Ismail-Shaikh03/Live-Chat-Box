<?php
include("Connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chat Box</title>
    <!--<script src="JQuery.js"></script>-->
    <link rel="stylesheet" href="chatBox.css">
</head>
<body>
<header>
    <p>List of Names:</p>
    <?php
    $sql="SELECT `Name` 
    FROM `ChatLog`";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0 ){
        while ($row = $result->fetch_assoc()) {
            echo $row['Name']."<br>";
        }
    }
    ?>
    
</header>
<main>
    <p>
        <label for="userName">Enter Your Name:</label>
        <input type="text" name="userName" id="userName" placeholder="Ex:Joe">
    </p>
    <p>
        <label for="userPassword">Enter Your Password:</label>
        <input type="number" name="userPassword" id="userPassword" placeholder="Ex:XXX">
    </p>
    <p>
        <textarea name="userMsg" id="userMsg" placeholder="Enter your message" cols="50" rows="5" onkeyup="sendMsg()"></textarea>
    </p>
    <p>Login Response:</p>
    <div id="login_response"></div>
</main>
<footer>
    <p>
        <label for="otherName">Enter Valid Name:</label>
        <input type="text" name="otherName" id="otherName" placeholder="Ex:Joe"><button type="button" id="listenButton">Listen</button>
    </p>
    <p>
        <textarea name="receiveMsg" id="receiveMsg" placeholder="Receive message from person selected." cols="50" rows="5"></textarea>
    </p>
</footer>
<script src="chatBox.js"></script>
</body>
</html>