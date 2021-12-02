<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!DOCTYPE html>
<html>
  <title>OPEN MEETING</title>
  <head>
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
    <style>

      *{
        background-color: #F1F8F9;
        font-family: 'Nanum Gothic Coding', monospace;
      }
      li{
        list-style: none;
      }
      li a {
        display: block;
      }

      a { text-decoration: none; color: black; }
      a:visited { text-decoration: none; }
      a:hover { text-decoration: none; }
      a:focus { text-decoration: none; }
      a:hover, a:active { text-decoration: none; }

      header{
        text-align:center;
        font-size :3rem;
      }

      .column{
        width:70%;
      }

      .list li{
        text-align: center;
        padding:4px;
      }
      .list-table{

        padding-right: 20px;
      }

      td{
        padding-left: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
      }
      /*상단 메뉴바*/
      .menu {
        float: right;
      }
      .munu li{
        float: right;
      }

      .nav ul {
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: none;
      }

      .nav li {
        float: left;
        padding:8px;
      }
      /*헤더*/
      header {
        padding:10px;
      }

      /*카테고리*/
      .content{
        float:left;
        padding:15px;
      }
      .content {
        width: 20%;
      }
      .content li{
        text-align: center;
        padding:3px;
      }

      /*이벤트 효과*/
      .content span{
        -webkit-font-smoothing: antialiased;
        position: relative;
        top: 5px; /*바운딩 높이 조절*/
        display: inline-block;
        animation: bounce .3s ease infinite alternate;
        /*font-family: 'Titan One', cursive;*/
        font-size: 20px;
        color: black;
        text-shadow: 0 1px 0 #CCC,
                0 2px 0 #CCC,
               0 3px 0 #CCC,
               0 4px 0 #CCC,
               0 5px 0 #CCC,
               0 6px 0 transparent,
               0 7px 0 transparent,
               0 8px 0 transparent,
               0 9px 0 transparent,
               0 10px 10px rgba(0, 0, 0, .4);

             }

        .content span:nth-child(2) { animation-delay: .1s; }
        .content span:nth-child(3) { animation-delay: .2s; }
        .content span:nth-child(4) { animation-delay: .3s; }
        .content span:nth-child(5) { animation-delay: .4s; }

        @keyframes bounce {
          100% {
            top: -0.1px;
            text-shadow: 0 1px 0 #CCC,
                0 2px 0 #CCC,
                 0 3px 0 #CCC,
                 0 20px 10px rgba(0, 0, 0, .2);
               }
             }

             p{
               line-height: 130%;
             }


             #sort_btn1 button {
               display: inline-block;
               padding: 1rem 2rem;
               font-size: 1rem;
               cursor: pointer;
               text-align: center;
               text-decoration: none;
               outline: none;
               color: black;
               background-color: #DEF1F5;
               border: none;
               border-radius: 15px;
               box-shadow: 0 2px #999;
             }

             #sort_btn1 button:hover {background-color: #CAE8EE}

             #sort_btn1 button:active {
               background-color: #BBE1E9;
               box-shadow: 0 1px #666;
               transform: translateY(4px);
             }

             #sort_btn1{
               padding :10px;
             }

    </style>
  </head>

  <body class="w3-light-grey w3-content" style="max-width:1600px">

    <header><a href="/home.php">OPEN MEETING</a> </header>

  <div class="nav">

    <ul class="menu" >
      <li><a href="/home.php">Home</a></li>
      <li><a href="/event.php">Start</a></li>
      <li><a href="/create.php">Create</a></li>
            <!--로그인 -->


      <?php

      if(isset($_SESSION['userid'])){
      echo"<li><a href=\"/member/MyAccount_info.php\">My Account</a></li>";
      echo"<li><a href=\"/member/logout.php\">logout</a></li>";
     }else{

      echo"<li><a href=\"/login.php\">login</a></li>";
     }
      ?>
      <!--로그인 -->

    </ul>

  </div>
  <div style="padding-top:10px;">
    <div class="content">
          <li style="font-size:1.5rem;padding-bottom: 20px;"><strong>category</strong></li>
          <li><a href="event.php" id="event"><span>E</span><span>V</span><span>E</span><span>N</span><span>T</sapn></a></li>
          <li><a href="방번호순.php?category=<?='생활/취미'?>"> 생활/취미</a></li>
          <li><a href="방번호순.php?category=<?='온라인 게임'?>"> 온라인 게임</a></li>
          <li><a href="방번호순.php?category=<?='스포츠/레저'?>"> 스포츠/레저</a></li>
          <li><a href="방번호순.php?category=<?='외국어'?>"> 외국어</a></li>
          <li><a href="방번호순.php?category=<?='음악'?>"> 음악</a></li>
          <li><a href="방번호순.php?category=<?='친목/모임'?>"> 친목/모임</a></li>
          <li><a href="방번호순.php?category=<?='패션/미용'?>"> 패션/미용</a></li>
          <li><a href="방번호순.php?category=<?='교육'?>"> 교육</a></li>
          <li><a href="방번호순.php?category=<?='종교'?>"> 종교</a></li>
          <li><a href="방번호순.php?category=<?='동창/동문'?>"> 동창/동문</a></li>
          <li><a href="방번호순.php?category=<?='연예인'?>"> 연예인</a></li>
          <li><a href="방번호순.php?category=<?='방송/연예'?>"> 방송/연예</a></li>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>

    <div id="board_area">
        <p>
          <h2>(EVENT) 온라인 독서실, 미라클 스터디룸✨</h2>

          <p align="center">
            혹시 요새 유행 중인 '미라클 모닝'이라고 들어보셨나요?<br>
            이른 아침 일어나 자기계발을 하는 것인데요.🌞<br>
            이번 이벤트를 통해 아침 시간을 활용하여 학우들과 함께 공부해 보는 건 어떨까요?✍️✍️✍️<br>
          </p>
          <p align="center">
            이벤트 기간인 🌟12월 3일(금)~5일(일)🌟까지 총 3일 모두 참여해 주시는 분 중 우수 참여자분들을 선정하여<br>
            🎁상품🎁도 제공할 예정이니, 많은 참여 부탁드립니다!<br>
          </p>

          <div id="sort_btn1" style="padding:0.5rem;" align="center">
            <a href="https://forms.gle/h2rm23niqXGhEGLA6"><button>신청링크</button></a>
          </div>
    </div>
    <--<div style="text-align:center;">
      <img src="event.png" alt="" loading="lazy" style="width:40%;">
    </div>-->
  </div>

</body>
</html>
