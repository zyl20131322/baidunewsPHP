<?php
	header("Content-type: application/json; charset=utf-8");
	require_once('db.php');
	if($link){
		//修改新闻
		$newsid=$_POST['newsid'];
		$newstitle=$_POST['newstitle'];
		$newstype=$_POST['newstype'];
		$newssrc=$_POST['newssrc'];
		$newsimg=$_POST['newsimg'];
		$newstime=$_POST['newstime'];
		$sql="UPDATE news SET newstitle='{$newstitle}',newstype='{$newstype}',newssrc='{$newssrc}',newsimg='{$newsimg}',newstime='{$newstime}' WHERE id='{$newsid}'";
		mysqli_query($link,"SET NAMES utf8");
		mysqli_query($link, $sql);
		echo json_encode(array('success'=>mysql_error()));

	}
?>