jQuery(document).ready(function(){
  var swiper = new Swiper('.dd-swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows : true,
    }

  });
});
/*
jQuery(document).ready(function(){
  jQuery('.dd_post_testemonial .elementor-posts ').slick({
    //infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay:true,
    //dots: true,
    arrows: true

  });
 });
*/