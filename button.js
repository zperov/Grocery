const saleButton = document.getElementById('saleButton');
const saleItem = document.getElementById('saleItem');

saleButton.addEventListener('click', () => {
  if (saleItem.style.display === 'none' || saleItem.style.display === '') {
    saleItem.style.display = 'block';
  } else {
    saleItem.style.display = 'none';
  }
});
                            
