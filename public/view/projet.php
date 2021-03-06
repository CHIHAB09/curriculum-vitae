<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/cv.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <?php require_once "public/parts/nav.php"; ?>

</head>
<body>

        <div class="container" id="titreProjet">
        <h1>My projects</h1>
        <button class="btn" id="containertraduc">FR</button>
        </div>

    <div class="container" id="bigContainer">

        <div class="row">
                
            <div class="col" id="projet1">
            
                    <p>Here is one of the projects created alone in procedural php, js, css and html with an admin connection section (using Mysql database)<br>
                    putting the emphasis on verifications of the admin or public access, with a pagination.<br>
                    Click on the logo below to visit the site ...
                    </p>

                <a href="https://chihab.webdev-cf2m.be/catalogue/public/?pg=Accueil" target="blank">
                    <img class="sneakPanth" src="public/image/panthersneakers-black_2.png">
                </a>

            </div>

            <div class="col" id="projet2">

                    <p>
                    Here is a project carried out with a team using Wordpress and a child
                    theme where we had to realize the footer, header and button scroll up.<br>
                    Click on the logo below to visit the site ...
                    </p>

                <a href="https://marck.ovh/" target="blank">
                    <img class="marck" src="public/image/marck.png">
                </a>

            </div>

        </div> 

    </div>

        <?php
        require_once "public/parts/footer.php"; 
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script type="text/javascript" src="public/js/navbar.js"></script>
        <script type="text/javascript" src="public/js/traductionProjet.js"></script>
</body>
</html>
