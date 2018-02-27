var swiper = new Swiper('#slider .swiper-container', {
  slidesPerView: 1,

  loop: true,
  speed: 2000,
  // autoplay: {
  //   delay: 6000,
  //
  //   disableOnInteraction: false,
  // },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.s-right',
    prevEl: '.s-left',
  },

});
var topswiper = new Swiper('#partner .swiper-container', {
  slidesPerView: 6,
  spaceBetween: 30,
  loop: true,
  autoplay: 4000,
  speed: 800,
  autoplay: {
    delay: 3000,

    disableOnInteraction: false,
  },
  breakpoints: {
    // when window width is <= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is <= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is <= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    800: {
      slidesPerView: 4,
      spaceBetween: 30
    }
  }
});
$(window).scroll(function () {
  var offset = $(".bottom-menu").offset();

  if ($(window).scrollTop() >= 103) {
    $(".navmain").addClass("fixed-menu");

  }
  else {
    $(".navmain").removeClass("fixed-menu");
  
  }
});

$("#collapse-btn").click(function() {
  $("#header .navmain").addClass("selected");
  $("body").addClass("overflow-hide");
  $(".overplay").css('display','block');
  $( ".overplay" ).blur();

});
$(".overplay").click(function() {
  $("#header .navmain").removeClass("selected");
  $("body").removeClass("overflow-hide");
  $(".overplay").toggle();

});
