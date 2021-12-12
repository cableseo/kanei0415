<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Feane </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/blue.png" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Open meeting
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
            <?php



            if(isset($_SESSION['userid'])){
            echo'<li><a class="nav-link nav-item" href=/member/MyAccount_info.php>My Account</a></li>';
            echo'<li><a class="nav-link nav-item" href=/member/logout.php>logout</a></li>';
           }else{

            echo'<li><a class="nav-link nav-item" href=/login.php>login</a></li>';
           }
              ?>
            </ul>


          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Open meeting
                    </h1>
                    <p>
                    안녕하세요!
저희는 경북대학교에서 '소프트웨어 설계' 수업을 들으며 팀 프로젝트를 수행 중인 학생들입니다.🙂
저희가 기획한 서비스는 '오픈미팅'으로, 각 관심사에 맞게 방을 개설하여 자유롭게 대화를 나눌 수 있는 화상채팅 서비스입니다❗️
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                     How to use?
                    </h1>
                    <p>
                    1. 'home'에서 사용 매뉴얼 확인 및 피드백을 해주세요! <br><br>

2. 아래에서 카테고리별로 개설 되어 있는 방에 입장하셔서 자유롭게 대화를 즐기세요!<br>
(검색 기능과 세분화된 카테고리가 지원됩니다)<br><br>

3. 'jitsi'의 공유하기 기능을 통해 간편하게 친구에게 링크를 전달하세요!<br><br>

