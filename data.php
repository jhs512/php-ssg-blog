<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너 홍길동!!!!";

// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "자바스크립트 태그 4";
$article4["regDate"] = "2020-01-18 17:28:15";
$article4["writerName"] = "홍길동";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["tags"] = ["js", "css"];
$article4["body"] = <<<'EOT'
# 개요
- 안녕하세요.
EOT;

// 게시물 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "자바스크립트 태그 3";
$article3["regDate"] = "2020-01-12 12:12:15";
$article3["writerName"] = "홍길동";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["js", "html"];
$article3["body"] = <<<'EOT'
# 개요
- php도 좋다.
EOT;

// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "자바스크립트 태그 2";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "홍길동";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"] = ["js"];
$article2["body"] = <<<'EOT'
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
$article1["id"] = 1;
$article1["title"] = "자바스크립트 태그";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "홍길동";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["tags"] = ["js"];
$article1["body"] = <<<'EOT'
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

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}