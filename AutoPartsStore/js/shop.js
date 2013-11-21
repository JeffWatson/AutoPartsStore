$(document).ready(function () {
    var $date_time = $('#cf_date_time');
    var $payment = $('#cf_payment');
    var $parts = $('#cf_parts');
    var $total_price = $('#cf_total_price');
    var $price_container = $('#cart_modal_total');

    var $cart = [];
    var $total = 0;

    $('.add-to-cart').click(function () {
        var $part = $(this).parents('.part')[0];
        var $part_num = $($part).children('.id').attr('meta');
        var $price = Number($($part).children('.price').attr('meta'));

        $cart.push($part_num);
        $total += $price;

        console.log("price" + $price);
        console.log("total = " + $total);

        // jQuery.now() returns microseconds! we want millis...
        $($date_time).val(jQuery.now() / 1000);
        $($payment).val();
        $($parts).val($cart);
        $($total_price).val($total);
        $($price_container).html($total.toFixed(2));
    });

    $('#checkout_submit').click(function (event) {
        // variable to hold request
        var request;
        // abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $('#cart_form');
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /form.php
        request = $.ajax({
            url: "handlers/cust_order_handler.php",
            type: "POST",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // log a message to the console
            console.log("Hooray, it worked!");

            if (response.indexOf("ERROR") == -1) {
                $form[0].reset();
                alert(response);
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

    $('#cart').click(function (event) {
        // variable to hold request
        var request;
        // abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $('#cf_parts');
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /form.php
        request = $.ajax({
            url: "handlers/get_part_details_handler.php",
            type: "GET",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // log a message to the console
            console.log("Hooray, it worked!");

            if (response.indexOf("ERROR") == -1) {
                $('#cart_modal_parts').html(response);
//                $form[0].reset();
//                alert(response);
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