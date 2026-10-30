const themeBtn = document.getElementById('themeToggleBtn');
 
if (themeBtn) {
    themeBtn.addEventListener('click', function() {
        const isLight = document.body.style.backgroundColor === 'white' || document.body.classList.contains('light-mode');
 
        if (isLight) {
            document.body.style.backgroundColor = '';
            document.body.style.color = '';
            document.body.classList.remove('light-mode');
            themeBtn.innerText = '🌙 Dark Mode';
        } else {
            document.body.style.backgroundColor = 'white';
            document.body.style.color = 'black';
            document.body.classList.add('light-mode');
            themeBtn.innerText = '☀️ Light Mode';
        }
    });
}

const modal = document.getElementById('newsletterModal');
const openBtn = document.getElementById('openNewsletterBtn');
const closeBtn = document.getElementById('closeModalBtn');
 
if (openBtn && modal) {
    openBtn.addEventListener('click', function() {
        modal.style.display = 'block';
    });
}
 
if (closeBtn && modal) {
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });
}
 
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});