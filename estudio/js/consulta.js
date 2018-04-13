$(document).ready(function() {

    llenar_grilla();

});



function llenar_grilla(){
    var url="../json/getJSONconsultas.php";
    $("#jsondata tbody").html("");
    $.getJSON(url,function(data){
        $.each(data.cliente_consulta, function(i,user){
            var newRow =
                            // Se crean las filas de la tabla (en este caso la #jsondata) y se le hace un append al tbody
                            //Ademas se le adjunta de esta forma= user . "columna de la BD"
                            // Ejemplo user (json generado por el PHP) . + id_usuario (columna de la tabla usuario)
                            "<tr>"
                            +"<td>"+user.fecha+"</td>"
                            +"<td>"+user.nombre+"</td>"
                            +"<td>"+user.apellido+"</td>"
                            +"<td>"+user.Tipo+"</td>"
                            +"<td>"+user.Resumen+"</td>"
                            +"</tr>" ;
                            $(newRow).appendTo("#jsondata tbody");
                        });
    });


};  

