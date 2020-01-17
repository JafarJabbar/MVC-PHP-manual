/**
 * Created by Djeff on 9/27/2019.
 */
function contact(formId) {
    var data = $(formId).serialize();
    $.post(api_url + '/contact', data, function (response) {
        if (response.error) {
            $('#contact-success-msg').hide();
            $('#contact-error-msg').show().html(response.error);
        } else if (response.success) {
            $('#contact-error-msg').hide();
            $('#contact-success-msg').show().html(response.success);
            $("#contact-form input").val('');
            $("#contact-form textarea").val('');
        }
    }, 'json');


}
