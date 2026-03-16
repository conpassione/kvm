const swiper = new Swiper(".cpslider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 0,
  autoplay: {
    delay: 500,
  },
  speed: 2500,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  a11y: {
    prevSlideMessage: 'Vorheriges Bild',
    nextSlideMessage: 'Nächstes Bild',
  },
  autoHeight: true,
})

