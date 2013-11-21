<div class="well">
    <form id="cust_account_form">
        <label for="name">Your Name</label>
        <input class="input-lg form-control" id="name" type="text" name="name" placeholder="Enter Your Name."/>

        <label for="address">Address</label>
        <input class="input-lg form-control" id="address" type="text" name="address" placeholder="Enter Your Address."/>

        <label for="branch_pref">Branch Preference</label>
        <select class="form-control" id="branch_pref" name="branch_pref">
            <option value="north">North Branch</option>
            <option value="south">South Branch</option>
            <option value="east">East Branch</option>
            <option value="west">West Branch</option>
        </select>

        <p>
            <button class="btn-primary btn-lg" type="button" id="cust_account_submit">Save Your Changes!</button>
        </p>
    </form>
</div>