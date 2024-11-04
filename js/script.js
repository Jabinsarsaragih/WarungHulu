const sentences = [
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ullam quos impedit eius sit aliquid molestiae id quae omnis quas ? ",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum sed doloribus, ipsa illo officia distinctio ea esse cupiditate harum. Sed dolores amet reiciendis sequi praesentium laudantium numquam libero rerum veritatis.",
]

let sentencesIndex = 0;
let wordIndex = 0;
const textElement = document.getElementById('typewriter');

// Fungsi untuk memunculkan kata per kata
function typeSentence() {
    // Tambahkan kata dan spasi untuk setiap kata baru
    const words = sentences[sentencesIndex].split('');
    if (wordIndex < words.length) {
        textElement.innerHTML += words[wordIndex] + '';
        wordIndex++;
        setTimeout(typeSentence, 200);
    }
    else {
        // Reset untuk kalimat berikutnya
        wordIndex = 0;
        sentencesIndex = (sentencesIndex + 1) % sentences.length; // ulang dari awal sesudah sampai akhir
        setTimeout(() => {
            textElement.innerHTML = ''; // kosongkan teks
            typeSentence(); // panggil lagi untuk kalimat berikutnya
        }, 2000); // jeda 2 detik sebelum kalimat berikutnya
    }
}

// panggil fungsi pertama kali
typeSentence();

// Menghilangkan Login
const closeBtn = document.querySelector('.close');
const loginModal = document.querySelector('.login');
const banner = document.querySelector('.banner');

closeBtn.addEventListener('click', () => {
    loginModal.style.display = 'none';
    banner.style.display = 'block';
});

//  Menampilkan Login
const seeBtn = document.getElementById('login');

seeBtn.addEventListener('click', () => {
    loginModal.style.display = 'block';
    banner.style.display = 'none';
    document.body.style.backgroundColor = '#55894ad8';
})
