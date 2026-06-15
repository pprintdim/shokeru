(() => {
    let catalogLoading = false;

    function getCatalogParts(html) {
        const doc = new DOMParser().parseFromString(html, "text/html");

        return {
            items: doc.querySelectorAll(".shop__results .shop__item"),
            bottom: doc.querySelector(".shop__bottom")
        };
    }

    function updateCatalog(url, mode) {
        const resultsContainer = document.querySelector(".shop__results");
        const bottomContainer = document.querySelector(".shop__bottom");

        if (!url || !resultsContainer || catalogLoading) return;

        catalogLoading = true;
        document.querySelectorAll(".shop__more[data-next-url]").forEach(button => {
            button.disabled = true;
            button.classList.add("loading");
        });

        fetch(url, {
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Failed to load products");
                }

                return response.text();
            })
            .then(html => {
                const catalogParts = getCatalogParts(html);

                if (mode === "append") {
                    catalogParts.items.forEach(item => {
                        resultsContainer.appendChild(item);
                    });
                } else {
                    resultsContainer.replaceChildren(...catalogParts.items);
                    resultsContainer.scrollIntoView({ behavior: "smooth", block: "start" });
                }

                if (catalogParts.bottom) {
                    if (bottomContainer) {
                        bottomContainer.replaceWith(catalogParts.bottom);
                    } else {
                        resultsContainer.insertAdjacentElement("afterend", catalogParts.bottom);
                    }
                } else if (bottomContainer) {
                    bottomContainer.remove();
                }

                if (typeof window.syncProductCartButtons === "function") {
                    window.syncProductCartButtons();
                }

                if (typeof window.syncWishlistButtons === "function") {
                    window.syncWishlistButtons();
                }

                window.history.replaceState({}, "", url);
            })
            .catch(() => {
                document.querySelectorAll(".shop__more[data-next-url]").forEach(button => {
                    button.disabled = false;
                    button.classList.remove("loading");
                });
            })
            .finally(() => {
                catalogLoading = false;
            });
    }

    document.addEventListener("click", event => {
        const loadMoreButton = event.target.closest(".shop__more[data-next-url]");
        if (loadMoreButton) {
            event.preventDefault();
            updateCatalog(loadMoreButton.dataset.nextUrl, "append");
            return;
        }

        const pageLink = event.target.closest(".shop__pages-content a[href]");
        if (pageLink) {
            event.preventDefault();
            updateCatalog(pageLink.href, "replace");
        }
    });
})();

const headerTopMenu = document.querySelector('.header__top-menu');
const headerTopContainer = document.querySelector('.header__top');
const headerMenuInner = document.querySelector('.header__menu-inner');
let moved = false;
function handleResize() {
    if (window.innerWidth < 1000 && !moved) {
        if (headerTopMenu && headerMenuInner) {
            headerMenuInner.appendChild(headerTopMenu);
            moved = true;
        }
    } else if (window.innerWidth >= 1000 && moved) {
        if (headerTopMenu && headerTopContainer) {
            headerTopContainer.appendChild(headerTopMenu);
            moved = false;
        }
    }
}
handleResize();
window.addEventListener('resize', handleResize);

