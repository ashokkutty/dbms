<?php
  $conn = mysqli_connect ("localhost", "root", "", "dbms");

  if(!$conn) {
    echo "<script>alert('Database Connection Failed!');</script>";
    //echo 'window.location.href = "index.html"';
  }
?>