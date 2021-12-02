
<!-- create.php에서 정보를 받아서 새로운 방 생성 -->
<head><meta charset="UTF-8"></head>
<?php
$con=mysqli_connect("54.163.70.215","root","123456","test");
if(mysqli_connect_errno()){
  echo"Failed to connect to MySQL: " .mysqli_connect_error();
}else{
  echo"success";
}

$date = date('m/d/Y h:i:s', time());
$sql="INSERT INTO room (방제목,카테고리,방생성시기,방인원,조회수) VALUES ('$_POST[room_name]','$_POST[category]',now(),'0','0')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

 ?>
