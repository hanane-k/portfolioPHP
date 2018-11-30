<?php
//fonction qui ajoute un projet
function addProject($project, $db) {
    $req = $db->prepare("INSERT INTO projet (nom, IDimage, description) VALUES (:nom, :IDimage, :description)");
    $req->execute([
        "nom" => $project["nom"],
        "IDimage" => $project["IDimage"],
        "description" => $project["description"]
    ]);
}

//fonction qui reccupere les projets
function getProject($db) {
    $req = $db->query("SELECT * FROM projet");
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>