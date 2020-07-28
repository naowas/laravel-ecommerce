<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

<script>
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

	function addToCart(product_id){
		var url = "{{ url('/') }}";
		$.post( url+"/api/carts/store",
			{
				product_id: product_id
			})
		  .done(function( data ) {
		  	data = JSON.parse(data);
		    if(data.status == 'success'){
		    	// toast
		    	alertify.set('notifier','position', 'top-center');
				alertify.success('Item added to cart successfully !! Total Items: '+data.totalItems+ '<br />To checkout <a href="{{ route('carts') }}">go to checkout page</a>');

		    	$("#totalItems").html(data.totalItems);
		    }
		  });
	}
</script>
{{--
<script>
    function addToCart(product_id){
        alert(product_id);
    }
</script> --}}
