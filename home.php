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

    <ul class="menu" style="padding-right:42%;">
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

    <div id="board_area">
      <p align="center">
        <br><br>
        안녕하세요!<br>
        저희는 경북대학교에서 '소프트웨어 설계' 수업을 들으며 팀 프로젝트를 수행 중인 학생들입니다.🙂<br>

        저희가 기획한 서비스는 '오픈미팅'으로, 각 관심사에 맞게 방을 개설하여 자유롭게 대화를 나눌 수 있는 화상채팅 서비스입니다❗️
      </p>
      <p align="center">

        <사용매뉴얼><br><br>
        1. 'home'에서 사용 매뉴얼 확인 및 피드백을 해주세요!<br><br>
        2. 'start'에서  카테고리별로 개설 되어 있는 방에 입장하셔서 자유롭게 대화를 즐기세요!<br>
        (검색 기능과 조회수 순 정렬 기능도 지원됩니다)<br><br>
        3. 'create' 버튼을 눌러 새로운 방을 개설하세요!<br><br>
        4. 'jitsi'의 공유하기 기능을 통해 간편하게 친구에게 링크를 전달하세요!<br><br>
        <strong>*이벤트가 진행되고 있으니 많은 관심 부탁드립니다!*</strong>
      </p>

      <div id="sort_btn1" style="padding:0.5rem;" align="center">
        <a href="https://forms.gle/iZPCrMBEy8uPrfuC6"><button>feedback</button></a>
      </div>



    </div>
  </div>

</body>
</html>
