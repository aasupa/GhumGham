const hamburger = document.querySelector(".hamburger");
const navMenu= document.querySelector(".nav-menu");

hamburger.addEventListener("click",() =>{
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})


document.querySelectorAll(".nav-menu").forEach(n => n.
    addEventListener("click",() => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }))


let userBox = document.querySelector('.header .user-box');

document.querySelector('#user-btn').onclick = () => {
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .user-box').classList.add('active');
   }else{
      document.querySelector('.header .user-box').classList.remove('active');
   }
}

var swiper = new Swiper(".home-slider", {
      loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
   });


   

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}


