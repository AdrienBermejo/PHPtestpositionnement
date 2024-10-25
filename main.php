<?php

function calculerSousTotal($produit){
    $sous_total = $produit['prix']*$produit['quantite'];
    echo "$sous_total";
    echo "Le sous-total pour le " . $produit['nom'] . " est de " . $sous_total . "€."; 
    return $sous_total;
}

function main(){
    $banane = ["nom" => "Banane", "prix" => 2, "quantite" => 8];
    $poire = ["nom" => "Poire", "prix" => 12, "quantite" => 5];
    $pomme = ["nom" => "Pomme", "prix" => 1, "quantite" => 10];

    $somme = calculerSousTotal($banane) + calculerSousTotal($poire) + calculerSousTotal($pomme);
    if ($somme>50){
        $reduction = ($somme*(10/100));
        $total = $somme - $reduction;
        echo "Le total de réduction sur votre panier est de ".$reduction."€. ";
    }  

}


?>