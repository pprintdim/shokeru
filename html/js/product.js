document.querySelectorAll('.prod__item-title').forEach(title => {
    title.addEventListener('click', () => {
        const currentItem = title.closest('.prod__item');
        const isActive = currentItem.classList.contains('active');
        document.querySelectorAll('.prod__item').forEach(item => {
            item.classList.remove('active');
        });
        if (!isActive) {
            currentItem.classList.add('active');
            if (window.innerWidth < 1000) {
                const offsetTop = currentItem.getBoundingClientRect().top + window.scrollY - 90;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    });
});


const thumbsSwiper = new Swiper('.prod__thumbs', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 24,
    watchSlidesProgress: true,
});
const mainSwiper = new Swiper('.prod__slider-inner', {
    slidesPerView: 1,
    navigation: {
      nextEl: '.prod__slider-next',
      prevEl: '.prod__slider-prev',
    },
    thumbs: {
      swiper: thumbsSwiper,
    },
    breakpoints: {
        1280: {
            spaceBetween: 24,
            slidesPerView: 2,
        },
    },
});