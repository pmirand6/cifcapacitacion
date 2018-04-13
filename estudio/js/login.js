/* version 1.1 */
$(document).ready(function() {
    // DOM ready
    $('#form-login').on('submit' ,function(e){
        e.preventDefault();
        if(setProfile()){
            window.location.href = getCurrentHostname() + '/estudio/modulo/consulta.php';;
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
        url: getCurrentHostname() + '/estudio/ajax/ajx-login.php',
        type: "POST",
        data: parametros,
        contentType: "application/x-www-form-urlencoded",
        async: false,
        success: function (data) {
            if (data.indexOf("ERROR") == -1) {
                respuesta = true;
            } else {
                respuesta = false;
            }
        }
    });
    return respuesta;
}



function getCurrentHostname(){
    var protocolo, url, var_port, port;

    protocolo = window.location.protocol;
    url = window.location.hostname;
    var_port = window.location.port;

    if (var_port !== '') {
        port = ':' + var_port;
    } else {
        port = '';
    }

    return protocolo + '//' + url + port;
}