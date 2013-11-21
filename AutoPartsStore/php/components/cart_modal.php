<!-- Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">My Cart!</h4>
            </div>
            <div class="modal-body">
                <div id="cart_modal_parts" class="cart_modal_parts"></div>
                <div>Order Total: $<span id="cart_modal_total">0.00</span></div>
                <select id="cf_payment" name="cf_payment" class="cart_modal_payment_select">
                    <?php
                    foreach ($_SESSION['payments'] as $item) {
                        if($item['type'] != "cash") {
                            echo "<option value='{$item['id']}'>{$item['card_type']} {$item['ccn']}</option>";
                        } else {
                            echo "<option value='{$item['id']}'>Cash On Delivery</option>";
                        }
                    }
                    ?>
                </select>
                <div class="cart_modal_payment">
                    <form id="cart_form" class="hidden">
                        <input id="cf_date_time" type="text" name="cf_date_time"/>
                        <input id="cf_parts" type="text" name="cf_parts"/>
                        <select id="cf_payment" name="cf_payment" class="cart_modal_payment_select">
                            <?php
                            foreach ($_SESSION['payments'] as $item) {
                                if($item['type'] != "cash") {
                                echo "<option value='{$item['id']}'>{$item['card_type']} {$item['ccn']}</option>";
                                } else {
                                echo "<option value='{$item['id']}'>Cash On Delivery</option>";
                                }
                            }
                            ?>
                        </select>
                        <input id="cf_total_price" type="text" name="cf_total_price"/>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="checkout_submit" type="button" class="btn btn-primary" data-dismiss="modal">Check Out!
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->