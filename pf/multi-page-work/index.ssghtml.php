<?php
$title = "HOME";
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

<?php require "part.section_bn_1.php" ?>

<section class="section-1 section con-min-width">
  <div class="con">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione, illum? Perferendis eveniet autem rerum, quisquam
    libero unde animi ducimus exercitationem, odio facilis et dolorem. Fuga eum deleniti debitis doloremque veritatis.
    Doloribus, odio quas commodi porro id dolor alias aperiam dolorum harum magnam assumenda eius autem accusamus
    voluptatibus accusantium corrupti aliquid ipsa sunt, architecto voluptas. Error assumenda accusamus totam magni
    sunt!
  </div>
</section>

<?php
require_once "foot.php";
?>