//ini untuk navbar
window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.scrollY > fixedNav){
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}


// buat variabel untuk menampung id dari button nya yaitu hamburger  
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

//saat di klik tambah class baru bernama hamburger-active
hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});


