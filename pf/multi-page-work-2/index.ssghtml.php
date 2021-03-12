<?php
$pageTitle = "홈";
$pageCode = "home";
require_once "head.php";
?>
<script>
  // 주소 뒤에 / 를 붙여주는 코드
  // 오직 index.html, index.ssghtml.php 에도 추가해주세요.
  if (location.pathname.indexOf('index.ssghtml.php') !== -1 && location.pathname.indexOf('index.html') !== -1 &&
    location.pathname.substr(-1, 1) != '/') {
    location.replace(location.href + '/');
  }
</script>

<h1>홈</h1>

<?php
require_once "foot.php";
?>