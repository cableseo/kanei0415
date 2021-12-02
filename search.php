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


/*방 목록 맨 윗줄*/
    .list-table thead{
      background-color: #DEF1F5;
      height:2rem;
    }
    .list-table th{
      text-align: center;
    }



/*방 목록 테두리 없애기*/
    table{
      border-collapse:collapse
    }
/*검색폼 */
    form{
      padding:0.5rem;
    }
    #search input{
      height: 2rem;
    }
    #search button{
      height : 2rem;
    }

/*검색창*/
    .search {
      width: 20%;
      position: relative;
      display: flex;
    }

    .searchTerm {
      width: 100%;
      border: 3px solid #CAE8EE;
      border-right: none;
      padding: 5px;
      height: 20px;
      border-radius: 5px 0 0 5px;
      outline: none;
      color: #9DBFAF;
  }

    .searchTerm:focus{
      color:black;
    }

    .searchButton {
      width: 40px;
      height: 36px;
    border: 1px solid #CAE8EE;
    background: #CAE8EE;
    text-align: center;
    color: #fff;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    font-size: 20px;
  }


/*정렬 버튼*/

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
          <li><a href="방번호순.php?category=<?='방송/연예>'?>"> 방송/연예</a></li>

    </div>

    <div id="board_area">
      <div>

        <?php @$category = $_GET['category']; ?>
        <p style="font-size:1.5rem;"><strong><?php echo $category ?></strong></p>
      </div>
      <div id="search">
        <form action="/search.php" method="get">

            <div class="search">
              <input class="searchTerm" type="search" name ="search" placeholder="검색어 입력" >
              <button class="searchButton">Go</button>
            </div>

          <?php
          //@는 에러를 표시하지 않기 위해
          $search_con=@$_GET['search'];

          echo '<br>\''.$search_con.'\' 로 검색한 결과';
           ?>
        </form>
      </div>

      <div id="sort_btn1" style="padding:0.5rem;">
        <a href="조회수순.php"><button>veiws</button></a>
        <a href="방번호순.php"><button>number</button></a>
      </div>
      <table class="list-table">
        <thead>
            <tr>
                <th width="70">NUM</th>
                  <th width="700">TITLE</th>
                  <!--<th width="100">방생성시기</th>-->
                  <!-- 추천수 항목 추가 -->
                  <th width="100">VIEWS</th>
              </tr>
          </thead>
          <?php
          // room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

          $sql = query("select * from room where 방제목 like '%$search_con%' order by 방번호 asc limit 0,20");
          while($room = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$room["방제목"];
              $view=$room["조회수"];
              if(strlen($title)>30)
              {
                //title이 30을 넘어서면 ...표시
                $title=str_replace($room["방제목"],mb_substr($room["방제목"],0,30,"utf-8")."...",$room["방제목"]);
              }

          ?>
        <tbody class="list">

          <tr>
            <td width="50" style="text-align:center;"><?php echo $room['방번호']; ?></td>
            <td width="700" style="text-align:center;"><a href="read.php?방번호=<?php echo $room["방번호"];?>"><?php echo $title;?></a></td>
            <!--<td width="100">-->   <?php/* echo $room['방생성시기']*/?><!--</td>-->
            <td width="100" style="text-align:center;"><?php echo $room['조회수']; ?></td>
            <!-- 추천수 표시해주기 위해 추가한 부분 -->

          </tr>
        </tbody>


        <?php } ?>
      </table>

    </div>
  </div>

</body>
</html>
