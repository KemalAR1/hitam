const profileButton = document.querySelector('.profile-button');
const profile = document.querySelector('.profile');

profileButton.addEventListener('click', () => {
    profile.classList.toggle('active');

});

document.addEventListener('click', (event) => {
    const targetElement = event.target;
    // Periksa apakah elemen yang diklik berada di luar elemen profil
    if (!profile.contains(targetElement)) {
        profile.classList.remove('active');
    }
});