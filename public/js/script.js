const hamburgerButton = document.querySelector('.hamburger-menu');

hamburgerButton.addEventListener('click', function (event) {
    const navbarListElement = document.querySelector('.navbar-list');
    navbarListElement.classList.toggle('show')
})