<?php
$siteTitle = "디자이너 홍길동!!!!";

// 게시물 2
$article2 = [];
$article2["title"] = "자바스크립트 태그 2";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "홍길동";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["body"] = <<<EOT
# 개요
- script 태그를 사용해야 한다.
- src 속성으로 외부 스크립트를 불러올 수 있다.
- defer 속성으로 html 엘리먼트 로딩까지 실행을 유보시킬 수 있다.
- 자식 컨텐츠로 자바스크립트를 넣어서 사용할 수 있다.
  
# 예시 - 자식 컨텐츠로 자바스크립트를 넣어서 사용
```html
<t-script>
var a = 10;
</t-script>
<div class="a"></div>
```
EOT;

// 게시물 1
$article1 = [];
$article1["title"] = "자바스크립트 태그";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "홍길동";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["body"] = <<<EOT
# 태그
```codepen
https://codepen.io/jangka44/embed/NWROGrL?height=265&theme-id=light&default-tab=html,result&editable=true
```
  
# 콘솔
```codepen
https://codepen.io/jangka44/embed/zYKmvoG?height=300&theme-id=light&default-tab=js,result&editable=true
```

# 참고영상
```youtube
CmgCsCkjNWo
```
EOT;

if ( isset($articleId) ) {
    $articleVarName = "article" . $articleId;
    $selectedArticle = $$articleVarName;
}