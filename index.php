<?php 
  include("./php/dbconn.php");
  $mb_id = $_SESSION['ss_mb_id'];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대한항공-모바일웹(앱)</title>
  <!-- CSS초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">
  <!-- 공통서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css">
  <!-- 메인서식 -->
  <link href="./css/main.css" rel="stylesheet" type="text/css">
  <!-- swiper서식 -->
  <link href="./css/swiper.css" rel="stylesheet" type="text/css">
</head>
<body>
  <!-- 상단헤더영역 -->
  <header>
    <h1>
      <a href="index.html" title="상단로고">
        <img src="./images/txt_logo.png" alt="상단로고">
      </a>
    </h1>

    <!-- 토글버튼 클릭시 nav나오게 하기 
      1. css로 체크박스에 체크하면 nav나오게하기
      2. javascript, jquery = span태그(햄버거 아이콘) 클릭시 nav나오게하기 
    -->

    <?php 
      if(isset($mb_id)){
        echo $mb_id . '님';
      }else{
        echo '<a href="login.php" title="로그인" class="login_btn">로그인하기</a>';
      }
    ?>
    
  </header>

  <!-- 메인콘텐츠영역 -->
  <main></main>

  <!-- 푸터영역 -->
  <footer></footer>

  <!-- 스와이퍼 스크립트 -->
  <script src="./script/swiper.js"></script>
</body>
</html>