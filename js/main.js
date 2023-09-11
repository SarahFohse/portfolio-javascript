

//typewriter effect on job title
const typewriterLetters = document.querySelectorAll('#job-title span');

function change(i){
  if (i < typewriterLetters.length){
    // typewriterLetters[i].style.display = 'inline';
    typewriterLetters[i].style.visibility = 'visible';
     setTimeout(function(){
         i++;
         change(i);
     }, 100);
  }
}




function restart() {
  typewriterLetters.forEach(e => {
    // e.style.display = 'none';
    e.style.visibility = 'hidden';
  });
  // change(0);

  setTimeout(() => {
    change(0);
  }, 1900);
}

restart()

//jQuery for sidemenu//

function toggleSidebar() {
  $("#side-menu-section").toggleClass("hidden");
  $(".side-menu").toggleClass("side-menu-active");
  $(".button i").toggleClass("fa-bars");
  $(".button i").toggleClass("fa-xmark");
}

$(".button").on("click tap", function() {
  toggleSidebar();
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    toggleSidebar();
  }
});

//////scroll down fade in

$('.scroll-down').hide();
$('.scroll-down').delay(1000);
$('.scroll-down').fadeIn(4000);


//////pop up image

document.querySelectorAll('.code-sample img').forEach(image => {
  image.onclick =() =>{
    document.querySelector('.popup-image').style.display = 'block';
    document.querySelector('.popup-image img').src = image.getAttribute('src');
  }
});

document.querySelector('.popup-image span').onclick = () => {
  document.querySelector('.popup-image').style.display = 'none';
}


