<?php
// fonction qui ajoute une biographie
function addBiographie($biographie, $db) {
    $req = $db->prepare("INSERT INTO biographie (nom, description) VALUES (?, ?)");
    $req->execute([$biographie["nom"], $biographie["description"]]);
}

// fonction qui recupère les biographie
function getBiographie($db) {
    $req = $db->query("SELECT * FROM biographie");
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// fonction qui supprime une biographie
function deleteBiographie($id, $db) {
    $req = $db->prepare("DELETE FROM biographie WHERE IDbiog= ?");
    $req->execute([$id]);
}

// fonction qui recupère une seule biographie
function getOneBiographie($id, $db) {
    $req = $db->prepare("SELECT * FROM biographie WHERE IDbiog = ?");
    $req->execute([$id]);
    $result = $req->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// fonction qui modifie une biographie
function updateBiographie($biographie, $db) {
    $req = $db->prepare("UPDATE biographie SET nom = :nom, description = :description WHERE IDbiog = :IDbiog");
    $req->execute([
        "nom" => $biographie["nom"],
        "description" => $biographie['description'],
        "IDbiog" => $biographie['IDbiog']
        ]);
    return $req;
}
?>