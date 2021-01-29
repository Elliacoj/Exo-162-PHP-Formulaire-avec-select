<?php


if(isset($_GET['name'], $_GET['prenom'])) {
    $name = strip_tags(trim($_GET['name']));
    $prenom = strip_tags(trim($_GET['prenom']));

    echo $name . " " . $prenom;
}

if(isset($_POST['name'], $_POST['prenom'], $_POST['statut'], $_POST['fichier'])) {
    $name = strip_tags(trim($_POST['name']));
    $prenom = strip_tags(trim($_POST['prenom']));
    $file = strip_tags(trim($_POST['fichier']));
    $info = pathinfo($_POST['fichier']);

    echo $_POST['statut'] . " " . $name . " " . $prenom ."<br>";
    if($info['extension'] === "pdf") {
        echo $file;
    }

}
elseif(isset($_POST['name'], $_POST['prenom'])) {
    $name = strip_tags(trim($_POST['name']));
    $prenom = strip_tags(trim($_POST['prenom']));

    echo $name . " " . $prenom;
}

