$(document).ready(main);

var contador = 1;

function main() {
  $('.nav-bar__collapsed').click(function() {
      //$('.menu').toggle();
      if(contador == 1) {
        $('.menu').animate( {
          height: 'toggle'
        });
        contador = 0;
      } else {
        contador = 1;
        $('.menu').animate( {
          height: 'toggle'
        } );
      }
  } );
};
