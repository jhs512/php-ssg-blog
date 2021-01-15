<?php
require_once "data.php";
require_once "head.php";
?>
<link rel="stylesheet" href="css/index.css">
<script src="js/index.js" defer></script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="fas fa-fire"></i>
    </span>
    <span>
      LATEST ARTICLES
    </span>
  </h1>
</section>

<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title"><a href="article_detail_2.ssghtml.php"><?=$article2["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article2["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article2["writerName"]?></span>
            <span><?=$article2["writerAvatar"]?></span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article2['body']?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>

        <li>
          <h1 class="article-list-box__title"><a href="article_detail_1.ssghtml.php"><?=$article1["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article1["regDate"]?></div>

          <div class="article-list-box__writer">
            <span><?=$article1["writerName"]?></span>
            <span><?=$article1["writerAvatar"]?></span>
          </div>

          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article1["body"]?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php
require_once "foot.php";
?>