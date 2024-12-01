<?php
 $server="localhost";
 $dbuser="root";
 $dbpass="";
 $dbname="drug";
 $conn=mysqli_connect($server,$dbuser,$dbpass)or die(mysqli_error());
 mysqli_select_db($conn,$dbname) or die(mysqli_error());
 ?>

