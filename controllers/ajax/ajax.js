function Connect()
{
    var http = null;
    if(window.XMLHttpRequest)
    {
        http = new XMLHttpRequest();
    }
    else if(window.ActiveXObject)
    {
        http = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return http;
}
/*
    =================Login=================
*/

function login(url,data,result,modal,message_area_modal)
{
    http = Connect();
    http.onreadystatechange = function()
    {
        if(http.readyState == 4 && http.status ==200)
        {
            if(http.responseText == 1)
            {
                window.location = '?view=menu';
            }
            else
            {
                /*message_area_modal.html('<strong>No ha podido ingresar</strong><br> , verifique sus datos!!');*/
                message_area_modal.html(http.responseText);
                modal.openModal();
                //result.html('');
            }
        }
        else if(http.readyState != 4)
        {
            result.html("<img src='/views/img/load.gif'><spam>Procesando...</spam>");
        }
    }
    http.open('POST',url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
}
