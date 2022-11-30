<?php

$conn = mysqli_connect('localhost' , 'root' , '123456' , 'people');
if(!$conn)
{
    die("连接失败" . mysqli_error($conn));
}

$user = $_POST['user'];
$emil = $_POST['emil'];
$scin = $_POST['scin'];
$pass = $_POST['pass'];

$sql = "INSERT INTO user values('{$user}' , '{$emil}' , '{$scin}' , '{$pass}')";
$res = mysqli_query($conn , $sql);

if(!$res)
{
    die("cannot insert " . mysqli_error($conn));
}
echo "<a href='index.html'>sign in</a>";
?>

