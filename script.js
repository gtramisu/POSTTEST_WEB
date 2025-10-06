// ====================================================
// FILE: script.js
// ===================================================

const themeToggle = document.getElementById('theme-toggle');
const body = document.body;
const STORAGE_KEY = 'robuxifyDarkMode';

function toggleTheme() {
    body.classList.toggle('dark-mode');
    
    const isDarkMode = body.classList.contains('dark-mode');

    if (isDarkMode) {
        themeToggle.textContent = '🌙 Mode Terang';
    } else {
        themeToggle.textContent = '☀️ Mode Gelap';
    }

    localStorage.setItem(STORAGE_KEY, isDarkMode);
}

function loadTheme() {
    const savedTheme = localStorage.getItem(STORAGE_KEY);

    if (!themeToggle) return; 

    if (savedTheme === 'true') {
        body.classList.add('dark-mode');
        themeToggle.textContent = '🌙 Mode Terang';
    } else {
        body.classList.remove('dark-mode');
        themeToggle.textContent = '☀️ Mode Gelap';
    }
}

loadTheme();

if (themeToggle) {
    themeToggle.addEventListener('click', toggleTheme);
}
