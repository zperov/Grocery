const saleButton = document.getElementById('sale-button');
const saleItem = document.getElementById('sale-item');

saleButton.addEventListener('click', () => {
  if (saleItem.style.display === 'none') {
    saleItem.style.display = 'block';
  } else {
    saleItem.style.display = 'none';
  }
