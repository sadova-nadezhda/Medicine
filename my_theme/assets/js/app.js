
window.addEventListener("load", function () {
    let header = document.querySelector('header');
    headerScroll()

    function headerScroll() {
        if (window.scrollY > header.offsetTop) {
            header.classList.add('scroll');
        } else {
            header.classList.remove('scroll');
        }
    }

    window.addEventListener('scroll', headerScroll);

    const button = document.querySelector(".header__burger");
    const btnClose = document.querySelector(".header__close");
    const menu = document.querySelector(".header__opened");

    button.addEventListener('click', (event) => {
        menu.classList.add('active');
    });

    btnClose.addEventListener('click', (event) => {
        menu.classList.remove('active');
    });

    var swiper = new Swiper(".clinicsSwiper", {
        slidesPerView: "auto",
        spaceBetween: 30,
    });

    // input mask tel
    $.fn.setCursorPosition = function (pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select();
        }
    };
    $('input[type="tel"]')
        .click(function () {
            $(this).setCursorPosition(3);
        })
        .mask("+7(999)999-99-99");


    // popup

    let popup = document.querySelector("#popup");
    if (popup) {
        let popupBtn = document.querySelectorAll(".popup-btn");
        $(popupBtn).each(function () {
            $(this).on('click', () => {
                $(popup).fadeIn(400);
            })
        });
        $(popup).click(function (e) {
            const target = e.target;
            if (
                $(target).hasClass("popup__close") ||
                $(target).hasClass("popup")
            ) {
                $(popup).fadeOut(400);
            }
        });
    }

    $('.nice-select').niceSelect();

});
