import { lte } from 'lodash';
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

function showSlodes(index) {
    slide.forEach((slides, i) => {
        if (i === index) {
            slides.classList.add('active')
        } else {
            slides.classList.remove('active')
        }
    })
}

showSlodes(currentIndex)

document.querySelector('.btn-prev').addEventListener('click', ()=>{
    currentIndex = (currentIndex - 1) % slide.length
    showSlodes(currentIndex)
    slider(currentIndex)
})

document.querySelector('.btn-next').addEventListener('click', ()=>{
    currentIndex = (currentIndex + 1) % slide.length
    showSlodes(currentIndex)
    slider(currentIndex)
})

if (currentIndex === 0) {
    btnPrev.classList.add('disabled')
}

if (currentIndex === slide.length - 1) {
    btnNext.classList.add('disabled')
}

