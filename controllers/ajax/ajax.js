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
                window.location = '?view=home';
            }
            else
            {
                message_area_modal.html('<img src="views/img/error.png"></img> ' +http.responseText);
                modal.openModal();
                result.html('');
            }
        }
        else if(http.readyState != 4)
        {
            text = '<div class="alert alert-dismissible alert-info">' +
                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<img src="views/img/load.gif"></img> The request is being processed...</div>';
            result.html(text);
        }
    }
    http.open('POST',url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
}
