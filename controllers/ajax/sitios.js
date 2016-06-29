/*-----------
                ON load
-------------*/
$(document).ready(function ()
{
    $('.sitio').click(
    function ()
    {
        $('.sitio').removeClass('selected');
        $(this).toggleClass('selected');
        var id_mod = $(this).children(0).html();
        var form = $('#formsitio');
        getSitio(id_mod);
    });
});
/*-----------
                ON submit
-------------*/
$("#formsitio").submit(function () {
        var data = $("#formsitio").serialize();
        var result = $('#result');
        var table = $('#table');
        var modal = $('#myModal');
        var ms = $('#message');

        if($('[name = "editar"]').prop('checked') == false)
        {
            addsitio('?post=sitio', data, result, modal, ms);
            setTimeout(loadSitios(table,result,modal, ms,6000));
        }
        else
        {
            if($('.selected').size() == 0)
            {
                alert('debe seleccionar el sitio a modificar!');
            }
            else
            {
                alert('hay un sitio seleccionado!');
            }
        }
        return false;
    });
/*-------
            AJAX
---------*/

function addsitio(url,data,result,modal,message_area_modal)
{
    http = Connect();
    http.onreadystatechange = function ()
    {
         if (http.readyState == 4 && http.status == 200)
         {

            if (http.responseText == 1)
            {
                message_area_modal.html("<img src='views/img/success.png'></img> El sito ha sido registrado satisfactoriamente");
                modal.openModal();
                result.html('');
            }
            else
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
                '<img src="views/img/load.gif"></img> Procesando acción...</div>';
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


function loadSitios(table,result,modal,message_area_modal)
{
    http = Connect();
    http.onreadystatechange = function()
    {
        if(http.readyState == 4 && http.status ==200)
        {
            table.html(http.responseText);
            message_area_modal.html("<img src='views/img/success.png'></img> El sito ha sido registrado satisfactoriamente");
            modal.openModal();
            result.html('');
        }
        else if(http.readyState != 4)
        {
            text = '<div class="alert alert-dismissible alert-info center s12 m12">' +
                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<img src="views/img/load2.gif"></img> Cargando...</div>';
            table.html(text);
        }
    }
    http.open('GET','?get=sitios');
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(null);
}


/*
    Load sitio unico
*/

function getSitio(id)
{
    http = Connect();
    http.onreadystatechange = function()
    {
        if(http.readyState == 4 && http.status ==200)
        {
            //Respuesta recivida
            var sitio = JSON.parse(http.responseText).sitio[0];

            $('[name= "nombre"]').val(sitio.nombre);
            $('[name= "pais"]').val(sitio.pais);
            $('[name= "ciudad"]').val(sitio.ciudad);
            $('[name= "telefono"]').val(sitio.telefono);
            $('[name= "direccion"]').val(sitio.direccion);
        }
        else if(http.readyState != 4)
        {
            //Esperando respuesta
        }
    }
    http.open('GET','?get=sitio&id='+id);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(null);
}
