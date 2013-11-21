$(document).ready(function () {
    $('#emp_order_select').on('change', function () {
        // variable to hold request
        var request;
        // abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $('#emp_order_reports');
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /form.php
        request = $.ajax({
            url: "handlers/emp_report_handler.php",
            type: "GET",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // log a message to the console
            console.log("Hooray, it worked!");

            if(response.indexOf("ERROR") == -1)
            {
                // no error, set html content.
                $('#order_data').html(response);

            } else
            {
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

    $('#emp_reorder_submit').click(function () {
        // variable to hold request
        var request;
        // abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $('#emp_reorder_parts');
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /form.php
        request = $.ajax({
            url: "handlers/emp_reorder_handler.php",
            type: "POST",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // log a message to the console
            console.log("Hooray, it worked!");

            if(response.indexOf("ERROR") == -1)
            {
                // no error
                alert(response);
            } else
            {
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
    });

    $('.cust_order_remove_submit').click(function () {
        // variable to hold request
        var request;
        // abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this).parent('#cust_remove_order');
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /form.php
        request = $.ajax({
            url: "handlers/cust_order_remove_handler.php",
            type: "POST",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // log a message to the console
            console.log("Hooray, it worked!");

            if(response.indexOf("ERROR") == -1)
            {
                // no error
                window.location.reload();
            } else
            {
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
    });
});