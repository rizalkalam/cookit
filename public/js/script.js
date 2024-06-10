function initializeSlick() {
  if (window.innerWidth <= 480) {
      if (!$(".item-list").hasClass('slick-initialized')) {
          $(".item-list").slick({
              centerMode: true,
              autoplay: false,
              dots: false,
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              variableWidth: true,
              
          });
      }

      if (!$(".card-list-sec3").hasClass('slick-initialized3')) {
          $(".card-list-sec3").slick({
            centerMode: true,
            autoplay: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            // slidesToShow: 1,
            // slidesToScroll: 1,
          })
      }
  } else if(window.innerWidth <= 835) {
      if (!$(".item-list").hasClass('slick-initialized')) {
        $(".item-list").slick({
            centerMode: true,
            autoplay: false,
            dots: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            
        });
      }

      if (!$(".card-list-sec3").hasClass('slick-initialized3')) {
          $(".card-list-sec3").slick({
            centerMode: false,
            autoplay: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            // slidesToShow: 1,
            // slidesToScroll: 1,
          })
      }
  } else {
    if ($(".item-list").hasClass('slick-initialized')) {
        $(".item-list").slick('unslick');
    }
  }
}






function navPopup() {
  var x = document.getElementById("nav-links");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}