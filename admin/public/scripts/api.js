/**
 * Created by Djeff on 9/29/2019.
 */
function send_mail(formID) {
    var data=$(formID).serialize();
    $.post(api_url+'/send_email',data,function (response) {
        if (response.error){
            $("#anwer-success-msg").hide();
            $("#anwer-error-msg").show().html(response.error);
        }else if (response.success){
            $("#anwer-error-msg").hide();
            $("#anwer-success-msg").show().html(response.success);
            $("#answer-form input").val('');
            $("#answer-form textarea").val('');
        }
    },'json')
}
