///<reference path="defs/jquery.d.ts"/>

namespace Frontend
{
    export class Arbitros
    {
        public constructor(url)
        {
            var modules = "que es esto";

            $.ajax({
                "url" : url + "api/arbitros",
                "beforeSend" : function () {
                    var tr = $(document.createElement("tr"));
                    tr.append(
                        $(document.createElement("td")).attr("colspan", 3).append(
                            "Cargando...."
                        )
                    );
                    $("#cuerpo").append(tr);
                }
            }).done(function (arbitros) {

                $("#cuerpo").empty();

                for (var key in arbitros) {
                    var tr = $(document.createElement("tr"));
                    tr.append(
                        $(document.createElement("td")).append(
                            arbitros[key].name
                        )
                    );
                    tr.append(
                        $(document.createElement("td")).append(
                            arbitros[key].country
                        )
                    );
                    tr.append(
                        $(document.createElement("td")).append(
                            arbitros[key].status
                        )
                    );
                    $("#cuerpo").append(tr);
                }
            });
            console.log(modules);
        }
    }
}
