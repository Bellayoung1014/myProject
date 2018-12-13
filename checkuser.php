<?php
	header("Content-type:text/html;charset=utf-8");
	$username=$_GET['user'];
//连接数据库
	$conn=mysql_connect('localhost','root','root');

	if(!$conn){
		die('连接失败'.mysql_error());
	}else{
		
		mysql_select_db('mydb',$conn);

		$sqlstr="select * from users where username='$username'";

		$result=mysql_query($sqlstr,$conn);

		mysql_close($conn);

	if(mysql_num_rows($result)==0){
		echo '0';
	}else{
		echo '1';
	}
}





?>