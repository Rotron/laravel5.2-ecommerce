$(document).ready(function() {
	$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});

	// Update item cart
	$(".btn-update-item").on('click', function(e){
		e.preventDefault();
		
		var id = $(this).data('id');
		var slug = $(this).data('slug');
		var href = $(this).data('href');
		var quantity = $("#product_" + id).val();

		window.location.href = "/cart/update/" + href + "/" + quantity;
	});

	$('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');
});

	$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value > 1) {
        value = value - 1;
    } else {
        value = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value < 100) {
        value = value + 1;
    } else {
        value =100;
    }
 
    $input.val(value);
});



        $('.product-info').find('a.add').click(function (event){
            event.preventDefault();
            var clicked = $(this); 
            $.ajax({
                url: $(this).attr('href')
                ,success: function(response) {
                
                   $(clicked).notify(
                    "Product Added", 
                    { className: 'success',  autoHide: true, style: 'bootstrap' }

                    );
                    totalcart();            
                }
            });
            return false; //for good measure
        });


function totalcart()
{  
    // jQuery async request
    $.ajax(
    {
        url: '/conta',
        dataType: "html",
        success: function(data) {
                $('#tot').html(data);
                $('#tot2').html(data);
                                },
        error: function(e) 
        {
            alert('Error: ' + e);
        }
    });
}

totalcart();

});
