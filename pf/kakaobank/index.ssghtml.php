<?php
require_once "head.php";
?>
<script>
  // 주소 뒤에 / 를 붙여주는 코드
  // 오직 index.html, index.html 에도 추가해주세요.
  if (location.href.indexOf('index.html') === -1 && location.href.indexOf('index.html') === -1 &&
    location.href.substr(-1, 1) !== '/') {
    location.replace(location.href + '/');
  }
</script>
<h1>안녕</h1>
<?php
require_once "foot.php";
?>