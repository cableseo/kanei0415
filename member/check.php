<?php include  $_SERVER['DOCUMENT_ROOT']."/db2.php"; ?>
<?php

	$uid = $_GET["userid"];
	$sql = mq("select * from member where id='".$uid."'");
	$member = $sql->fetch_array();
	if($member==0)
	{
?>
	<div style='font-family:"malgun gothic"';><?php echo $uid; ?>는 사용가능한 아이디입니다.</div>
<?php
	}else{
?>
	<div style='font-family:"malgun gothic"; color:red;'><?php echo $uid; ?>중복된아이디입니다.<div>
<?php
	}
?>
