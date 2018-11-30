<?php
//fonction qui ajoute un projet
function addProject($project, $IDimage, $db) {
    $req = $db->prepare("INSERT INTO projets (nom, description, IDimage) VALUES (?, ?, ?)");
    $req->execute([$project["nom"], $project["description"], $IDimage]);
    $req->CloseCursor();
}

// fonction qui reccupere les projets
function getProject($db) {
    $req = $db->query("SELECT * FROM projets");
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->CloseCursor();
    return $result;
}

// fonction qui reccupere un seul projet
function getOneProject($id, $db) {
    $req = $db->prepare("SELECT * FROM projets WHERE IDprojet = ?");
    $req->execute([$id]);
    $result = $req->fetch(PDO:: FETCH_ASSOC);
    $req->CloseCursor();
    return $result;
}

//fonction qui supprime un projet
function deleteProject($id, $db) {
    $req = $db->prepare("DELETE FROM projets WHERE IDprojet= ?");
    $result = $req->execute([$id]);
    $req->CloseCursor();
    return $result;
}

?>