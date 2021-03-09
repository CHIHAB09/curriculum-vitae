<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/accueil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

</head>
<body>
<?php require_once "public/parts/nav.php"; ?>

    <div class="container mt-5">
   
        <div class="row mb-5" id="bienvenu">
            <ul>
                <li>W</li>
                <li>E</li>
                <li>L</li>
                <li>C</li>
                <li>O</li>
                <li>M</li>
                <li>E</li>
            </ul>

        </div>

        <div class="row mb-5" id="photo">
            <img src="public/image/moi1.jpg" alt="photo">
            <h1 class="titre">Presentation</h1>
        </div>


        <div class="container mb-5" id="contenue">
            <p>Here you will discover my curriculum vitae and my projects carried out during my apprenticeship at CF2M.
            Other projects and mini projects will be added of course. In the meantime,
            here is what I can offer you ... 
            </p>
        </div>

    </div>
        <?php require_once "public/parts/footer.php"; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>