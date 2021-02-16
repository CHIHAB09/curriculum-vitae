   //traduction texte page projet
document.getElementById("containertraduc").addEventListener("click", () => {

    //Traduction de l'EN vers FR
    if(document.querySelector("#containertraduc").textContent == "FR"){
    document.querySelector("#containertraduc").textContent="EN"
    document.querySelector("#titreProjet h1").textContent="Présentation"
    document.querySelector("#projet1 p").innerHTML=`Ici vous allez découvrir mon curriculum vitae et mes projets réalisés durant mon apprentissage au CF2M 
                                                    D’autre projet se rajouteront à mes projets bien évidement et d’autre mini projet.
                                                    En attendant voici ce que je peux vous proposer…`
    document.querySelector("#projet2 p").innerHTML=` <ul>
                                                        <li>B</li>
                                                        <li>I</li>
                                                        <li>E</li>
                                                        <li>N</li>
                                                        <li>V</li>
                                                        <li>E</li>
                                                        <li>N</li>
                                                        <li>U</li>
                                                        <li>E</li>
                                                    </ul>`


       //Traduction de l'FR vers EN

    }else{
    document.querySelector("#containertraduc").textContent="FR"
    document.querySelector("#titreProjet h1").innerHTML=`Presentation`
    document.querySelector("#projet1 p").innerHTML=`Here you will discover my curriculum vitae and my projects carried out during my apprenticeship at CF2M
                                                    Other projects will be added to my projects of course and other mini projects.
                                                    In the meantime, here is what I can offer you ...
                                                    `
    document.querySelector("#projet2 p").innerHTML=` <ul>
                                                        <li>W</li>
                                                        <li>E</li>
                                                        <li>L</li>
                                                        <li>C</li>
                                                        <li>O</li>
                                                        <li>M</li>
                                                        <li>E</li>
                                                    </ul>`
    }

})