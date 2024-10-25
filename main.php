<?php

function calculerSousTotal($produit){
    $sous_total = $produit['prix']*$produit['quantite'];
    echo "$sous_total";
    echo "Le sous-total pour le " . $produit['nom'] . " est de " . $sous_total . "€."; 
    return $sous_total;
}

function main($banane,$poire,$pomme){
    $prixBanane = calculerSousTotal($banane);
    $prixPoire = calculerSousTotal($poire);
    $prixPomme = calculerSousTotal($pomme);
    $somme = $prixBanane + $prixPoire + $prixPomme;
    if ($somme>50){
        $reduction = ($somme*(10/100));
        $total = $somme - $reduction;
        echo "Le total de réduction sur votre panier est de ".$reduction."€. </br>";
        echo "Le total de votre commande est de ".$total."€. ";
    }  
    else{
        echo "le total de votre commande est de ".$somme."€. ";
    }
    return 0;
}

$banane = ["nom" => "Banane", "prix" => 2, "quantite" => 8];
$poire = ["nom" => "Poire", "prix" => 12, "quantite" => 5];
$pomme = ["nom" => "Pomme", "prix" => 1, "quantite" => 10];
main($banane,$poire,$pomme);
