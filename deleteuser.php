<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: updateAccountTable.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM user WHERE userid = '$ctrl'";
mysql_query($SQL);
mysql_close($conn);

print "<script>location.href = 'updateAccountTable.php'</script>";
?>