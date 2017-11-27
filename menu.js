$(document).ready(main);

var contador = 1;

function main() {
  $('.nav-bar__collapsed').click(function(){
      $('.menu').toggle();
      if(contador == 1) {
        $('.header').animate({
          height: '400'
        });
        contador = 0;
      } else {
        contador = 1;
        $('.header').animate({
          height: '80'
        });
      }
  });
};
