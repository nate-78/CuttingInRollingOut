var $ = jQuery;

$(document).ready(function () {
    $('a').click(function (e) {
        e.preventDefault();
        let url = $(this).attr('href');
        if (url.indexOf('#') > -1) {
            let anchor = url.split('#')[1];
            $('html, body').animate({
                scrollTop: $('#' + anchor).offset().top
            }, 1000);
        } else {
            window.location.href = url;
        }
    });
});