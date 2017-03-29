jQuery(document).ready(function($) {
//
  var $document = $(document),
      $element = $('#page'),
      className = 'hasScrolled';
  $document.scroll(function(){
    if ($document.scrollTop() >= 60) {
      $('.site-header').animate({
         top: "-4"
       }, 1000, function(){
      });
      $('.site-description').css('display','none');
      $('.site-title').css('display','none');
      $('.initial-title').css('display','block');
    } else {
      $('.site-header').animate({
         top: "0"
       }, 3500, function(){
          // animation complete
      });
      $('.site-description').css('display','block');
      $('.initial-title').css('display','none');
      $('.site-title').css('display','block');
    }
  });

  //HOMEPAGE TEXT ROTATE
  var divs = $('span[class^="hpRotate-"]').hide(),
      i = 0;

  (function cycle() {

      divs.eq(i).fadeIn(400)
                .delay(6000)
                .fadeOut(400, cycle);

      i = ++i % divs.length;
  })();

})
