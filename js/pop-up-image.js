//////pop up image
document.querySelectorAll('.code-sample .hover-text').forEach(item => {
  item.onclick =() =>{
    document.querySelector('.popup-image').style.display = 'block';
    document.querySelector('.popup-image img').src = item.previousElementSibling.getAttribute('src');
  }
});

document.querySelector('.popup-image span').onclick = () => {
  document.querySelector('.popup-image').style.display = 'none';
}
