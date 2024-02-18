<?php 
    require_once('databaseconnect.php');
    ob_start();
?>

    <div class="d-flex flex-column align-items-center m-5">
    <h1 class="text-success">Bienvenue sur le site Gaulois</h1>


    </div>
    

<?php
        
        $title = "Index";
        $navBar1 = "text-success p-3";
        $navBar2 = "text-bg-success p-3 bg-success";
        $navBar3 = "text-success p-3";
        $content = ob_get_clean();

        require_once "template.php"; ?>