*이벤트가 진행되고 있으니 많은 관심 부탁드립니다!*<br><br>
                    </p>
                    <div class="btn-box">
                      <a href="https://forms.gle/iZPCrMBEy8uPrfuC6" class="btn1">
                      Feedback
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/event.png" alt="">
              </div>
              <div class="detail-box">
                <h5 style="font-family: monospace;">
                  EVENT
                </h5>
                <h6 style="font-family: Georgia, 'Times New Roman', Times, serif;">
                  <span>미라클 모닝</span>
                </h6>
                <a href="#mrcl_event_info">
                  이벤트
                </a>
                <a href="https://meet.jit.si/studyroom1">
                  1번방
                </a>
                <a href="https://meet.jit.si/studyroom2">
                  2번방
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Category
        </h2>
      </div>

      <form action="/search.php" method="get">

          <div class="search">
            <input class="searchTerm" type="search" name ="search" placeholder="검색어 입력" >
            <button class="searchButton">Go</button>
          </div>

        <?php
        //@는 에러를 표시하지 않기 위해
        $search_con=@$_GET['search'];
        if(is_null($search_con)){

        }else {
          echo '<br>\''.$search_con.'\' 로 검색한 결과';
        }
         ?>
      </form>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".cat1">생활/취미</li>
        <li data-filter=".cat2">온라인 게임</li>
        <li data-filter=".cat3">스포츠/레저</li>
        <li data-filter=".cat4">외국어</li>
        <li data-filter=".cat5">음악</li>
        <li data-filter=".cat6">친목/모임</li>
        <li data-filter=".cat7">패션/미용</li>
        <li data-filter=".cat8">교육</li>
        <li data-filter=".cat11">연예인</li>
        <li data-filter=".cat9">스터디</li>
      </ul>



      <div class="filters-content">
        <div class="row grid">


          <div class="cat1">
          <?php
          // room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

            $sql = query("select * from room2 where category = '생활/취미'");

              while($room = $sql->fetch_array())
              {
                //title변수에 DB에서 가져온 title을 선택
                $title=$room["title"];
                $content=$room["content"];
                $imgpath=$room["imgpath"];
                $category=$room["category"];


          ?>
          <div class="col-sm-6 col-lg-4 all cat1">

            <div class="box">
              <div>

                <div class="img-box">
                  <img src="<?=$imgpath;?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
                  </h5>
                  <p>
                    <?=$content;?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>


      <div class="cat2">
      <?php
      // room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

        $sql = query("select * from room2 where category = '온라인 게임'");

          while($room = $sql->fetch_array())
          {
            //title변수에 DB에서 가져온 title을 선택
            $title=$room["title"];
            $content=$room["content"];
            $imgpath=$room["imgpath"];
            $category=$room["category"];


      ?>
      <div class="col-sm-6 col-lg-4 all cat2">

        <div class="box">
          <div>

            <div class="img-box">
              <img src="<?=$imgpath;?>" alt="">
            </div>
            <div class="detail-box">
              <h5>
                <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
              </h5>
              <p>
                <?=$content;?>
              </p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="cat3">
  <?php
  // room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

    $sql = query("select * from room2 where category = '스포츠/레저'");

      while($room = $sql->fetch_array())
      {
        //title변수에 DB에서 가져온 title을 선택
        $title=$room["title"];
        $content=$room["content"];
        $imgpath=$room["imgpath"];
        $category=$room["category"];


  ?>
  <div class="col-sm-6 col-lg-4 all cat3">

    <div class="box">
      <div>

        <div class="img-box">
          <img src="<?=$imgpath;?>" alt="">
        </div>
        <div class="detail-box">
          <h5>
            <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
          </h5>
          <p>
            <?=$content;?>
          </p>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<div class="cat4">
<?php
// room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

  $sql = query("select * from room2 where category = '외국어'");

    while($room = $sql->fetch_array())
    {
      //title변수에 DB에서 가져온 title을 선택
      $title=$room["title"];
      $content=$room["content"];
      $imgpath=$room["imgpath"];
      $category=$room["category"];


?>
<div class="col-sm-6 col-lg-4 all cat4">

  <div class="box">
    <div>

      <div class="img-box">
        <img src="<?=$imgpath;?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
        </h5>
        <p>
          <?=$content;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<div class="cat5">
<?php
// room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

  $sql = query("select * from room2 where category = '음악'");

    while($room = $sql->fetch_array())
    {
      //title변수에 DB에서 가져온 title을 선택
      $title=$room["title"];
      $content=$room["content"];
      $imgpath=$room["imgpath"];
      $category=$room["category"];


?>
<div class="col-sm-6 col-lg-4 all cat5">

  <div class="box">
    <div>

      <div class="img-box">
        <img src="<?=$imgpath;?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
        </h5>
        <p>
          <?=$content;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<div class="cat6">
<?php
// room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

  $sql = query("select * from room2 where category = '친목/모임'");

    while($room = $sql->fetch_array())
    {
      //title변수에 DB에서 가져온 title을 선택
      $title=$room["title"];
      $content=$room["content"];
      $imgpath=$room["imgpath"];
      $category=$room["category"];


?>
<div class="col-sm-6 col-lg-4 all cat6">

  <div class="box">
    <div>

      <div class="img-box">
        <img src="<?=$imgpath;?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
        </h5>
        <p>
          <?=$content;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<div class="cat7">
<?php
// room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

  $sql = query("select * from room2 where category = '패션/미용'");

    while($room = $sql->fetch_array())
    {
      //title변수에 DB에서 가져온 title을 선택
      $title=$room["title"];
      $content=$room["content"];
      $imgpath=$room["imgpath"];
      $category=$room["category"];


?>
<div class="col-sm-6 col-lg-4 all cat7">

  <div class="box">
    <div>

      <div class="img-box">
        <img src="<?=$imgpath;?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
        </h5>
        <p>
          <?=$content;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<div class="cat8">
<?php
// room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

  $sql = query("select * from room2 where category = '교육'");

    while($room = $sql->fetch_array())
    {
      //title변수에 DB에서 가져온 title을 선택
      $title=$room["title"];
      $content=$room["content"];
      $imgpath=$room["imgpath"];
      $category=$room["category"];


?>
<div class="col-sm-6 col-lg-4 all cat8">

  <div class="box">
    <div>

      <div class="img-box">
        <img src="<?=$imgpath;?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
        </h5>
        <p>
          <?=$content;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<div class="cat9">
<?php
// room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

  $sql = query("select * from room2 where category = '스터디'");

    while($room = $sql->fetch_array())
    {
      //title변수에 DB에서 가져온 title을 선택
      $title=$room["title"];
      $content=$room["content"];
      $imgpath=$room["imgpath"];
      $category=$room["category"];


?>
<div class="col-sm-6 col-lg-4 all cat9">

  <div class="box">
    <div>

      <div class="img-box">
        <img src="<?=$imgpath;?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
        </h5>
        <p>
          <?=$content;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<div class="cat11">
<?php
// room테이블에서 idx를 기준으로 내림차순해서 10개까지 표시

  $sql = query("select * from room2 where category = '연예인'");

    while($room = $sql->fetch_array())
    {
      //title변수에 DB에서 가져온 title을 선택
      $title=$room["title"];
      $content=$room["content"];
      $imgpath=$room["imgpath"];
      $category=$room["category"];


?>
<div class="col-sm-6 col-lg-4 all cat11">

  <div class="box">
    <div>

      <div class="img-box">
        <img src="<?=$imgpath;?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <a href="https://jitsimain-sw1.com/<?=$title;?>"><?=$title;?></a>
        </h5>
        <p>
          <?=$content;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>






        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->

  <section id="mrcl_event_info" class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/event.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2 style="font-style: italic;">
               미라클 스터디룸✨
              </h2>
            </div>
            <p>
            혹시 요새 유행 중인 '미라클 모닝'이라고 들어보셨나요?<br>
이른 아침 일어나 자기계발을 하는 것인데요.🌞<br>
이번 이벤트를 통해 아침 시간을 활용하여 학우들과 함께 <br>공부해 보는 건 어떨까요?✍️✍️✍️<br>
이벤트 기간인 🌟12월 10일(금)~12일(일)🌟까지 총 3일 모두 <br>참여해 주시는 분 중 우수 참여자분들을 선정하여
🎁상품🎁도 <br>제공할 예정이니, 많은 참여 부탁드립니다!
            </p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScpodR6EN488MQXopZu90dIY74-h8nPtVZTkzrsEDdFLdBgWg/viewform">
              Enter
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->




  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  @gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Software Design Project
            </a>
            <p>
              team 1 & team 5            </p>

          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
           every time
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span>
          <a href=""></a>
          &copy; <span id="displayYear"></span>
          <a href="https://themewagon.com/" target="_blank"></a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>
<style>
  .search {
    width: 25%;
    display: flex;
    flex-direction: row;
    align-items: stretch;
  }

  input.searchTerm {
    outline: 0;
    background: #ffbe33aa;
    border: 0;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
  }

  .searchTerm:focus{
    color:black;
  }

  .searchButton {
    outline: 0;
    border: 0;
    background-color: #ffbe33aa;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
  }
</style>

</html>

