$(".formcomentario").submit(function ()
{
    var data = $(this).serialize();
    result = $(this).children('.result-comentario');
    agregarcomentario('?post=comentario', data, result, $('#myModal'), null);
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
