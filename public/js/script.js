const prevBtn = document.getElementById('prevBtn'),
  nextBtn = document.getElementById('nextBtn'),
  carouselInner = document.querySelector('.carousel-inner'),
  carouselItems = Array.from(document.querySelectorAll('.carousel-item'));
let currentIndex = 0;
function showSlide(e) {
  carouselItems.forEach((e) => e.classList.remove('active')), carouselItems[e].classList.add('active');
}
function showNextSlide(e) {
  (start = start || e), 5e3 <= e - start && ((currentIndex = (currentIndex + 1) % carouselItems.length), showSlide(currentIndex), (start = null)), requestAnimationFrame(showNextSlide);
}
function showPrevSlide(e) {
  (start = start || e), 5e3 <= e - start && ((currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length), showSlide(currentIndex), (start = null)), requestAnimationFrame(showPrevSlide);
}
carouselItems[currentIndex].classList.add('active');
let start = null;
requestAnimationFrame(showNextSlide),
  nextBtn.addEventListener('click', () => {
    (start = start && null), showNextSlide();
  }),
  prevBtn.addEventListener('click', () => {
    (start = start && null), showPrevSlide();
  });
const hamburger = document.querySelector('#hamburger'),
  navMenu = document.querySelector('#nav-menu');
hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('hamburger-active'), navMenu.classList.toggle('hidden');
}),
  (window.onscroll = function () {
    const e = document.querySelector('header'),
      t = document.querySelectorAll('span'),
      o = document.querySelectorAll('ul li.group a'),
      s = document.querySelectorAll('ul li.color a');
    var n = e.offsetTop;
    window.pageYOffset > n
      ? (e.classList.add('navbar-fixed'),
        t[0].classList.add('span-color'),
        t[1].classList.add('span-color'),
        t[2].classList.add('span-color'),
        o[0].classList.add('text-color'),
        o[1].classList.add('text-color'),
        s[0].classList.add('text-color'),
        s[1].classList.add('text-color'),
        s[2].classList.add('text-color'))
      : (e.classList.remove('navbar-fixed'),
        t[0].classList.remove('span-color'),
        t[1].classList.remove('span-color'),
        t[2].classList.remove('span-color'),
        o[0].classList.remove('text-color'),
        o[1].classList.remove('text-color'),
        s[0].classList.remove('text-color'),
        s[1].classList.remove('text-color'),
        s[2].classList.remove('text-color'));
  });
const listBerita = document.querySelector('nav#nav-menu ul li:nth-child(2) a'),
  dropDown = document.querySelector('nav#nav-menu ul li:nth-child(2) div'),
  listPendidikan = document.querySelector('nav#nav-menu ul li:nth-child(5).color a'),
  pendidikan = document.querySelector('nav#nav-menu ul li:nth-child(5).color div'),
  list = document.querySelectorAll('#nav-menu ul li:nth-child(5).color div ul li '),
  listFormal = document.querySelector('#nav-menu ul li:nth-child(5).color div ul li div'),
  listNonFormal = document.querySelector('#nav-menu ul li.color:nth-child(5) div ul li:nth-child(2) div');
listBerita.addEventListener('mouseover', function () {
  dropDown.classList.add('dropdown');
}),
  listBerita.addEventListener('mouseout', function () {
    dropDown.classList.remove('dropdown'),
      dropDown.addEventListener('mouseover', function () {
        dropDown.classList.add('dropdown');
      }),
      dropDown.addEventListener('mouseout', function () {
        dropDown.classList.remove('dropdown');
      });
  }),
  listPendidikan.addEventListener('mouseover', function () {
    pendidikan.classList.add('dropdown');
  }),
  listPendidikan.addEventListener('mouseout', function () {
    pendidikan.classList.remove('dropdown'),
      pendidikan.addEventListener('mouseover', function () {
        pendidikan.classList.add('dropdown');
      }),
      pendidikan.addEventListener('mouseout', function () {
        pendidikan.classList.remove('dropdown');
      });
  }),
  list[0].addEventListener('mouseover', function () {
    listFormal.classList.add('dropdown');
  }),
  list[0].addEventListener('mouseout', function () {
    listFormal.classList.remove('dropdown'),
      listFormal.addEventListener('mouseover', function () {
        listFormal.classList.add('dropdown');
      }),
      listFormal.addEventListener('mouseout', function () {
        listFormal.classList.remove('dropdown');
      });
  }),
  list[5].addEventListener('mouseover', function () {
    listNonFormal.classList.add('dropdown');
  }),
  list[5].addEventListener('mouseout', function () {
    listNonFormal.classList.remove('dropdown'),
      listNonFormal.addEventListener('mouseover', function () {
        listNonFormal.classList.add('dropdown');
      }),
      listNonFormal.addEventListener('mouseout', function () {
        listNonFormal.classList.remove('dropdown');
      });
  });
var swiper1 = new Swiper('.mySwiper', {
    slidesPerView: 1,
    centeredSlides: !1,
    slidesPerGroupSkip: 1,
    grabCursor: !0,
    keyboard: { enabled: !0 },
    breakpoints: { 0: { slidesPerView: 1, slidesPerGroup: 1 }, 768: { slidesPerView: 2, slidesPerGroup: 2 }, 1024: { slidesPerView: 3, slidesPerGroup: 3 } },
    scrollbar: { el: '.swiper-scrollbar' },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    pagination: { el: '.swiper-pagination', dynamicBullets: !0 },
  }),
  swiper2 = new Swiper('.slide-content', {
    slidesPerView: 1,
    centeredSlides: !1,
    fade: !0,
    spaceBetween: 25,
    slidesPerGroupSkip: 1,
    grabCursor: !0,
    autoplay: { delay: 2500, disableOnInteraction: !1 },
    breakpoints: { 0: { slidesPerView: 1, slidesPerGroup: 1 }, 768: { slidesPerView: 2, slidesPerGroup: 2 }, 1024: { slidesPerView: 3, slidesPerGroup: 3 }, 1400: { slidesPerView: 4, slidesPerGroup: 4 } },
    pagination: { el: '.swiper-pagination', dynamicBullets: !0 },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
  });
const openModalButton = document.getElementById('openModalButton'),
  closeModalButton = document.getElementById('closeModalButton'),
  modal = document.getElementById('modal');
openModalButton.addEventListener('click', () => {
  modal.classList.remove('hidden'), modal.classList.add('flex');
}),
  closeModalButton.addEventListener('click', () => {
    modal.classList.add('hidden'), modal.classList.remove('flex');
  });
