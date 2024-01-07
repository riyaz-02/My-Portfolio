const readMoreButtons = document.querySelectorAll('.read-more');
const modal = document.querySelector('.modal');
const closeButton = document.querySelector('.close');
const modalContent = document.querySelector('.modal-content');

readMoreButtons.forEach(button => {
    button.addEventListener('click', () => {
        modal.style.display = 'block';
    });
});

closeButton.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', event => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

