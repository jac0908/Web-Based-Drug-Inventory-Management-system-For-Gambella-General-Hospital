<?PHP
session_start();
	if($_SESSION['usertype']!='cordinator' || $_SESSION['username']=="" ){
	header("location:index.php");
	}
?>
<html>
<head>
</head>
<body>
<div id="re" style="margin-left: 60px">
<?php
	if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['usertype']))
	{
	?>
	<?php
	echo "<div id=well><font color='#000000' size='8'><b>Welcome To Store Cordinator</b></font></div>";
	
	}else
	{
	?>
	<?php
	}
	?>
	<img src="dimage/1212drug.gif" width="800px"style="padding-left:30px">
		


	
</div>
</body>
</html>