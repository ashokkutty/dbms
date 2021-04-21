<?php
    include 'db.php';
    if(isset($_GET["email"], $_GET["password"])) 
    {     
        $mail = $_GET["email"]; 
        $password = $_GET["password"]; 
        $error='Invalid Credentials !';
        $query = mysqli_query($conn,"SELECT acctype FROM login WHERE email = '".$mail."' AND  passwd = '".$password."'");
        $res = mysqli_fetch_assoc($query);
        if($res != "")
        {
            session_start();
            $_SESSION["logged_in"] = true; 
            $_SESSION["name"] = $row['name']; 
            header("location: cus_session.html");
        }
        else
        {
            echo "<script>alert('$error') </script>";
            //header("location: index.html");
        }
    }
?>