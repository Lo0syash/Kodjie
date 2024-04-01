import './bootstrap';

let ellipse = document.querySelectorAll('.ellipse');
let slide = document.querySelectorAll('.banner-slide');
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

for (let i = 0; i < ellipse.length; i++) {
    ellipse[i].addEventListener('click', ()=> slider(i))
}

