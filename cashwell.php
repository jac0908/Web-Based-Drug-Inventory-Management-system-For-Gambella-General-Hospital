<?PHP
session_start();
	if($_SESSION['usertype']!='cashier' || $_SESSION['username']=="" ){
	header("location:index.php");
	}
?>
<html>
<body>
<div id="app" style="margin-left: 50px">
<?php
//session_start();
	if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['usertype']))
	{
	?>
	<?php
	echo "<div id=well><font size='6' color='black'><b>Welcome To Cashier</b></font></div>";
	
	}else
	{
	?>
	<?php
	}
	?>
	<br /><br />
	<img src="dimage/12121212.gif" width="800px"style="padding-left:50px">
		</div>
</body>
</html>