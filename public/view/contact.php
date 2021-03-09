<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&display=swap" rel="stylesheet">
    <!-- MY CSS -->
    <link rel="stylesheet" href="public/css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
    <?php require_once "public/parts/nav.php"; ?>

</head>
<body>
    <h1>Contact me</h1>
    <br>
</header>
<section class="container">

    <form method="post" action="">

        <div class="form-group form-row">
            
            <label for="votreEmail" class="col-3">Your mail</label>
            <input type="email" name="mail" class="form-control col-9" id="votreEmail" aria-describedby="emailHelp"
                placeholder="Enter your e-mail" required>
                
                <?=$errorAddress?>
                <?=$mailPattern?>

        </div>
        <div class="form-group form-row">
            <label for="votreNom" class="col-3">Your name</label>
            <input type="text" name="name" class="form-control col-9" id="votreNom" placeholder="Enter your name"
                required>

                <?=$errorSender?>
                <?=$senderPattern?>
                <?=$nameLength?>
                
        </div>
        <div class="form-group form-row">
            <label for="votreSujet" class="col-3">Subject</label>
            <input type="text" name="subject" class="form-control col-9" id="votreSujet" placeholder="Subject" required>

            <?=$errorSubject?>
            <?=$subjectPattern?>
            <?=$subjectLength?>

        </div>
        <div class="form-group form-row">
            <label for="votreMessage" class="col-3">Enter your message</label>
            <textarea class="form-control col-9" name="message" placeholder="Entrez votre message" required>
            
            <?=$errorContent?>
            <?=$contentPattern?>

            </textarea>
        </div>
        <button type="submit"name="submit" value="Submit" class="btn btn-primary mt-5">Envoyer</button>
    
    </form>
</section>

<?php require_once "public/parts/footer.php"; ?>
        <!-- <script type="text/javascript" src="public/js/navbar.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>