document.addEventListener("DOMContentLoaded", function () {
    const scrollContainers = [...document.querySelectorAll(".scrollContainer")];
    const nextButtons = [...document.querySelectorAll(".next")];
    const prevButtons = [...document.querySelectorAll(".prev")];

    const scrollAmount = 300; // Jumlah scroll dalam piksel

    // Loop melalui semua scrollContainers
    scrollContainers.forEach((scrollContainer, i) => {
        // Tombol Next
        nextButtons[i].addEventListener("click", function () {
            scrollContainer.scrollBy({
                top: 0,
                left: scrollAmount,
                behavior: "smooth",
            });

            
        });

        // Tombol Prev
        prevButtons[i].addEventListener("click", function () {
            scrollContainer.scrollBy({
                top: 0,
                left: -scrollAmount,
                behavior: "smooth",
            });
        });
    });
});


document.addEventListener('scroll', function(){
    navbar = document.querySelector('.nav');
    fixednav = navbar.getBoundingClientRect().top;
    console.log(fixednav)
    if(window.pageYOffset > fixednav ){
        navbar.classList.add('fixed-active')
        navbar.classList.add('fixed-blur')
    }else{
        navbar.classList.remove('fixed-active')
        navbar.classList.remove('fixed-blur')
    }
});