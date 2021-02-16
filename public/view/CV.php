<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&display=swap" rel="stylesheet">
    <!--css personnel-->
    <link rel="stylesheet" href="public/css/cv.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    


    <?php require_once "public/parts/nav.php"; ?>

</head>
<body>
    <div id="title">
        <h1>Web developer <br> Junior </h1>
        <button class="btn" id="traduction">FR</button>
    </div>
    
    
    <div id="container">
        <div class="info">
            <div id="profile">
                <h1>Profile</h1>
                <p>Hello,<br>
                I am a young motivated web developer keen and passionate about learning programming. I am a self-taught person, when stuck on problem, I like to do my own 
                research to find the solution. Working in a team (Trello, Notion, Git, ...) or alone are both a good working and stimulating fields, I quickly adapt and I am always smiling, because I love what I do. 
                JavaScript, HTML, PHP. I also know how to use CMS such as Wordpress and frameworks such as Boostrap. These languages ​​are those that I've already worked with, 
                but of course I sure like to learn even more.</p>
            </div>
            <div id="contact">
                <h1>Contact</h1>

                <p>
                Chihab CHERIFI<br>               
                Belgian<br>
                Born April 04, 1991 in Etterbeek<br>
                Vehicle license B<br>
                BD Edmond Machtens,166/9<br>
                1080 Molenbeek Saint Jean<br>
                📱0478/16.62.07<br>
                📧cherifi.chihab@live.be<br>
                </p>

            </div>
            <div id="skills">
                <h1>Skills</h1>
                <div>
                    <img src="public/image/php1.png">
                    <img src="public/image/js.png">
                    <img src="public/image/boostrap.png">
                    <img src="public/image/workbenc.png">
                </div>
                <div>
                    <img src="public/image/mysql.png">
                    <img src="public/image/html5.png">
                    <img src="public/image/css.png">
                    <img src="public/image/wordpress.png">
                </div>
            </div>
        </div>
        <hr>
        <div class="info">
            <div id="experience">
                <h1>Experience</h1>
                <ul>
                    <li>2010 to 2012 interim(Caterer J&M catering)</li>
                    <li>2013 interim(GLS logistics depot)</li>
                    <li>2014 to July 2019 Security guard</li>
                    <li>2020 Until now training of back-end web developer in CF2M</li>
                </ul>
            </div>
            <div id="education">
                <h1>Education</h1>
                <ul>
                    <li>2012 High school diploma certificate(CESS)</li>
                    <li>2012 to 2013 one year as a physical education teacher</li>
                    <li>2013 training as a security guard with G4S</li>
                    <li>2020 training as a back-end web developer at CF2M</li>
                </ul>
            </div>
            <div id="language">
                <h1>Language</h1>
                <ul id="listlanguage">
                    <li>French</li><progress id="fileProgress" value="100" max="100"></progress>
                    <li>Dutch</li><progress id="fileProgress" value="50" max="100"></progress>
                    <li>English</li><progress id="fileProgress" value="60" max="100"></progress>
                    <li>Arabic</li><progress id="fileProgress" value="80" max="100"></progress>
                </ul>
            </div>
            <div id="hobby">
                <h1>Hobby</h1>
                <p>
                    <img src="public/image/ballon.png">
                    <img src="public/image/coder.svg">
                    <img src="public/image/voyage.png">
                    <img src="public/image/nager.png">
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="public/js/navbar.js"></script>
    <script type="text/javascript" src="public/js/traductionCv.js"></script>
</body>
<!-- FOOTER -->
<footer>
<?php 
    include "public/parts/footer.php"
    ?>
</footer>
</html>