<?php
    include 'db.php';
    if(isset($_GET["email"], $_GET["password"])) 
    {     
        $mail = $_GET["email"]; 
        $password = $_GET["password"]; 
        $error='Invalid Credentials !';
        $query = mysqli_query($conn,"SELECT acctype FROM login WHERE email = '".$mail."' AND  passwd = '".$password."'");
        $acctype = mysqli_fetch_assoc($query);
        if($acctype != "")
        {
            session_start();
            $_SESSION["logged_in"] = true; 
            $_SESSION["name"] = $name; 
            echo "Inside If";
        }
        else
        {
            echo "<script>alert('$error') </script>";
        //    header("location: index.html");
        }
    }
?>