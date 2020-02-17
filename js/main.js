
$('.owl-carousel').owlCarousel(
    {
        "autoplay": true,
        "autoplayTimeout": 4000,
        "items": 1,
        "loop": true,
        "itemsDesktop": [1199, 3],
        "itemsDesktopSmall": [979, 3],
        "nav": false,
        "dots": true,
        "onInitialized": "setDots",
        "onChanged": "setDots",
        "slideBy": 1,
        "animateOut": "fadeOut"
    }
);


$("#contact-form").submit(function (event) {
    event.preventDefault();

    // /* get some values from elements on the page: */
    let $form = $(this);
    let name = $form.find('#name').val();
    let surname = $form.find('#surname').val();
    let email = $form.find('#email').val();
    let message = $form.find('#message').val();
    let url = $form.attr('action');

    /* Send the data using post */
    var posting = $.post(url, {
        name: name,
        surname: surname,
        email: email,
        message: message
    });

    // /* Put the results in a div */
    posting.done(function (data) {
        $("#result").empty();
        content = jQuery.parseJSON(data);
        if (content.errors && content.errors.length) {
            content.errors.forEach((element) => {
                $("#result").append('<div class="msg error" >' + element.msg + '</div>');
            });
        }
        else if (content.success && content.success.length) {
            content.success.forEach((element) => {
                $("#result").append('<div class="msg success" >' + element.msg + '</div>');
            });
        }
    });
});