

$('#cerrar_sesion').click(function(e)
{
  
	const swalWithBootstrapButtons = Swal.mixin
	({
		customClass: 
		{
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	})

		swalWithBootstrapButtons.fire
		({
		title: 'Cerrar sesion',
		text: "¿Estas seguro de cerrar sesion?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Estoy seguro',
		cancelButtonText: 'No, cancelalo',
		reverseButtons: true
		})
		.then((result) => 
		{
		if (result.isConfirmed) 
		{
			cerrar();
		} 
		})
    })






function cerrar()
{
	$.ajax({  
            type : 'POST',
            url  : '../../model/login/outlog.php',
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) 
            {  
              if(data=="OK")
              {
                   Swal.fire
                  (
					'Sesion cerrada',
					'vuelve pronto',
					'success'
                  )
                  .then(function() {
                        window.location = '../../index.php';
                        });                            
              }
              else
              {
                    Swal.fire
                   (
                    'Falla',
                    data,
                    'error'
                    )
               }
            }  
        });
}
