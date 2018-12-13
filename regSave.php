<?php
	header("Content-type:text/html;charset=utf-8");
	//1,接收数据
	$username=$_GET['username'];
	$userpsw=$_GET['userpsw'];
	//处理
	//2,连接数据库
	$conn=mysql_connect('localhost','root','root');
	if(!$conn){
		die("连接失败".mysql_error());
	}else{
		mysql_select_db('mydb',$conn);
	
	
		//3,执行sql语句
		$sqlstr="insert into users(username,userpsw)
		values('$username','$userpsw')";
		$result=mysql_query($sqlstr,$conn);
		//4,关闭数据库
		mysql_close($conn);
		if($result=='1'){
			echo "注册成功<a href='login.html'>登陆</a>";
		}else{
			echo  '注册失败 ,请重新<a href="register.html">注册</a>';
		}
	}

?>