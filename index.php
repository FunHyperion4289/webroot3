<?php
    require_once("func/functions.php");
    $page_title = 'Home';
    $curPage = "home";
    $articles = getArticles();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("includes/head.php"); ?>
</head>

<body>
    <?php require("includes/header.php") ?>

    <main class="container">
         
        <?php foreach ($articles as $article) { ?>
            <?php require 'includes/articles.php'; ?>
        <?php } ?>
        
    </main>


    <?php include("includes/footer.php"); ?>
</body>
</html>