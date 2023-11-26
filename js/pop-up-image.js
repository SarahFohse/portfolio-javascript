//////pop up image
document.querySelectorAll('.code-sample img').forEach(item => {
  item.onclick = () => {
    document.querySelector('.popup-image').style.display = 'block';
    document.querySelector('.popup-image img').src = item.getAttribute('src');
  }
});

document.querySelector('.popup-image span').onclick = () => {
  document.querySelector('.popup-image').style.display = 'none';
}
document.querySelectorAll('.info-button').forEach((item, index) => {
  item.onclick = () => {
    document.querySelectorAll('.hover-text')[index].classList.toggle('active-info');
  }
});