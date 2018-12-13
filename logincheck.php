<?php
	header("Content-type:css/html;charset=utf-8");
//	接收数据
	$username=$_POST['username'];
	$userpsw=$_POST['userpsw'];
	
//	连接数据库
	$conn=my_connect('localhost','root','root');
	if(!$conn){
		die("连接失败".mysql_error());
	}else{
//		选择数据库sa
		mysql_select_db("mydb",$conn);
		
//		创建sql语句
		
		$sqlstr="select * from users where username='$username'";
		
		$result=mysql_query($strsql,$conn);
		
//		关闭数据库
		mysql_close($conn);
		
		if($result!=0){
			echo '0';
		}else{
			echo '1';
		}
		
		
	}










?>