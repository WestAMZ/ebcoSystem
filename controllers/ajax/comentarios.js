$(".formcomentario").submit(function ()
{
    var data = $(this).serialize();
    var id = $(this).children("[name = 'Id_Insidencia']").val();
    var result = $(this).children('.result-comentario');
    var comentarios = $(this).children('.collection');
    agregarcomentario('?post=comentario', data, result, $('#myModal'), $('#message'));
    //loadComentarios(comentarios,result,id);
    window.location.reload();
    return false;
});
/*-------
            AJAX
---------*/
function agregarcomentario(url,data,result,modal,message_area_modal)
{
    http = Connect();
    http.onreadystatechange = function ()
    {
         if (http.readyState == 4 && http.status == 200)
         {
                if (http.responseText == 1)
                {
                    message_area_modal.html("<img src='views/img/success.png'></img> comentando correctamente !!");
                    modal.openModal();
                    result.html('');
                } else
                {
                    text = '<div class="alert alert-dismissible alert-danger">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' + http.responseText + '</div>';
                    result.html(http.responseText);
                }

        }
        else if (http.readyState != 4)
        {
            text = '<div class="alert alert-dismissible alert-info">' +
                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<img src="views/img/load.gif"></img> Procesando informacion ! </div>';
            result.html(text);
        }
    }
    http.open('POST',url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
}

/*-------
            AJAX Metodos load
---------*/


function loadComentarios(div,result , id)
{
    http = Connect();
    http.onreadystatechange = function()
    {
        if(http.readyState == 4 && http.status ==200)
        {
            div.html(http.responseText);
            result.html('');
        }
        else if(http.readyState != 4)
        {
            text = '<div class="alert alert-dismissible alert-info center s12 m12">' +
                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<img src="views/img/load2.gif"></img> Cargando...</div>';
            div.html(text);
        }
    }
    http.open('GET','?get=comentarios&id='+ id);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(null);
}

