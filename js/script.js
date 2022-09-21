 
    if(window.scrollY > 60){
       document.querySelector('.header').classList.add('active');
    }else{
       document.querySelector('.header').classList.remove('active');
    }
 }

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



    var swiper = new Swiper(".home-slider", {
        loop:true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
     });