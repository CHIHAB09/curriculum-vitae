   //traduction texte page projet
   document.getElementById("containertraduc").addEventListener("click", () => {

    //Traduction de l'EN vers FR
    if(document.querySelector("#containertraduc").textContent == "FR"){
    document.querySelector("#containertraduc").textContent="EN"
    document.querySelector("#titreProjet h1").textContent="Mes projets"
    document.querySelector("#projet1 p").innerHTML=`Voici un des projets crée seul en php(procédural) js css html avec une connexion( avec base de donner Mysql)
                                                   du coter admin avec des verifications à l'accès admin ou publique,
                                                   avec une pagination.
                                                   Cliquez sur le logo ci-dessous pour visiter le site...`
    document.querySelector("#projet2 p").innerHTML=`Voici ici un projet réalisé en équipe avec Wordpress et un théme enfant ou on a du realiser le footer,
                                                   header et button scroll vers le haut.
                                                   Cliquez sur le logo ci-dessous pour visiter le site...`
   
   
       //Traduction de l'FR vers EN
   
    }else{
       document.querySelector("#containertraduc").textContent="FR"
       document.querySelector("#titreProjet h1").innerHTML=`My projects`
       document.querySelector("#projet1 p").innerHTML=`Here is one of the projects created alone in procedural php, js, css and html with an admin connection section (using Mysql database)<br>
                                                   putting the emphasis on verifications of the admin or public access, with a pagination.<br>
                                                   Click on the logo below to visit the site ...`
       document.querySelector("#projet2 p").innerHTML=`Here is a project carried out with a team using Wordpress and a child
                                                   theme where we had to realize the footer, header and button scroll up.<br>
                                                   Click on the logo below to visit the site ...`
   
       }
   
   })