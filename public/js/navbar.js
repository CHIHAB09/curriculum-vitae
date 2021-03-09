      //document equivant a la page (toute la page) .ready 1. il check en isant toute la page de haut en bas
     //2.(bouillenement)quand il arrive a la fin il remonte vers le haut et active les scripts
    $(document).ready(function(){
      //$() equivaut au query selector
      // selectionne la classe en question 
        $('#LienformaMobile').click(function(){//.click est l evenement qui va activer le script
          
          $('#DivformaMobile').toggle(); //toggle() permet d alterer une classe (dit l interupteur)
        });                               // toggle permet de rajouter 3arguments (1.rapiditer(slow,fast,milliseconde)2.easing(par defaut:swing et linear pour tjrs la mm vitesse)3.coolback[si besoin qu'une fonction cacher soit executer])
      }); 