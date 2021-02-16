     //document equivant a la page (toute la page) .ready 1. il check en isant toute la page de haut en bas
     //2.(bouillenement)quand il arrive a la fin il remonte vers le haut et active les scripts
    $(document).ready(function(){
      //$() equivaut au query selector
      // selectionne la classe en question 
        $('.btnNav').click(function(){//.click est l evenement qui va activer le script
          $('.items').toggleClass("show"); //toggleClss permet d alterer une classe (dit l interupteur)
          $('ul li').toggleClass("hide");
        /*$('.items').show();
          $('ul li').hide();*/
        })
      });
