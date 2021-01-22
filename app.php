<?php

function getFilesByEndsWith($endsWith) {

    $fileNames = [];

    $it = new RecursiveDirectoryIterator(".");

    foreach(new RecursiveIteratorIterator($it) as $file) {
        if ( endsWith($file->getFilename(), $endsWith) ) {
            $fileNames[] = $file->getFilename();
        }
    }

    return $fileNames;
}

function getMaxArticleId() {
    static $maxId;

    if ( $maxId !== null ) {
        return $maxId;
    }

    $keys = array_keys($GLOBALS);

    $maxId = 0;

    foreach ( $keys as $key ) {
        if ( startsWith($key, "article") ) {
            $no = intval(str_replace("article", "", $key));

            if ( $no > $maxId ) {
                $maxId = $no;
            }
        }
    }

    return $maxId;
}

function getArticles() {
    static $articles;

    if ( $articles !== null ) {
        return $articles;
    }

    $maxArticleId = getMaxArticleId();

    $articles = [];

    for ( $i = $maxArticleId; $i > 0; $i-- ) {
        $key = "article" . $i;

        $articles[$i] = $GLOBALS[$key];
    }

    return $articles;
}

function getArticleById($id) {
    $articles = getArticles();

    return $articles[$id];
}

function getArticlesByTag($tag) {
    $articles = getArticles();

    $filterdArticles = [];

    foreach ( $articles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $filterdArticles[$article['id']] = $article;
        }
    }

    return $filterdArticles;
}