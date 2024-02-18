<?php 
    require_once('databaseconnect.php');
    ob_start();
?>

<div class="d-flex flex-column align-items-center m-5">
    <h1 class="text-success">Potions + cout</h1>

<?php 

     echo "<table class='table table-striped w-50 text-center align-middle'>",
     "<thead>",
         "<tr>",
             "<th scope='col'> Nom </th>",
             "<th scope='col'> Cout </th>",
         "</tr>",
     "</thead>",
     "<tbody>";

$infosPotions = 'SELECT p.nom_potion, SUM(i.cout_ingredient*c.qte) AS cout_potion
FROM potion p
LEFT JOIN composer c ON c.id_potion = p.id_potion
LEFT JOIN ingredient i ON c.id_ingredient = i.id_ingredient
GROUP BY p.id_potion
ORDER BY cout_potion DESC';

$recipesPotions = $mysqlClient->prepare($infosPotions);
$recipesPotions->execute();
$potions = $recipesPotions->fetchAll();

foreach($potions as $potion) {

    echo "<tr>",
    "<td score='row'>" . $potion['nom_potion'] . "</td>";

    if ($potion['cout_potion'] == null) {
        echo "<td score='row'> 0 </td>";
    } else {
        echo "<td score='row'>" . $potion['cout_potion'] . "</td>"; 
    }
}
?>

</div>

<?php
        
        $title = "Potions";
        $navBar1 = "text-success p-3";
        $navBar2 = "text-success p-3";
        $navBar3 = "text-bg-success p-3 bg-success";
        $content = ob_get_clean();

        require_once "template.php"; ?>