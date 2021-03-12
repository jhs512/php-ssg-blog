<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "inHead.php"; ?>

  <style>
    .top-bar {
      position:absolute;
      top:0;
      left:0;
      width:100%;
      color:white;
    }

    .top-bar.fly {
      position:fixed;
      background-color:white;
      color:black;
    }
  </style>

  <script>
    function TopBar__init() {
      const $topBar = $('.top-bar');

      $window.scroll(function() {
        if ( $window.scrollTop() >= 100 ) {
          $topBar.addClass('fly');
        }
        else {
          $topBar.removeClass('fly');
        }
      });
    }

    $(function() {
      TopBar__init();
    });
  </script>
</head>

<body>
  <div class="site-wrap">
    <header class="top-bar con-min-width">
      <a href="index.ssghtml.php">홈</a>
      <a href="sub1.ssghtml.php">서브1</a>
      <a href="sub2.ssghtml.php">서브2</a>
    </header>

    <main>