document.addEventListener('DOMContentLoaded', function() {
    const langSelectedAll = document.querySelectorAll('.header__lang-selected');
    langSelectedAll.forEach(langSelected => {
        const langBlock = langSelected.closest('.header__lang');
        langSelected.addEventListener('click', function(e) {
            e.preventDefault();
            langBlock.classList.toggle('active');
        });
        document.addEventListener('click', function(e) {
            if (!langBlock.contains(e.target)) {
                langBlock.classList.remove('active');
            }
        });
    });

    const openMenuBtn = document.querySelector('.menu-open');
    const closeMenuBtn = document.querySelector('.menu-close');
    const headerMenu = document.querySelector('.header__menu');
    openMenuBtn.addEventListener('click', () => {
        headerMenu.classList.add('active');
    });
    closeMenuBtn.addEventListener('click', () => {
        headerMenu.classList.remove('active');
    });

    const loginOpen = document.querySelectorAll('.header__login');
    const loginClose = document.querySelector('.userPopup__close');
    const userPopup = document.querySelector('.userPopup');
    loginOpen.forEach(element => {
        element.addEventListener('click', () => {
            userPopup.classList.add('active');
            setTimeout(() => {
                headerMenu.classList.remove('active');
            }, 300);
        });
    });
    loginClose.addEventListener('click', () => {
        userPopup.classList.remove('active');
    });
    const forgotPasswordLink = document.querySelector('.userPopup__form-forgot');
    const passwordRecoverySection = document.querySelector('section[data-userData="password-recovery"]');
    if (forgotPasswordLink && passwordRecoverySection) {
        forgotPasswordLink.addEventListener('click', function(event) {
            event.preventDefault();
            userPopup.classList.remove('active');
            passwordRecoverySection.classList.add('active');
        });
    }

    const closeButtons = document.querySelectorAll('.userData__close');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const parentUserData = this.closest('[data-userData]');
            if (parentUserData) {
                parentUserData.classList.remove('active');
            }
        });
    });


    const userPopuBtn = document.querySelectorAll('.userPopup__btn');
    const userPopuResult = document.querySelectorAll('.userPopup__result');
    const userPopypSelect = document.querySelector('.userPopup__select');

    userPopuBtn.forEach(button => {
        button.addEventListener('click', () => {
            userPopuBtn.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            userPopuResult.forEach(result => result.classList.remove('active'));
            const targetResult = document.querySelector(`.userPopup__result[data-userPopup-result="${button.dataset.userpopupSelect}"]`);
            targetResult.classList.add('active');
            if (button.dataset.userpopupSelect === 'login') {
                userPopypSelect.classList.add('userPopup__select-login');
            } else {
                userPopypSelect.classList.remove('userPopup__select-login');
            }
        });
    });


    const showPasswordButtons = document.querySelectorAll('.form-show-password');
    showPasswordButtons.forEach(button => {
        button.addEventListener('click', () => {
            const passwordInput = button.nextElementSibling;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                button.classList.add('showed');
            } else {
                passwordInput.type = 'password';
                button.classList.remove('showed');
            }
        });
    });

    const searchBtn = document.querySelector('.header__search-open');
    const searchBlock = document.querySelector('.header__search');
    if (searchBtn && searchBlock) {
        searchBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            searchBlock.classList.add('active');
        });
        searchBlock.addEventListener('click', function (e) {
            e.stopPropagation();
        });
        document.addEventListener('click', function () {
            searchBlock.classList.remove('active');
        });
    }

    const busket = document.querySelector('.busket');
    const busketOpenButton = document.querySelector('.cart-open');
    const busketCloseButton = document.querySelector('.busket__close');
    const busketInner = document.querySelector('.busket__inner');
    if (busketOpenButton) {
        busketOpenButton.addEventListener('click', () => {
            if (busket) {
                busket.classList.toggle('active');
                busketOpenButton.classList.toggle('opened');
            }
        });
        busketCloseButton.addEventListener('click', () => {
            if (busket) {
                busket.classList.remove('active');
                busketOpenButton.classList.remove('opened');
            }
        });
    }
    document.addEventListener('click', (event) => {
        if (busket && busket.classList.contains('active')) {
            if (!busketInner.contains(event.target) && event.target !== busketOpenButton) {
                busket.classList.remove('active');
                busketOpenButton.classList.remove('opened');
            }
        }
    });
    if (busketInner) {
        busketInner.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    if (typeof Swiper !== "undefined") {
        let heroSwiper = new Swiper(".hero__slider", {
            loop: false,
            spaceBetween: 0,
            slidesPerView: 1,
            allowTouchMove: true,
            navigation: {
                nextEl: ".hero__slider-next",
                prevEl: ".hero__slider-prev",
            },
            pagination: {
                el: ".hero__slider-pagination",
                clickable: true,
            },
        });

        let productSlider = new Swiper(".productSlider__slider", {
            loop: true,
            spaceBetween: 15,
            slidesPerView: 1,
            allowTouchMove: true,
            navigation: {
                nextEl: ".productSlider-next",
                prevEl: ".productSlider-prev",
            },
            breakpoints: {
                768: {
                    spaceBetween: 20,
                    slidesPerView: 2,
                },
                1000: {
                    spaceBetween: 20,
                    slidesPerView: 3,
                },
                1280: {
                    spaceBetween: 24,
                    slidesPerView: 4,
                },
            },
        });

        let safemodeSwiper = new Swiper(".safemode__slider", {
            loop: false,
            spaceBetween: 10,
            slidesPerView: 1,
            allowTouchMove: true,
            navigation: {
                nextEl: ".safemode__slider-next",
                prevEl: ".safemode__slider-prev",
            },
            pagination: {
                el: ".safemode__slider-pagination",
                clickable: true,
            },
        });
        let safemode_ImageSlider = new Swiper(".safemode__image-slider", {
            loop: false,
            spaceBetween: 10,
            slidesPerView: 1,
            allowTouchMove: true,
        });
        safemodeSwiper.controller.control = safemode_ImageSlider;
        safemode_ImageSlider.controller.control = safemodeSwiper;


        let safeImageSwiper = new Swiper(".safeImage__slider", {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 1.5,
            allowTouchMove: true,
            centeredSlides: true,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 3,
                },
            },     
        });
    }

});


resizeHeight()
function resizeHeight(){
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}
window.addEventListener('resize', () => {
  resizeHeight()
});





document.querySelectorAll('.faq__item-title').forEach(title => {
    title.addEventListener('click', () => {
        const item = title.closest('.faq__item');
        const isActive = item.classList.contains('active');
        document.querySelectorAll('.faq__item').forEach(i => i.classList.remove('active'));
        if (!isActive) {
            item.classList.add('active');
        }
    });
});
