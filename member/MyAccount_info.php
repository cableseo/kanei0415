<?php include "../db2.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>메인페이지</title>
</head>
<body>
	<?php
	if(isset($_SESSION['userid'])){
		echo "<h2>{$_SESSION['userid']} 님 환영합니다.</h2>";
		echo "<h2>이름: {$_SESSION['username']}</h2>";
    echo "<h2>취미: {$_SESSION['userhobby']}</h2>";
    echo "<h2>성별: {$_SESSION['usersex']}</h2>";
    echo "<h2>이메일: {$_SESSION['useremail']}</h2>";

	?>
	<a href="/member/logout.php"><input type="button" value="로그아웃" /></a>
	<?php
		}else{
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	}
	?>
</body>
</html>
