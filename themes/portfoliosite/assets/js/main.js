document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const closeNav = document.querySelector('.close-menu');
    const headMenu = document.querySelector('.header-menu');

    hamburger.addEventListener('click', () => {
        headMenu.classList.add('is-active');
        hamburger.classList.add('fade-out');
        closeNav.classList.add('is-active');
    });

    closeNav.addEventListener('click', () => {
        headMenu.classList.remove('is-active');
        hamburger.classList.remove('fade-out');
        closeNav.classList.remove('is-active');
    });

    headMenu.addEventListener('click', () => {
        headMenu.classList.remove('is-active');
        hamburger.classList.remove('fade-out');
        closeNav.classList.remove('is-active');
    });

    window.addEventListener('scroll', () => {
        const topBtn1 = document.querySelector('.top-btn1');
        const topBtn2 = document.querySelector('.top-btn2');
        const targetSection = document.getElementById('contact');

        const rect = targetSection.getBoundingClientRect();
  
        if (window.innerWidth <= 768) {
            if (rect.top <= innerHeight) {
                topBtn2?.classList.add('is-active');
            } else {
                topBtn2?.classList.remove('is-active');
            }
        } else {
            if (rect.top <= innerHeight) {
                topBtn1?.classList.add('is-active');
            } else {
                topBtn1?.classList.remove('is-active');
            }
        }
    });

    let timer = 0;
    window.addEventListener('resize', () => {
        const topBtn1 = document.querySelector('.top-btn1');
        const topBtn2 = document.querySelector('.top-btn2');

        if (timer > 0) {
            clearTimeout(timer);
        }

        timer = setTimeout(() => {
            if (window.innerWidth <= 768) {
                topBtn1?.classList.remove('is-active');
            } else {
                topBtn2?.classList.remove('is-active');
            }
        }, 100);
    });

    const wrapper = document.getElementById('slideshow');
    const slides = wrapper?.querySelectorAll('img');
    const dotsContainer = document.getElementById('dotsContainer');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentIndex = 0;
    const totalSlides = slides?.length;

    if (totalSlides >= 2) {

        for (let i = 0; i < totalSlides; i ++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => moveSlide(i));
            dotsContainer.appendChild(dot);
        }

        const dots = document.querySelectorAll('.dot');

        function moveSlide(index) {
            currentIndex = index;

            if (currentIndex >= totalSlides) currentIndex = 0;
            if (currentIndex < 0) currentIndex = totalSlides - 1;

            const translateValue = currentIndex * -100;
            wrapper.style.transform = `translateX(${translateValue}%)`;

            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentIndex].classList.add('active');
        }

        nextBtn.addEventListener('click', () => moveSlide(currentIndex + 1));
        prevBtn.addEventListener('click', () => moveSlide(currentIndex - 1));

        let autoPlay = setInterval(() => moveSlide(currentIndex + 1), 5000);

        [prevBtn, nextBtn, ...dots].forEach(el => {
            el.addEventListener('click', () => {
                clearInterval(autoPlay);
                autoPlay = setInterval(() => moveSlide(currentIndex + 1), 5000);
            });
        });
    } else {
        prevBtn.classList.add('fade-out');
        nextBtn.classList.add('fade-out');
    };
});