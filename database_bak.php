
<?php
$servername = "118.178.86.148";
$username = "xxqg-user";
$password = "DV^wzSw3qsZzN9AP";
 
// 创建连接
$db_connect= mysql_connect ($servername, $username, $password);
 

if (!$db_connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";
?>


