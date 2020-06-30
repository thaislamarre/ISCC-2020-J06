<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="vitrine.css"/>
        <title>T-shirt</Title>
    </head>

<body>
<?php
    function update_dispo($quantite) {
        if ($quantite>0)
        {
            return true;
        }
        else if ($quantite==0)
        {
            return false ;
        }
         }
    function restockage($quantite, $nb_ajout){
            echo "<p>$nb_ajout produits ont été ajoutés au stock</p>";
            return $quantite + $nb_ajout;
            }
    function achat($quantite, $nb_achat){
            echo "<p>$nb_achat produits ont été ajoutés acheté</p>";
            return $quantite - $nb_achat;
            }
?>
</body>            