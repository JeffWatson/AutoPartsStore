<?php
?>

<!-- Modal -->
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hire Employee!</h4>
            </div>
            <div class="modal-body">
                <div class="admin_modal_employee">
                    <form id="admin_form">
                        <input id="admin_cust_id" type="text" name="admin_cust_id" class="hidden"/>
                        <label for="employee_id">Employee Id</label>
                        <input class="input-lg form-control" id="employee_id" type="text" name="employee_id" />
                        <label for="name">Employee Name</label>
                        <input class="input-lg form-control" id="name" type="text" name="name"/>
                        <label for="dept">Department</label>
                        <input class="input-lg form-control" id="dept" type="text" name="dept"/>
                        <label for="branch">Branch</label>
                        <select class="form-control" id="branch" name="branch">
                            <option value="north">North Branch</option>
                            <option value="south">South Branch</option>
                            <option value="east">East Branch</option>
                            <option value="west">West Branch</option>
                        </select>
                        <label for="salary">Salary</label>
                        <input class="input-lg form-control" id="salary" type="text" name="salary"/>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="admin_submit" type="button" class="btn btn-primary" data-dismiss="modal">Hire!
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->