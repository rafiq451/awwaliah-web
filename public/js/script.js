const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const carouselInner = document.querySelector('.carousel-inner');
const carouselItems = Array.from(document.querySelectorAll('.carousel-item'));

let currentIndex = 0;
carouselItems[currentIndex].classList.add('active');

function showSlide(index) {
  carouselItems.forEach((item) => item.classList.remove('active'));
  carouselItems[index].classList.add('active');
}

function showNextSlide() {
  currentIndex = (currentIndex + 1) % carouselItems.length;
  showSlide(currentIndex);
}

function showPrevSlide() {
  currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
  showSlide(currentIndex);
}

nextBtn.addEventListener('click', showNextSlide);
prevBtn.addEventListener('click', showPrevSlide);

setInterval(showNextSlide, 5000);

// hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('hamburger-active');
  navMenu.classList.toggle('hidden');
});

// navbar fixd
window.onscroll = function () {
  const header = document.querySelector('header');
  const span = document.querySelectorAll('span');
  const textColor = document.querySelectorAll('ul li.group a');
  const text = document.querySelectorAll('ul li.color a');
  const fixedNav = header.offsetTop;
  if (window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
    span[0].classList.add('span-color');
    span[1].classList.add('span-color');
    span[2].classList.add('span-color');
    textColor[0].classList.add('text-color');
    textColor[1].classList.add('text-color');
    // textColor[2].classList.add('text-color');
    text[0].classList.add('text-color');
    text[1].classList.add('text-color');
    text[2].classList.add('text-color');
  } else {
    header.classList.remove('navbar-fixed');
    span[0].classList.remove('span-color');
    span[1].classList.remove('span-color');
    span[2].classList.remove('span-color');
    textColor[0].classList.remove('text-color');
    textColor[1].classList.remove('text-color');
    // textColor[2].classList.remove('text-color');
    text[0].classList.remove('text-color');
    text[1].classList.remove('text-color');
    text[2].classList.remove('text-color');
  }
};

// hover berita
// const hoverBerita = document.querySelector('div.hover-group div div a');
// const berita = document.querySelector('a.hover-solo div.sans');

// hoverBerita.addEventListener('mouseover', function () {
//   berita.classList.add('hover-berita');
// });
// hoverBerita.addEventListener('mouseout', function () {
//   berita.classList.remove('hover-berita');
// });

// Hover li
const listBerita = document.querySelector('nav#nav-menu ul li:nth-child(2) a');
const dropDown = document.querySelector('nav#nav-menu ul li:nth-child(2) div');
const listPendidikan = document.querySelector('nav#nav-menu ul li:nth-child(5).color a');
const pendidikan = document.querySelector('nav#nav-menu ul li:nth-child(5).color div');
const list = document.querySelectorAll('#nav-menu ul li:nth-child(5).color div ul li ');
const listFormal = document.querySelector('#nav-menu ul li:nth-child(5).color div ul li div');
const listNonFormal = document.querySelector('#nav-menu ul li.color:nth-child(5) div ul li:nth-child(2) div');
// const listN = document.querySelector('#nav-menu ul li.color:nth-child(5) div ul li:nth-child(2) a');

// About
listBerita.addEventListener('mouseover', function () {
  dropDown.classList.add('dropdown');
});

listBerita.addEventListener('mouseout', function () {
  dropDown.classList.remove('dropdown');

  dropDown.addEventListener('mouseover', function () {
    dropDown.classList.add('dropdown');
  });

  dropDown.addEventListener('mouseout', function () {
    dropDown.classList.remove('dropdown');
  });
});

// Pendidikan formal/non
listPendidikan.addEventListener('mouseover', function () {
  pendidikan.classList.add('dropdown');
});

listPendidikan.addEventListener('mouseout', function () {
  pendidikan.classList.remove('dropdown');

  pendidikan.addEventListener('mouseover', function () {
    pendidikan.classList.add('dropdown');
  });

  pendidikan.addEventListener('mouseout', function () {
    pendidikan.classList.remove('dropdown');
  });
});

// pendidikan formal
list[0].addEventListener('mouseover', function () {
  listFormal.classList.add('dropdown');
});

list[0].addEventListener('mouseout', function () {
  listFormal.classList.remove('dropdown');

  listFormal.addEventListener('mouseover', function () {
    listFormal.classList.add('dropdown');
  });

  listFormal.addEventListener('mouseout', function () {
    listFormal.classList.remove('dropdown');
  });
});
// console.log(listNonFormal);

// pendidikan non formal
list[5].addEventListener('mouseover', function () {
  listNonFormal.classList.add('dropdown');
});

list[5].addEventListener('mouseout', function () {
  listNonFormal.classList.remove('dropdown');

  listNonFormal.addEventListener('mouseover', function () {
    listNonFormal.classList.add('dropdown');
  });

  listNonFormal.addEventListener('mouseout', function () {
    listNonFormal.classList.remove('dropdown');
  });
});

const sliderContainer = document.getElementById('sliderContainer');
const slider = document.getElementById('slider');
const cards = slider.getElementsByTagName('li');

const elementsToShow = 3;
const sliderContainerWidth = sliderContainer.clientWidth;
const cardWidth = sliderContainerWidth / elementsToShow;

slider.style.width = cards.length * cardWidth + 'px';
for (let index = 0; index < array.length; index++) {
  const element = cards[index];
  element.style.width = cardWidth + 'px';
}
