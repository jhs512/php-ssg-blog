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
    <?php
    $headCode = "head";
    ?>
    <?php require_once "part.topBar.php"; ?>

    <main>