<?php
// TODO this needs to load the saved payments for editing.
?>

<div class="well">
    <form id="payment_form">
        <!-- TODO this needs to be a select -->
        <label for="type">Type</label>
        <select class="form-control" id="type" name="type">
            <option value="debit_card" selected>Debit Card</option>
            <option value="credit_card">Credit Card</option>
            <option value="cash">Cash on Delivery</option>
        </select>

        <label for="card_type">Card Type</label>
        <input class="input-lg form-control" id="card_type" type="text" name="card_type" placeholder="Enter a Card Type."/>

        <label for="ccn">Credit Card Number</label>
        <input class="input-lg form-control" id="ccn" type="text" name="ccn" placeholder="Enter Your Credit Card Number."/>

        <label for="billing_addr">Billing Address</label>
        <input class="input-lg form-control" id="billing_addr" type="text" name="billing_addr"
               placeholder="Enter Your Billing Address."/>

        <p>
            <button class="btn-primary btn-lg" type="button" id="payment_submit">Add Payment Information!</button>
        </p>
    </form>
</div>