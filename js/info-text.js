document.querySelectorAll('.info-button').forEach((item, index) => {
  item.onclick = () => {
    document.querySelectorAll('.hover-text')[index].classList.toggle('active-info');
  }
});