<?php

function redirect($message, $page = null)
{

    $url = "index.php";
    if ($page) {
        $url = "articles.php";
    }
    header("Location: $url?message=$message");
    exit;
}

// motDePasseDeLuc4, patate, choucroute, surf
$users = [
    "luc" => "53f8a9f698d7d2ea9c8a3a6c8d5ab698",
    "michel" => "945e9f0b4e381b13aa70b94b89a28709",
    "eglantine" => "4fa9239cbfe7d76a31bb46471ce6a976",
    "patricia" => "353c8773694fbf1251dec54d98b614a1"
];



if (empty($_POST['userName']) || empty($_POST['password'])) {
    redirect("formulaire  mal rempli");
}

//if (empty($_POST['userInscription']) || empty($_POST['passwordInscription'])) {
 //   redirect("formulaire  mal rempli");
//}

$username = $_POST["userName"];
$unEcryptedPassword = $_POST["password"];
$hashedPassword = md5($unEcryptedPassword);


//$userInscription = $_POST["usernameInscription"];
//$passwordInscription = $_POST["passwordInscription"];
//$hashedPasswordInscription = md5($passwordInscription);

//$users[$userInscription] = $hashedPasswordInscription;

//if (!isset($users[$userInscription])) {
  //  redirect("formulaire  mal rempli");
//}


//utilisateur inconnu
if (!isset($users[$username])) {
    redirect("utilisateur inconnu");
}


if ($users[$username] != $hashedPassword) {
    redirect("mauvais mot de passe");
}

redirect("bienvenue, bien connecté", "articles.php");