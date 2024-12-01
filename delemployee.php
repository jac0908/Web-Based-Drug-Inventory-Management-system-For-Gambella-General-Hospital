<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: deleteemp.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM employee WHERE empid = '$ctrl'";
mysqli_query($SQL);
mysqli_close($conn);

print "<script>location.href = 'deleteemp.php'</script>";
?>