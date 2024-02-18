<?php 
    require_once('databaseconnect.php');
    ob_start();
?>

<div class="d-flex flex-column align-items-center m-5">
    <h1 class="text-success">Personnages</h1>

<?php 

     echo "<table class='table table-striped w-50 text-center align-middle'>",
     "<thead>",
         "<tr>",
             "<th scope='col'> Nom </th>",
             "<th scope='col'> Lieu </th>",
             "<th scope='col'> Specialité </th>",
         "</tr>",
     "</thead>",
     "<tbody>";

$infosPersonnages = 'SELECT
nom_personnage, 
specialite.nom_specialite, 
lieu.nom_lieu
FROM personnage
INNER JOIN specialite ON personnage.id_specialite = specialite.id_specialite
INNER JOIN lieu ON personnage.id_lieu = lieu.id_lieu   
ORDER BY specialite.nom_specialite';

$recipesPersonnages = $mysqlClient->prepare($infosPersonnages);
$recipesPersonnages->execute();
$personnages = $recipesPersonnages->fetchAll();

foreach($personnages as $personnage) {
    echo "<tr>",
            "<td score='row'>" . $personnage['nom_personnage'] . "</td>",
            "<td score='row'>" . $personnage['nom_lieu'] . "</td>",
            "<td score='row'>" . $personnage['nom_specialite'] . "</td>";
}
?>

</div>

<?php
        
        $title = "Personnages";
        $navBar1 = "text-bg-success p-3 bg-success";
        $navBar2 = "text-success p-3";
        $navBar3 = "text-success p-3";
        $content = ob_get_clean();

        require_once "template.php"; ?>