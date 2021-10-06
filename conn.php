<?php
    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'admin_panel');  
  echo "Connected";
?>