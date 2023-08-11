export default () => {
    function sticky() {
        if(!$('body').hasClass('scroll')) {
            $('body').addClass('scroll');
        }
        if($(window).scrollTop()==0) {
            $('body').removeClass('scroll');
        }
    }
    $(document).on('scroll', function(){
        sticky();
    });
    sticky();

    const navElement = document.querySelector("header nav.navbar__nav");

    /*if (navElement) { // Check if the element exists
        const ulElement = document.createElement("ul");
        for (const { name, value } of navElement.attributes) {
            ulElement.setAttribute(name, value);
        }
        while (navElement.firstChild) {
            ulElement.appendChild(navElement.firstChild);
        }
        navElement.replaceWith(ulElement);

        const lastLiElement = document.querySelector(".navbar__nav>li:last-child");
        if (lastLiElement) { // Check if the element exists
            lastLiElement.setAttribute("data-popup", "hidden-content");
            lastLiElement.classList.add("header__button", "btn");
        }
    } else {
        console.error("Element not found: header nav.navbar__nav");
    }*/

};
