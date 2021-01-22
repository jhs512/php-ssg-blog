<?php
$articles = getArticlesByTag($tag);
?>

<section class="section-title con-min-width">
    <h1 class="con">
        <span>
            <i class="fas fa-list"></i>
        </span>
        <span>
            `<?=$tag?>` LIST
        </span>
    </h1>
</section>

<section class="section-article-list padding-0-10 con-min-width">
    <div class="con">
        <div class="article-list">
            <ul>
                <?php foreach ( $articles as $article ) { ?>
                <li>
                    <h1><a href="article_detail_<?=$article["id"]?>.ssghtml.php"><?=$article['title']?></a></h1>
                    <a href="article_detail_<?=$article["id"]?>.ssghtml.php" class="block article-list__reg-date">
                        <span>
                            <i class="far fa-calendar-alt"></i>
                        </span>
                        <span>
                            <?=$article["regDate"]?>
                        </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>