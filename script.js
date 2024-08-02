// Toggle menu and navbar on click
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

// Remove menu and navbar on scroll
window.onscroll = () => {
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

// Initialize Swiper for home slider
var swiperHome = new Swiper(".home-slider", {
   loop: true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

// Initialize Swiper for reviews slider
var swiperReviews = new Swiper(".reviews-slider", {
   grabCursor: true,
   loop: true,
   autoHeight: true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

// Load more items on button click
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () => {
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (let i = currentItem; i < currentItem + 3; i++) {
      if (boxes[i]) {
         boxes[i].style.display = 'inline-block';
      }
   }
   currentItem += 3;
   if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = 'none';
   }
}
