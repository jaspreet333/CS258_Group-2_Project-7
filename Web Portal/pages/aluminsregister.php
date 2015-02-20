<?php
 
// Database config variables
define("DB_HOST", "localhost");
define("DB_USER", "941560");

define("DB_DATABASE", "941560");
 
// Google Cloud Messaging API Key
// Place your Google API Key
//define("GOOGLE_API_KEY", "AIzaSyAIxrR-SVSicGzdtfU74C7GWmTmwqa_PbE"); 
     $conn = mysqli_connect(DB_HOST, DB_USER, 'sahilsaluja',DB_DATABASE);
// selecting database
if(!mysqli_select_db($conn,DB_DATABASE))
  print "Not connected with database.";
                 

	//$json = array();
 
 
// GCM Registration ID got from device
$rollno  = $_POST["rollno"];
$name  = $_POST["name"];
$emailaddr  = $_POST["emailaddr"];
$contactno  = $_POST["contactno"];
$caddr  = $_POST["caddr"];
$cname  = $_POST["cname"];
$batch  = $_POST["batch"];
$uname  = $_POST["uname"];
$password  = $_POST["password"];
 if (isset($rollno)) {
     
    // Store user details in db
    //$res = storeUser($gcmRegID);
	$res = mysqli_query($conn,"INSERT INTO alumnis_users(rollno,name,emailaddr,contactno,caddr,cname,batch,uname,password) VALUES ('$rollno','$name','$emailaddr','$contactno','$caddr','$cname','$batch','$uname','$password')");
        echo $res;
 }
 
 			
?>