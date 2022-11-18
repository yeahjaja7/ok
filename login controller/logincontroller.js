  
function hideOrShowPassword() {
var password1, password2, check;

password1 = document.getElementById("password1");
check = document.getElementById("ver");

if (check.checked == true) // Si la checkbox de mostrar contraseña está activada
{
    password1.type = "text";

} else // Si no está activada 
{
    password1.type = "password";

}
}



$('#btnLogin').click(function(e)
{
    login();
})

function login()
{

var datos= new FormData();
datos.append('correo_u_i',$('#correo_u_i').val()); 
datos.append('password1',$('#password1').val()); 


$.ajax({

    type: "post",
    url: "model/login/logeo.php",
    data: datos,
    processData: false,
    contentType: false,
    success: function (respuesta) 
    {


        if(respuesta=="correcto")
        {
                    Swal.fire(
                    '¡Haz iniciado correctamente!',
                    'Bienvenido',
                    'success'
                    )
                .then(function() {
                    window.location = "view/inicio/index.php";
                    });
        }
        else
        {
                    Swal.fire(
                    'Falla en el inicio de sesion',
                    respuesta,
                    'error'
                    )
        }
    }
                        
});

}
