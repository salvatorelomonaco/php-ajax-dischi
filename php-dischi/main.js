$(document).ready(function() {

    $('.generi').click(function() {
        $('.generi').toggleClass('lighter-background');
    });

    $('.generi').change(function() {
        var genereSelettore = $('.generi').val();
        if (genereSelettore == '') {
            $('.song').show();
        } else {

            $('.song').hide();

            $('.song').each(function() {
                var genereCorrente = $(this).attr('data-genere');
                if (genereCorrente.toLowerCase() == genereSelettore.toLowerCase()) {
                    $(this).show();
                }
            });
        }
    });

    $(window).scroll(function() {
        var scroll_offset = $(window).scrollTop();
        if (scroll_offset > 0) {
            $("header").addClass("orange-border");
        } else {
            $("header").removeClass("orange-border");
        }
    });
});
