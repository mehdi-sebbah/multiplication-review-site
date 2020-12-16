const burger = document.getElementById("burger");
const nav = document.getElementsByClassName("list_nav");
const nav_bar = document.getElementById("nav_bar");



burger.addEventListener('click', () => {nav[0].classList.toggle('change'); burger.classList.toggle('change'); nav_bar.classList.toggle('change'); span.classList.toggle('change')});

