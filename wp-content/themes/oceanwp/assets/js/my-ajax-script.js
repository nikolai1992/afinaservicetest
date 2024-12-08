jQuery(document).ready(function ($) {
    $('#changeBraSizeForm').on('submit', function (e) {
        e.preventDefault();
        var braSize = $('input[name="braSize"]').val();
        $.ajax({
            type: 'POST',
            url: my_ajax_object.ajax_url,
            data: {
                action: 'my_ajax_action',
                nonce: my_ajax_object.nonce,
                braSize: braSize,
            },
            success: function (response) {
                response = response === 0 ? 'Недопустимый размер.' : response;

                $('#result').text(response);
                $(".result-div").show('slow', function () {
                    var scrollPos =  $(".result-div").offset().top - 210;
                    $(window).scrollTop(scrollPos);
                });

            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });
});
