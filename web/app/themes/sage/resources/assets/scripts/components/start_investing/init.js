function hoverSlider() {
    $('.start-investing__tab').hover(
        function () {
            $('.start-investing__tab').removeClass('active'),
            $(this).addClass('active')
        }
    );
}

hoverSlider();
