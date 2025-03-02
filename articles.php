<?php

$articles = [
    [
        "id"=> 1,
        "title" => "Le Billard",
        "content" => "le billard blablabla",
        "image" => ".png"
    ],    [
        "id"=> 2,
        "title" => "Les enfants",
        "content" => "les enfants blablabla",
        "image" => ".png"
    ],    [
        "id"=> 3,
        "title" => "Les mains",
        "content" => "les mains blablabla",
        "image" => ".png"
    ],
]
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container row">
    <?php foreach ($articles as $article) { ?>
        <div class="card" style="width: 18rem;">
            <img src="images/<?= $article['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $article['title'] ?></h5>
                <p class="card-text"><?= $article['content'] ?></p>
                <a href="unArticle.php?id=<?= $article['id'] ?>" class="btn btn-primary">Lire l'article</a>
            </div>
        </div>
    <?php } ?>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>