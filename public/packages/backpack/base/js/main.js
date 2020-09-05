/*===== MENU SHOW =====*/
// const showMenu = (toggleId, navId) =>{
//     const toggle = document.getElementById(toggleId),
//     nav = document.getElementById(navId)
//
//     if(toggle && nav){
//         toggle.addEventListener('click', ()=>{
//             nav.classList.toggle('show')
//         })
//     }
// }
// showMenu('nav-toggle','nav-menu')
//
// /*===== ACTIVE AND REMOVE MENU =====*/
// const navLink = document.querySelectorAll('.nav__link');
//
// function linkAction(){
//   /*Active link*/
//   navLink.forEach(n => n.classList.remove('active'));
//   this.classList.add('active');
//
//   /*Remove menu mobile*/
//   const navMenu = document.getElementById('nav-menu')
//   navMenu.classList.remove('show')
// }
// navLink.forEach(n => n.addEventListener('click', linkAction));

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL HOME*/
sr.reveal('.home__title',{});
sr.reveal('.button',{delay: 200});
sr.reveal('.home__img',{delay: 400});
sr.reveal('.home__social-icon',{ interval: 200});

/*SCROLL ABOUT*/
sr.reveal('.about__img',{});
sr.reveal('.about__subtitle',{delay: 400});
sr.reveal('.about__text',{delay: 400});

/*SCROLL SKILLS*/
sr.reveal('.skills__subtitle',{});
sr.reveal('.skills__text',{});
sr.reveal('.skills__data',{interval: 200});
sr.reveal('.skills__img',{delay: 600});

/*SCROLL WORK*/
sr.reveal('.work__img',{interval: 200});

/*SCROLL CONTACT*/
sr.reveal('.contact__input',{interval: 200});


/************************************/
/************************************/
/************************************/




// if (n && "click" === n.type && (u.clickEvent = n), s) {
//   var c = s._menu;
//   if (t(a).hasClass("show") && !(n && ("click" === n.type && /input|textarea/i.test(n.target.tagName) || "keyup" === n.type && 9 === n.which) && t.contains(a, n.target))) {
//     var l = t.Event("hide.bs.dropdown", u);
//     t(a).trigger(l), l.isDefaultPrevented() || ("ontouchstart" in document.documentElement && t(document.body).children().off("mouseover", null, t.noop), r[i].setAttribute("aria-expanded", "false"), s._popper && s._popper.destroy(), t(c).removeClass("show"), t(a).removeClass("show").trigger(t.Event("hidden.bs.dropdown", u)))
//   }
// }
// }
// }, e._getParentFromElement = function (e) {
// var t, n = s.getSelectorFromElement(e);
// return n && (t = document.querySelector(n)), t || e.parentNode
// }, e._dataApiKeydownHandler = function (n) {
// if (!(/input|textarea/i.test(n.target.tagName) ? 32 === n.which || 27 !== n.which && (40 !== n.which && 38 !== n.which || t(n.target).closest(".dropdown-menu").length) : !A.test(n.which)) && !this.disabled && !t(this).hasClass("disabled")) {
// var r = e._getParentFromElement(this),
// i = t(r).hasClass("show");
// if (i || 27 !== n.which) {
// if (n.preventDefault(), n.stopPropagation(), !i || i && (27 === n.which || 32 === n.which)) return 27 === n.which && t(r.querySelector('[data-toggle="dropdown"]')).trigger("focus"), void t(this).trigger("click");
// var o = [].slice.call(r.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")).filter((function (e) {
//   return t(e).is(":visible")
// }));
//
//
// t(document).on("keydown.bs.dropdown.data-api", '[data-toggle="dropdown"]', N._dataApiKeydownHandler).on("keydown.bs.dropdown.data-api", ".dropdown-menu", N._dataApiKeydownHandler).on("click.bs.dropdown.data-api keyup.bs.dropdown.data-api", N._clearMenus).on("click.bs.dropdown.data-api", '[data-toggle="dropdown"]', (function (e) {
//   e.preventDefault(), e.stopPropagation(), N._jQueryInterface.call(t(this), "toggle")
// })).on("click.bs.dropdown.data-api", ".dropdown form", (function (e) {
//   e.stopPropagation()
// })), t.fn[E] = N._jQueryInterface, t.fn[E].Constructor = N, t.fn[E].noConflict = function () {
//   return t.fn[E] = S, N._jQueryInterface
// };
