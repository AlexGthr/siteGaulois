<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    <header>

        <figure>
            <img src="img/header.png" width="100%">
        </figure>

        <div class="container">
        <nav class="nav nav-pills nav-fill mt-2">
            <a class="nav-link <?= $navBar1 ?>" aria-current="page" href="personnages.php">Personnages</a>
            <a class="nav-link <?= $navBar2 ?>" aria-current="page" href="index.php">Index</a>
            <a class="nav-link <?= $navBar3 ?>" href="potions.php">Potions</a>
        </nav>

    </header>

    <?= $content ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>