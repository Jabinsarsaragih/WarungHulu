const openForm = document.getElementById('openForm');
const closeForm = document.getElementById('closeForm');
const formTambah = document.getElementById('formTambah');
const overlay = document.getElementById('overlay');

// Buka form
openForm.addEventListener('click', () => {
    formTambah.classList.add('active');
    overlay.classList.add('active');
});

// Tutup form
closeForm.addEventListener('click', () => {
    formTambah.classList.remove('active');
    overlay.classList.remove('active');
});

// Tutup form jika overlay di-klik
overlay.addEventListener('click', () => {
    formTambah.classList.remove('active');
    overlay.classList.remove('active');
});