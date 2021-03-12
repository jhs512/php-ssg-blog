<header class="top-bar con-min-width">
  <a href="index.ssghtml.php">홈</a>
  <a href="sub1.ssghtml.php">서브1</a>
  <a href="sub2.ssghtml.php">서브2</a>
  <a href="sub3.ssghtml.php">서브3</a>
  <?php if ( $pageCode == "home" || $pageCode == "sub2" ) { ?>
    <input type="text" placeholder="검색어를 입력해주세요.">
  <?php } ?>
</header>