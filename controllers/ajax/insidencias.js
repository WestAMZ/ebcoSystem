/*$("#agregarinsidencia").submit(function ()
{
    var data = $("#agregarinsidencia").serialize();
    result = $('#result');
    var ms = $('#message');
    var modal = $('#myModal');

    agregarinsidencia('?post=insidencia', data, result, modal, ms);
    loadSitios($('#insidencias'),result,modal,ms);
    return false;
});*/


        $("#agregarinsidencia").on("submit", function(e)
        {

            e.preventDefault();
            var f = $(this);
            //var formData = new FormData(document.getElementById("agregarinsidencia"));
            //formData.append("dato", "valor");
            alert( $(this)[0].files[0]);
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            /*$.ajax(
            {
                url: "?post=empleado",
                type: "post",0
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
	           processData: false
            })
                .done(function(res){
                    $("#mensaje").html("Respuesta: " + res);
                });*/

        });
$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
/*-------
            AJAX
---------*/
function agregarinsidencia(url,data,result,modal,message_area_modal)
{
    http = Connect();
    http.onreadystatechange = function ()
    {
         if (http.readyState == 4 && http.status == 200)
         {

                if (http.responseText == 1)
                {
                    message_area_modal.html("<img src='views/img/success.png'></img> la insidencia ha sido posteada");
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
                '<img src="views/img/load.gif"></img> Publicando insidencia </div>';
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


function loadSitios(div,result,modal,message_area_modal)
{
    http = Connect();
    http.onreadystatechange = function()
    {
        if(http.readyState == 4 && http.status ==200)
        {
            div.html(http.responseText);
            message_area_modal.html("<img src='views/img/success.png'></img> La insidencia ha sido publicada satisfactoriamente");
            modal.openModal();
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
    http.open('GET','?get=insidencias');
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(null);
}
