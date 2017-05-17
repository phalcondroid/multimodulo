
function executeMatches(url)
{
    $(function () {
        $.ajax({
            "url" : url,
            "type" : "post",
            "data" : {}
        }).done(function(response) {
            $("#tbodyMatches").empty();
            for (var key in response) {

                //table
                var tr = $(document.createElement("TR"));

                var td = $(document.createElement("TD"));
                td.append(response[key].estado);
                tr.append(td);

                var td = $(document.createElement("TD"));
                td.append(response[key].equipo1);
                tr.append(td);

                var td = $(document.createElement("TD"));
                td.append(response[key].equipo2);
                tr.append(td);

                var td = $(document.createElement("TD"));
                td.append(response[key].arbitro);
                tr.append(td);

                var td = $(document.createElement("TD"));
                td.append(response[key].resultado);
                tr.append(td);

                $("#tbodyMatches").append(tr);
            }
        });
    });
}
