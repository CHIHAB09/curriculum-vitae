
    document.getElementById("traduction").addEventListener("click", () => {

        //Traduction de l'EN vers FR
    
        if(document.querySelector("#traduction").textContent == "FR"){
            document.querySelector("#traduction").textContent="EN"
            document.querySelector("#title h1").innerHTML=`Developpeur web <br> Junior`
            document.querySelector("#profile h1").innerHTML=`Profil`
            document.querySelector("#profile p").innerHTML=`Bonjour,<br>
                                                        Je suis un jeune développeur web en formation qui est passionné par l'apprentissage
                                                        de la programmation.
                                                        Je suis quelqu'un d'autodidacte, j'aime les défis et le surpassement de soi. Je suis
                                                        capable de travailler en équipe (Trello,Notion,Git,...) ou seul.
                                                        Je m'adapte vite et je suis toujours souriant, car j'aime ce que je fais. J'ai appris à
                                                        travailler avec JavaScript, HTML, PHP, CSS ou encore les CMS et les framwork tel que
                                                        Boostrap.
                                                        Ma formation n'est pas encore terminé et j'ai hâte d'en apprendre encore plus.`
            document.querySelector("#skills h1").innerHTML=`Compétences`
            document.querySelector("#education h1").innerHTML=`Éducation`
            document.querySelector("#experience h1").innerHTML=`Expérience`
            document.querySelector("#hobby h1").innerHTML=`Loisir`
            document.querySelector("#language h1").innerHTML=`Langues`
            document.querySelector("#language ul").innerHTML= `<li>Français</li><progress id="fileProgress" value="100" max="100"></progress>
                                                                <li>néerlandais</li> <progress id="fileProgress" value="50" max="100"></progress>
                                                                <li>Anglais</li><progress id="fileProgress" value="60" max="100"></progress>
                                                                <li>Arabe</li><progress id="fileProgress" value="80" max="100"></progress>`
            document.querySelector("#education ul").innerHTML=`<li>Certificat d'études secondaires supérieures (CESS) 2012</li>
                                                            <li>2012 à 2013 un an en tant que professeur d'éducation physique</li>
                                                            <li>2013 formation d'agent de sécurité avec G4S</li>
                                                            <li>Formation 2020 en tant que développeur web back-end chez CF2M</li>`
            document.querySelector("#experience ul").innerHTML=`<li>2010 à 2012 intérimaire (traiteur J&M catering)</li>
                                                                <li>2013 intérim (GLS logistic dépot)</li>
                                                                <li>2014 à juillet 2019 Agent de sécurité</li>
                                                                <li>2020 à aujourd'hui formation de développeur web back-end en CF2M</li>`
    
    
    
        //Traduction de l'FR vers EN
    
        }else{
            document.querySelector("#traduction").textContent="FR"
            document.querySelector("#title h1").innerHTML=`Web developer <br> Junior`
            document.querySelector("#profile p").innerHTML=`Hello,<br>
            I am a young motivated web developer keen and passionate about learning programming. I am a self-taught person, when stuck on problem, I like to do my own 
            research to find the solution. Working in a team (Trello, Notion, Git, ...) or alone are both a good working and stimulating fields, I quickly adapt and I am always smiling, because I love what I do. 
            JavaScript, HTML, PHP. I also know how to use CMS such as Wordpress and frameworks such as Boostrap. These languages ​​are those that I've already worked with, 
            but of course I sure like to learn even more.`
            document.querySelector("#skills h1").innerHTML=`Skills`
            document.querySelector("#education h1").innerHTML=`Education`
            document.querySelector("#experience h1").innerHTML=`Experience`
            document.querySelector("#hobby h1").innerHTML=`Hobby`
            document.querySelector("#language h1").innerHTML=`Language`
            document.querySelector("#language ul").innerHTML=` <li>French</li><progress id="fileProgress" value="100" max="100"></progress>
                                                            <li>Dutch</li><progress id="fileProgress" value="50" max="100"></progress>
                                                            <li>English</li><progress id="fileProgress" value="60" max="100"></progress>
                                                            <li>Arabic</li><progress id="fileProgress" value="80" max="100"></progress>`
            document.querySelector("#education ul").innerHTML=` <li>2012 High school diploma certificate(CESS)</li>
                                                            <li>2012 to 2013 one year as a physical education teacher</li>
                                                            <li>2013 training as a security guard with G4S</li>
                                                            <li>2020 training as a back-end web developer at CF2M</li>`
            document.querySelector("#experience ul").innerHTML=`<li>2010 to 2012 interim(Caterer J&M catering)</li>
                                                            <li>2013 interim(GLS logistics depot)</li>
                                                            <li>2014 to July 2019 Security guard</li>
                                                            <li>2020 Until now training of back-end web developer in CF2M</li>`
    
            
        }
    })
