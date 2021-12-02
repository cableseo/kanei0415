

<?php
        include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
?>



<head>
<meta charset="UTF-8">
<title>게시판</title>
</head>
<body>
        <?php
                $bno = $_GET['방번호']; /* bno함수에 idx값을 받아와 넣음*/
                $hit = mysqli_fetch_array(query("select * from room where 방번호 ='".$bno."'"));
                $hit = $hit['조회수'] + 1;
                $fet = query("update room set 조회수 = '".$hit."' where 방번호 = '".$bno."'");
                $sql = query("select * from room where 방번호='".$bno."'"); /* 받아온 idx값을 선택 */
                $room = $sql->fetch_array();
        ?>
<!-- 글 불러오기 -->



  <?php
  header("Location: https://jitsimain-sw1.com/".$room['방제목']);
  die();
  ?>

</body>
</html>
