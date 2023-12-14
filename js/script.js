function togglePopupSobaka(){
  document.getElementById("popup_1").classList.toggle("active");
}

function togglePopupVovk(){
  document.getElementById("popup_2").classList.toggle("active");
}

function togglePopupVedmid(){
  document.getElementById("popup_3").classList.toggle("active");
}

function togglePopupLev(){
  document.getElementById("popup_4").classList.toggle("active");
}

function togglePopupTrainer1(){
  document.getElementById("popup_5").classList.toggle("active");
}

function togglePopupTrainer2(){
  document.getElementById("popup_6").classList.toggle("active");
}

function togglePopupTrainer3(){
  document.getElementById("popup_7").classList.toggle("active");
}

function togglePopupTrainer4(){
  document.getElementById("popup_8").classList.toggle("active");
}

function togglePopupTrainerCard1(){
  document.getElementById("popup_9").classList.toggle("active");
}

function togglePopupTrainerCard2(){
  document.getElementById("popup_10").classList.toggle("active");
}

function togglePopupTrainerCard3(){
  document.getElementById("popup_11").classList.toggle("active");
}

function togglePopupTrainerCard4(){
  document.getElementById("popup_12").classList.toggle("active");
}

const swiper = new Swiper(".swiper", { 
  effect: "fade",
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  navigation: {
	prevEl: ".swiper-button-prev",
	nextEl: ".swiper-button-next",
  },
});