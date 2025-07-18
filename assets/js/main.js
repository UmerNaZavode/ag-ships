document.addEventListener("DOMContentLoaded", function () {

    // headerStyles()

    // toggleMenu()

    const contact_informations_btn = document.querySelector(".contact-informations__button");
    if (contact_informations_btn) {
        mapTabs()
    }

    const hero_section = document.querySelector(".hero-section")
    if (hero_section) {
        heroSlider()
    }

    function headerStyles() {
        const header = document.querySelector(".header-alt")
        console.log(header)

        const current_url = window.location.pathname
        if (current_url === "/") {
            header.classList.add("header-alt--home")
        }
        console.log(current_url)
    }

    function toggleMenu() {
        const burger = document.querySelector(".burger")
        const menu = document.querySelector(".header-main")
        burger.addEventListener("click", function () {
            menu.classList.toggle("active")
        })
    }

    function mapTabs() {
        const buttons = document.querySelectorAll(".contact-informations__button");
        const iframe = document.querySelector(".iframe");
        const src1 = "https://www.openstreetmap.org/export/embed.html?bbox=37.580430538065436%2C55.74703229248481%2C37.583906680948736%2C55.74829737986316&amp;layer=mapnik&amp;marker=55.74766484130172%2C37.58216860950711"
        const src2 = "https://www.openstreetmap.org/export/embed.html?bbox=29.70110893249512%2C60.20199974982952%2C29.718768596649173%2C60.20646734923844&amp;layer=mapnik&amp;marker=60.20423362558044%2C29.709938764572144"
        const sources = [
            src1, src2
        ]

        buttons.forEach((button, index) => {
            button.addEventListener("click", () => {
                buttons.forEach(btn => btn.classList.remove("is-active"));
                button.classList.add("is-active");

                iframe.setAttribute("src", sources[index])
            });
        });
    }

    function heroSlider() {
        const images = document.querySelectorAll(".background-img")
        const btn_prev = document.querySelector(".hero-section .navigation-btn__arrow--prev")
        const btn_next = document.querySelector(".hero-section .navigation-btn__arrow--next")
        let index = 0

        btn_prev.addEventListener("click", function () {
            if (index === 0) {
                index = images.length - 1
            } else {
                index -= 1
            }

            resetActive()
            setActive(index)
        })

        btn_next.addEventListener("click", function () {
            if (index === images.length - 1) {
                index = 0
            } else {
                index += 1
            }

            resetActive()
            setActive(index)
        })

        function setActive(index) {
            images[index].classList.add("active")
            setTimeout(() => {
                images[index].classList.add("show")
            }, 10)
        }

        function resetActive() {
            images.forEach(item => {
                item.classList.remove("show")
                item.classList.remove("active")
            })
        }
    }
});
