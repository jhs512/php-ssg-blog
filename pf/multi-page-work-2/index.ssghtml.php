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

<style>
  .section-1 {
    height:100vh;
  }
</style>

<section class="section-1" style="background-image:url(https://i.picsum.photos/id/237/1920/1200.jpg?hmac=0hGBRCcdnSj1_Ii-eHDkkD9bslWK3xXPME2Hm2VuKiA);">

</section>

<section class="section-2 h-96 bg-red-500"></section>
<section class="section-2 h-96 bg-green-500"></section>

<?php
require_once "foot.php";
?>