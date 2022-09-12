function operation() {
    const open = document.querySelector('.lobby__open-closed')
    setInterval(timeoperation, 1000)

    function timeoperation() {
        const date = new Date()
        const d = date.getDay()
        const hUtc = date.getUTCHours()
        const hour = hUtc + 6

        if (hour >= 8) {
            if ((d == 6 || d == 0) && hour < 16) {
                styleopen('Open Now', 'Open')
            }
            else if ((d !== 6 && d !== 0) && hour < 21) {
                styleopen('Open Now', 'Open')
            }
            else {
                styleopen('Closed Now', 'Close')
            }
        } else {
            styleopen('Closed Now', 'Close')
        }

    }
    function styleopen(txt, dataType) {
        open.textContent = txt;
        open.dataset.open = dataType;
    }
    timeoperation()
}

operation()

const headerMenu = document.querySelector('.header__btn-menu')
const nav = document.querySelector('.header__nav')

function openMenu() {
    headerMenu.classList.toggle('ativo');
    nav.classList.toggle('ativo')
}

function closeMenu() {
    headerMenu.classList.remove('ativo');
    nav.classList.remove('ativo')
}

headerMenu.addEventListener('click', openMenu)
window.addEventListener('scroll', closeMenu)

/* scroll */

const animaElements = document.querySelectorAll('[data-anima]')

function animateElements() {
    const DISTANCE_WINDOW_TOP = window.pageYOffset + window.innerHeight * 4 / 5;

    animaElements.forEach(element => {
        const DISTANCE_ELEMENT_TOP = element.getBoundingClientRect().top + window.pageYOffset;
        const delay = element.dataset.delay || 0;
        if (DISTANCE_WINDOW_TOP > DISTANCE_ELEMENT_TOP) {
            setTimeout(() => {
                element.classList.add('animated')
            }, delay);
        } else if (DISTANCE_WINDOW_TOP < DISTANCE_ELEMENT_TOP + element.offsetHeight) {
            element.classList.remove('animated')
        }
    })
}
animateElements()
window.addEventListener('scroll', animateElements)

/* Slide */

const containerSlide = document.querySelector('.team__list')
const btnProx = document.querySelector('.btn-prox')
const btnAnt = document.querySelector('.btn-ant')
let itemsPerSlide = 4;
let slideIndex = 0;

function disableOrEnableButton() {
    btnAnt.classList.remove('disabled');
    btnProx.classList.remove('disabled');
    if (slideIndex === 0) {
        btnAnt.classList.add('disabled')
    } else if (slideIndex === containerSlide.children.length - itemsPerSlide) {
        btnProx.classList.add('disabled')
    }
}

function moveSlide(width) {
    containerSlide.style.transform = `translateX(-${width * slideIndex}px)`;
}

function getMeasuresSlide() {
    const slideItem = document.querySelectorAll('.team__list li')[1];
    const slideItemWidth = slideItem.getBoundingClientRect().width;
    const slideItemMargin = parseFloat(getComputedStyle(slideItem).marginLeft)
    const slideDragWidth = slideItemWidth + slideItemMargin;
    disableOrEnableButton()
    moveSlide(slideDragWidth)
}

function changeSlidesPerPage() {
    if (window.innerWidth >= 690) {
        itemsPerSlide = 4
    }
    if (window.innerWidth < 690) {
        itemsPerSlide = 3
    }
    if (window.innerWidth < 480) {
        itemsPerSlide = 2
    }
    if (window.innerWidth < 400) {
        itemsPerSlide = 1
    }
    slideIndex = 0;
    disableOrEnableButton()
    moveSlide(0);
}
changeSlidesPerPage()
btnProx.addEventListener('click', (e) => {
    const btnDisabled = e.currentTarget.classList.contains('disabled');
    if (btnDisabled) return;
    ++slideIndex;
    getMeasuresSlide()
})
btnAnt.addEventListener('click', (e) => {
    const btnDisabled = e.currentTarget.classList.contains('disabled');
    if (btnDisabled) return;
    --slideIndex;
    getMeasuresSlide()
})
window.addEventListener('resize', changeSlidesPerPage)
