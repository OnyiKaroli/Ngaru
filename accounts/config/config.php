<?php
	ob_start();
	//error_reporting(0);
	session_start();
    //session_destroy(
	$server = mysqli_connect("localhost","root","") or die('Failed to connect');
    $db = mysqli_select_db($server, "ngaru_db") or die('Failed to database connect');
    


    $servedby_name = $_SESSION['user']['firstname'];
    $servedby_id = $_SESSION['user']['email'];
    $servedby_role = $_SESSION['user']['role'];
    

    //et current url
    $urlpage = $_SERVER['REQUEST_URI'];
//echo $urlpage;
    /*
    if ($urlpage != "/linkphones/admin/index") {
      if ($servedby_id == '') {
        header('location:../admin/index');
      } 
      if ($servedby_status != 'active') {
        header('location:../admin/index');
      }
    }*/
?>




