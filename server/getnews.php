<?php
	header("Content-type: application/json; charset=utf-8");
	
	require_once('db.php');
	if($link){
		//执行成功的过程

		if(isset($_GET['newstype'])){
			$newstype=$_GET['newstype'];
			$sql="SELECT * FROM news WHERE newstype='{$newstype}'";	
		}else{
			$sql="SELECT * FROM news order by id desc";
		}	
		mysqli_query($link,"SET NAMES utf8");
		$result=mysqli_query($link,$sql);
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
	}else{
		echo json_encode(array('连接'=>'失败'));
	}
	mysqli_close($link);
// echo urldecode(json_encode(urlencode($arr)));


?>