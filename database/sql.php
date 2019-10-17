<?php
//$con=mysql_connect('localhost','root','');
    $servername = "localhost";
    $username = "phi";
    $password = "123";
    $dbname = "myDB";
    $domain         =        "/ShopWeb";
    
    $con            =          mysqli_connect($servername, $username,$password);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
	mysqli_select_db($con,'shop') or die('canot select database');
	$items          =           0;
	$pice           =           0;
?>
