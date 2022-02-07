function toggleMenu() {
    const navBar = document.querySelector(".nav__bar");
    const navBurger = document.querySelector(".nav__burger");
    const navBarLinks = document.querySelector(".nav__bar__link");
    const body = document.querySelector ("body");
    navBurger.addEventListener ('click', function(){
        navBar.classList.toggle('show-nav');
        body.classList.toggle ('big-header');
    });
}

toggleMenu();


function changeImage () {
    const logo = document.querySelector(".nav__bar__logo--visuel")
    if (window.innerWidth <= 767) {
        logo.src="../Photos/logo-ferme-du-petit-marais_white.png";
    }
    else {
        logo.src="../Photos/logo-ferme-du-petit-marais.jpg";
    }
    window.addEventListener('resize', function (e) {
        if (window.innerWidth <= 767) {
            logo.src="../Photos/logo-ferme-du-petit-marais_white.png";
            console.log('ok');
        }
        else {
            logo.src="../Photos/logo-ferme-du-petit-marais.jpg";
        }
    });
}
    
changeImage()