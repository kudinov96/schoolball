let lastScroll_mob = 0;
const defaultOffset_mob = 200;
const header_mob = document.querySelector('.header-mob');
const header_mob_quality = document.querySelector('.mobile-header');

const scrollPosition_mob = () => window.pageYOffset || document.documentElement.scrollTop;
const containHide_mob = () => header_mob.classList.contains('hide');

window.addEventListener('scroll', () => {
    if(scrollPosition_mob() > lastScroll_mob && !containHide_mob() && scrollPosition_mob() > defaultOffset_mob) {
        //scroll down
        header_mob.classList.add('hide');
        header_mob_quality.classList.add('hide');
    }
    else if(scrollPosition_mob() < lastScroll_mob && containHide_mob()){
        //scroll up
        header_mob.classList.remove('hide');
        header_mob_quality.classList.remove('hide');
    }

    lastScroll_mob = scrollPosition_mob();
})
