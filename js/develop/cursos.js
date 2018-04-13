$(document).ready(function () {
    $('#cursos nav-item dropdown').addClass('active');
    $("#myCarousel").carousel({
        interval: 3000
    });
    AOS.init({
        offset: 200,
        duration: 600,
        easing: 'ease-in-sine',
        delay: 100,
    });
})