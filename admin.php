<!DOCTYPE html>
<?php
	include("connection.php");  
 session_start();
 if($_SESSION['usertype']!='admin' || $_SESSION['username']=="" ){
	header("location:index.php");
	}
if(isset($_SESSION['userid']))
 {
  $mail=$_SESSION['userid'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='index.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['userid'];


?>
<html>
<head>
<script type = "text/javascript" >
 function preventBack()
 {
 window.history.forward();
 } 
 setTimeout("preventBack()", 0); 
 window.onunload=function(){null};
  </script>
  </head>
<head>
<title>Drug Store Inventory System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style>
	h5
	{
	background-color: 	#004566;
	height:50px;
	color:#ffffff;	
	}
	.form-signin {
            max-width: 250px;
            padding: 6px;
            margin: 0 auto;
            color: #017572;
         }
         
	#right button
	{
		background-color: #047b99;
		color: #fffbfb;
		width: 170px;
		height: 40px;
	
	}
	#right select
	{
		width: 170px;
		height: 30px;
	}
	#right input
	{
		  margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
		width: 170px;
		height: 30px;
	}
	#right h5{
		width: 170px;
	}
</style>
</head>
<body id="body">
<div id="contaner">

  <header id="header" class="clear">    
   <div id="header1">
      <img src ="dimage/1212.png" alt="m1" width="1100px" height="140px" />
    </div>
	</header>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
     <ul class="clear">
        <li class="active"><a href="admin.php">Home</a></li>     
		
		    <li class="active">
            <a href="#" class="drop">Manage Account </a>
                <ul>
		    <li class="active"><a  href="createAccount.php" target="content">Create Account </a></li>
			 <li class="active"><a  href="updateAccountTable.php" target="content">Delete Account</a></li>
			<li class="active"><a  href="viewAccount.php" target="content">View Account </a></li>
			
		
		    
       <!-- <li class="active"><a  href="adminviewfeedback.php" target="content"> view Feedback</a></li>-->
        </ul> 
        </li>
		   <li class="active">
            <a href="#" class="drop">Manage Employee </a>
                <ul>
		 <li class="active"><a  href="registeremp.php" target="content">Register Employee</a></li>
			<li class="active"><a href="deleteemp.php" target="content">Delete Employee</a></li>
			<li class="active"><a  href="viewemployee.php" target="content">View Employee </a></li>
			
		
		    
       <!-- <li class="active"><a  href="adminviewfeedback.php" target="content"> view Feedback</a></li>-->
        </ul> 
        </li>
		     <li class="active"><a href="viewreport.php" target="content">View Report</a></li>
		    

		
          <li class="active"><a href="changePassword.php" target="content">Change Password</a></li>
		  
          <li class="active"><a href="logout.php">Logout</a>
          
 </li>
         </ul>
     </nav>
  </div>
</div>
<div id="left" style="width: 20px;
	height: 900px;
	background-color:   	#000000;
	font-size: !important;
	border-bottom-right-radius: !important;
	margin-left: 0PX;
	margin-bottom: -20PX;
	margin-top: -29PX;
	border: 20PX;
	float: left;
	border-radius: 10PX;
	margin-right: 1PX;">
	
</div><!-- close left div---->
<div id="centerrrr">
	<div id="register" style="background-color: magenta;margin-left: 50px;width: 880px;height: auto;margin-top: 1px;border-radius: 23PX;border: 0PX SOLID">
	<iframe  src="adminwell.php" name="content" width="880px" height="800px" frameBorder="0" scrolling="yes" style="">
</iframe>
</div>
</div><!-- close center div---->

<div id="right" style="margin-top: -800PX">


	<?php
	//session_start();
	include('connection.php');

$sql = "select Photo from user WHERE userid='$user_id'";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query))
{
echo "<img src='uploads/".$row['Photo']."' width='200'height='85' style='margin-top: -17px;' />" ; 	
}
?><br />
<li class="active"><a  href="adminupdateprofile.php" target="content"><font color="#1E90FF" size="4"> Update Profile</font></a></li>
<br />
<div id ="cal" style="width: 180px; margin-left: 10px;">
<h5 style="margin-left:-6px;width:185px " align="center"><font size="5"> Date</font></h5>
<table width="180px"  height="40px">
 
        <font color="white"><script type="text/javascript" src="date_time.js"></script>
    <body>
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script></font>
  
</body>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="calendar.css" />
        <script type="text/javascript" src="calendar.js"></script>
    </head>
        <script type="text/javascript">
    
        </script>
        </table>
</div>
</div><!-- close right div---->
</div><!-- close container div---->
<div id="footer">
<b><strong><center><h2 style="background-color: white;"><font color="magenta"><marquee>Copyright @2024 Assosa University<font color="blue">Designed By Information Science Group-4 Students</marquee></h2><center></strong></b>	<br/>
</div><!---close footer div--->
<font color="magenta">
</body>
</html>