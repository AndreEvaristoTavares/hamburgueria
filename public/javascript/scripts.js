$(document).ready(function(){
    $('#btn-menu').on('click', function(){
        $('#nav-list').toggleClass('active');
        $('#icon-open-close').toggleClass('fa-x')
    })
    ScrollReveal().reveal('section', {
        origin: 'left',
        duration: 1000,
        distance: '20%',
    });
})