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
];



function redirect()
{
    header('Location: articles.php');
    exit();
}


if(empty($_GET['id']) || !ctype_digit($_GET['id']))
{
    redirect();
}

$id = $_GET['id'];
$articleEnCours = null;

foreach($articles as $article)
{
    if($article['id'] == $id)
    {
        $articleEnCours = $article;
    }

}

if(!$articleEnCours){
    redirect();
}




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


<div class="container row">
        <div class="card" style="width: 18rem;">
            <img src="images/<?= $article['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $article['title'] ?></h5>
                <p class="card-text"><?= $article['content'] ?></p>
                <a href="unArticle.php?id=<?= $article['id'] ?>" class="btn btn-primary">Lire l'article</a>
            </div>
            <a href="articles.php" class="btn btn-primary">retour</a>
        </div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
