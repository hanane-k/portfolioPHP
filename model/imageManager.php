<?php
// fonction qui ajoute une image
function addImage($chemin, $nomImg, $db) {
    $req = $db->prepare("INSERT INTO image (chemin, nomImg) VALUES (?, ?)");
    $req->execute([$chemin, $nomImg]);
}

// fonction qui reccupere le dernier id de l'image
function getLastIDimg($db) {
    $req = $db->query("SELECT LAST_INSERT_ID() FROM image");
    $result = $req->fetch(PDO::FETCH_ASSOC);
    return $result; 
}
?>