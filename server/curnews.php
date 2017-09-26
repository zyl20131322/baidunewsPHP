<?php
	header("Content-type: application/json; charset=utf-8");
	require_once("db.php");
	if($link){
		//获得当前新闻
		$newsid=$_GET["newsid"];
		$sql="SELECT * FROM news WHERE news.id='{$newsid}'";
		mysqli_query($link,"SET NAMES utf8");
		$result=mysqli_query($link, $sql);
		$senddata=array();
		while($row=mysqli_fetch_assoc($result)){
			array_push($senddata, array(
				'id'=>$row['id'],
				'newstype'=>$row['newstype'],
				'newstitle'=>$row['newstitle'],
				'newsimg'=>$row['newsimg'],
				'newssrc'=>$row['newssrc'],
				'newstime'=>$row['newstime']
				));
		}
		echo json_encode($senddata);


	}
	mysqli_close($link);
?>