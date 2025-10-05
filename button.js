const sale-button = document.getElementById('sale-button');
const sale-item = document.getElementById('sale-item');

sale-button.addEventListener('click', () => {
  if (sale-item.style.display === 'none') {
    sale-item.style.display = 'block';
  } else {
    sale-item.style.display = 'none';
  }
