<?php
//连接数据库，主机，用户名，密码，数据库
$con=mysqli_connect("localhost","root","123456","people");
if(!$con)
{                                    
    die("error:".mysqli_connect_error());
    // 判断是否成功，连接失败会输出error+错误代码
}
//把用户在index.html输入的账号和密码保存在$user和$pass两个变量中
$user=$_POST['user'];
$pass=$_POST['pass'];

//数据库查询语句，就是这样的查询方式存在着致命的SQL注入
$sql="select * from user where user='$user' and pass='$pass'";

//查询结果保存在$res对象中
$res=mysqli_query($con,$sql);

//把$res转换成索引数组
$row=mysqli_fetch_array($res,MYSQLI_NUM);

// 数组不为空就显示登入成功
if(!is_null($row))
{
    header("location:https://www.baidu.com"); 
}
else
{
    echo "Account or password error<br>login failed";
}
?>
