<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Register Now!</h4>
            </div>
            <div class="modal-body">
                <form id="register_form">
                    <div>
                        <label for="username">Username</label>
                        <input class="input-lg" id="username" type="text" name="username" placeholder="Enter a Username."/>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input class="input-lg" id="password" type="password" name="password" placeholder="Enter a Password."/>
                    </div>
<!--                    <div>-->
<!--                        <label for="role">Your role</label>-->
<!--                        <input id="role" type="checkbox" name="role"/>-->
<!--                    </div>-->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="register_submit" type="button" class="btn btn-primary" data-dismiss="modal">Register!</button>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div><!-- /.modal -->