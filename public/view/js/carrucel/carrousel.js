$('#c_miembros').owlCarousel({
    loop: true,
    nav: false,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 6000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3,
        loop: false
      }
    }
  });