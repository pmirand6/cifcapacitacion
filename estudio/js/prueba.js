/* version 1.1 */
$(document).ready(function() {
    // DOM ready
    $('#form-login').on('submit' ,function(e){
        e.preventDefault();
        if(setProfile()){
            window.location.href = '../modulo/consulta.php';
        }else{
            alert("Verifique el usuario y la contraseña introducidos")
        };
    });
});
function setProfile(){
    var respuesta;
    var parametros = {
        "oper": "logUser",
        "usuario": $('#inputUser').val(),
        "password": $('#inputPassword').val()
    };
    $.ajax({
        url: 'ajx-login.php',
        type: "POST",
        data: parametros,
        contentType: "application/x-www-form-urlencoded",
        async: false,
        success: function (data) {
            if (data.indexOf("ERROR") == -1) {
                if($('#remember_me').prop('checked')) {sessionStorage.setItem("REVL-RememberUser", $('#inputUser').val());};
                respuesta = true;
            } else {
                respuesta = false;
            }
        }
    });
    return respuesta;
}