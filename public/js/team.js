
function executeTeam(url)
{
    $(function () {

        buscar();
        buscarChosen();

        $("#buscar").keyup(function () {
            buscar({
                "name" : $("#buscar").val()
            });
        });

        $('#buscar2').on('change', function(e) {
            buscar({
                "name" : $("#buscar2").val()
            });
        });
    });

    function buscar(param = {}) {
        $.ajax({
            "url" : url,
            "type" : "post",
            "data" : param
        }).done(function(response) {
            $("#tbody").empty();
            for (var key in response) {

                //table
                var tr = $(document.createElement("TR"));

                var td = $(document.createElement("TD"));
                td.append(response[key].id);
                tr.append(td);

                var td = $(document.createElement("TD"));
                td.append(response[key].name);
                tr.append(td);

                var td = $(document.createElement("TD"));
                td.append(response[key].name);
                tr.append(td);

                $("#tbody").append(tr);
            }
        });
    }

    function buscarChosen(param = {}) {
        $.ajax({
            "url" : url,
            "type" : "post",
            "data" : param
        }).done(function(response) {
            $("#buscar2").empty();
            var option = $(document.createElement("OPTION"));
            option.append("...");
            for (var key in response) {
                var option = $(document.createElement("OPTION"));
                option.append(response[key].name);
                $("#buscar2").append(option);
            }
            $("#buscar2").chosen();
        });
    }
}
