<?php
	header("Content-type: application/json; charset=utf-8");
	require_once('db.php');
	if($link){
		//插入新闻
		$newstitle=$_POST['newstitle'];
		$newstype=$_POST['newstype'];
		$newssrc=$_POST['newssrc'];
		$newsimg=$_POST['newsimg'];
		$newstime=$_POST['newstime'];
		$sql="INSERT INTO `news` (`newstitle`,`newstype`,`newssrc`,`newsimg`,`newstime`) VALUES('{$newstitle}','{$newstype}','{$newssrc}','{$newsimg}','{$newstime}')";
		mysqli_query($link,"SET NAMES utf8");
		mysqli_query($link, $sql); 

		echo json_encode(array('success'=>'ok'));

	}
?>