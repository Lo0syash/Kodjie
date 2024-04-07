import { escape, lte } from 'lodash';
import './bootstrap';

let ellipse = document.querySelectorAll('.ellipse');
let slide = document.querySelectorAll('.banner-slide');

for (let i = 0; i < ellipse.length; i++) {
    ellipse[i].addEventListener('click', ()=> slider(i))
}

function slider(i) {
    ellipse.forEach(ellipses =>{
        ellipses.classList.remove('active')
    })
    slide.forEach(slides => {
        slides.classList.remove('active')
    })
    ellipse[i].classList.add('active')
    slide[i].classList.add('active')
}

let btnPrev = document.querySelector('.btn-prev');
let btnNext = document.querySelector('.btn-next');
let currentIndex = 0

function showSlides(index) {
    slide.forEach((slides, i) => {
        if (i === index) {
            slides.classList.add('active')
        } else {
            slides.classList.remove('active')
        }
    })
}

showSlides(currentIndex)

document.querySelector('.btn-prev').addEventListener('click', ()=>{
    currentIndex = (currentIndex - 1) % slide.length
    showSlides(currentIndex)
    slider(currentIndex)
})

document.querySelector('.btn-next').addEventListener('click', ()=>{
    currentIndex = (currentIndex + 1) % slide.length
    showSlides(currentIndex)
    slider(currentIndex)
})

if (currentIndex === 0) {
    btnPrev.classList.add('disabled')
}

if (currentIndex === slide.length - 1) {
    btnNext.classList.add('disabled')
}

document.querySelector('.header__burger').addEventListener('click', ()=>{
    document.querySelector('.header__burger').classList.toggle('active')
    document.querySelector('.header__inner-func').classList.toggle('active')
    setTimeout(() => {
        document.querySelector('.logotype__span--color').classList.toggle('active')
    }, 250);
})


const sliderAbout = document.querySelector('.best-cataog--slider')
const slides = Array.from(sliderAbout.querySelectorAll('.btn-slide'))
const slidesLenght = slides.length
let slidesPerView = 4
let currentIndexAbout = 0

function showAboutSlide(startIndex) {
    slides.forEach((slide, index)=>{
        if (index >= startIndex && index < startIndex + slidesPerView) {
            slide.style.display = 'block'
        } else {
            slide.style.display = 'none'
        }
    })
}

sliderAbout.querySelector('.btn-next').addEventListener('click', ()=>{
    if (currentIndexAbout < slidesLenght - slidesPerView) {
        currentIndexAbout++
        showAboutSlide(currentIndexAbout)
    } else {
        aboutSlider.querySelector('.btn-next').disabled = true;
    }
})


sliderAbout.querySelector('.btn-prev').addEventListener('click', ()=>{
    if (currentIndexAbout > 0) {
        currentIndexAbout--
        showAboutSlide(currentIndexAbout)
    }
})

function updateSlidesPerView() {
    if (window.innerWidth <= 600)
    {
        slidesPerView = 1;
    } else if (window.innerWidth <= 870) {
        slidesPerView = 2;
    } else if (window.innerWidth <= 1200) {
        slidesPerView = 3;
    } else {
        slidesPerView = 4;
    }
    showAboutSlide(currentIndexAbout);
}

showAboutSlide(currentIndexAbout) 
window.addEventListener('resize', updateSlidesPerView);

