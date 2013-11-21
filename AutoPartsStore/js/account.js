$(document).ready(function () {
    $('#type').on('change', function () {
        var $value = $(this).val();

        if($value == "cash")
        {
            $('#card_type').prop('disabled', true);
            $('#ccn').prop('disabled', true);
            $('#billing_addr').prop('disabled', true);
        } else {
            $('#card_type').prop('disabled', false);
            $('#ccn').prop('disabled', false);
            $('#billing_addr').prop('disabled', false);
        }
    });

    $(".admin_show_modal").click(function () {
        var cust_id = $(this).siblings("#cust_id").val();
        console.log(cust_id);
        $("#admin_cust_id").val(cust_id);
    });

    $('#admin_submit').click(function (event) {
        // variable to hold request
        var request;
        // abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $('#admin_form');
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /form.php
        request = $.ajax({
                url: "handlers/admin_escalate_handler.php",
            type: "POST",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // log a message to the console
            console.log("Hooray, it worked!");

            if (response.indexOf("ERROR") == -1) {
                alert(response);
                // no error
//                window.location.reload();
            } else {
                alert(response);
            }
        });

        // callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // log the error to the console
            console.error(
                "The following error occured: " +
                    textStatus, errorThrown
            );
        });

        // callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // reenable the inputs
            $inputs.prop("disabled", false);
        });

        // prevent default posting of form
        event.preventDefault();
    });
});