var inicio=function () {

	$(".cantidad").keyup(function(e){

		if($(this).val()!=''){

			if(e.keyCode==13){

				var id=$(this).attr('data-id');

				var precio=$(this).attr('data-precio');

				var cantidad=$(this).val();

				$(this).parentsUntil('.producto1').find('.subtotal').text('subtotal: '+(precio*cantidad));

				$.post('./modificarcarrito.php',{

					id:id,

					precio:precio,

					cantidad:cantidad

				},function(e){

						$("#total").text('total: '+e);

				});

			}

		}

	});

}

$(document).on('ready',inicio);