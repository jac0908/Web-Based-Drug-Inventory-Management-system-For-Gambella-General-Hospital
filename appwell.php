<?PHP
session_start();
	if($_SESSION['usertype']!='pharmasist' || $_SESSION['username']=="" ){
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
	echo "<div id=well><font size='6' color='black'>Welcome To Pharmasist</font></div>";
	
	}else
	{
	?>
	<?php
	}
	?>
	<br /><br />


		
			<img src="dimage/1212drugs1.GIF" width="1000px"style="padding-left:60px">
		
	
		</div>
</body>
</html>