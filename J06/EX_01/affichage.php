<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="vitrine.css"/>
        <title>T-shirt</Title>
    </head>
<body>  
<?php
    function afficher_titre($nomproduit) {
        $phrase="Fiche produit: $nomproduit";
        echo "<h1>$phrase</h1>";
    }
    function afficher_description($couleur, $prix)
    {
       $phrase1="Couleur: $couleur Prix: $prix";
       echo "<p>$phrase1</p>";
    }
function afficher_produit($nom_produit, $couleur, $prix, $disponible) {
    if ($disponible==true) {
        afficher_titre($nomproduit);
        afficher_description($couleur, $prix);
    }
    elseif ($disponible==false) {
    $hi="Le produit $nomproduit n est malheureusement plus disponible.";
    echo "<p> $hi </p>";
    }
}
?>
</body>
</html>