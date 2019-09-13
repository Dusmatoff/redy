//Show modals for success form
//Join the club form
document.addEventListener('wpcf7mailsent', function(event) {
    if ('180' == event.detail.contactFormId || '183' == event.detail.contactFormId) {
        $('.popup-content').removeClass('active');
        $('.popup-wrapper, .popup-content[data-rel="thanks-popup"]').addClass('active');
        $('html').addClass('overflow-hidden');
    }
}, false);
//Join the club form validation
document.addEventListener('wpcf7submit', function(event) {
    if ('180' == event.detail.contactFormId) {
        if ($(".wpcf7-form-control").hasClass('wpcf7-not-valid')) {
            $(".wpcf7-not-valid").css("border", "3px solid #000");
        }
    }
}, false);

//Contact form validation
document.addEventListener('wpcf7submit', function(event) {
    if ('183' == event.detail.contactFormId) {
        if ($(".wpcf7-form-control").hasClass('wpcf7-not-valid')) {
            $(".wpcf7-not-valid").css("border", "2px solid #BE0611");
        }
    }
}, false);
//add class active to menu item
$('.current-menu-item').children().addClass('active');