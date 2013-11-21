$(document).ready(function (){
    var $search_container = $('#shop_container');

    $('#search_box').on('keyup', function () {
        var $name, $id, $price, $details, $quantity;
        var $query = $(this).val();

//        console.log("QUERY: " + $query);

        $($search_container).find('.part').each(function(index){
//            console.log("got part: " + index);

            $name = $(this).find('.name').html();
            $id = $(this).find('.id').attr('meta');
            $price = $(this).find('.price').attr('meta');
            $details = $(this).find('.details').attr('meta');
            $quantity = $(this).find('.quantity').attr('meta');

//            console.log($name + $id + $price + $details + $quantity);

            // if any of the variable contain the search term, unhide them.
            if($name.indexOf($query) !== -1 || $id.indexOf($query) !== -1
                || $price.indexOf($query) !== -1 || $details.indexOf($query) !== -1
                || $quantity.indexOf($query) !== -1)
            {
//                console.log('index ' + index + " passes");
                var $isHidden = $(this).hasClass('hidden');

                if($isHidden)
                {
                    $(this).removeClass('hidden');
                }
            } else
            {
                $(this).addClass('hidden');
            }
        });



    });
});