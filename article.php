<?php
    require_once("func/functions.php");

    $articleId = $_GET['id'] ?? null;

    if (null === $articleId) { 
        http_response_code(400);
        exit();
    }

    $articleId = (int)$articleId;

    $article = getArticleData($articleId); 

    if (null === $article) { 
        http_response_code(404);
        exit();
    }

    $page_title = "{$article['title']}";
    $curPage = "articlePage";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("./includes/head.php"); ?>
</head>

<body>
    <?php include("./includes/header.php")?>

    <main class="container">
        <article class="blog-post">
            <header class="blog-post-header">
                <p class="blog-category"><?= $article['category']; ?></p>
                <h1 class="blog-post-heading"><?= $article['title']; ?></h1>
                <div class="blog-meta">
                <?= $article['author']; ?> <time datetime="<?= $article['created']; ?>"><?= $article['created']; ?></time>
                </div>
                <img src="src/img/<?= $article['image']; ?>" alt="article_img">
            </header>
            <div class="blog-post-description">
                <?= $article['content']; ?>
            </div>
        </article>
    </main>

    <?php include("./includes/footer.php") ?>
</body>

</html>