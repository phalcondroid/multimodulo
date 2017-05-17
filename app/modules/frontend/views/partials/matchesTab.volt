<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>
                Estado
            </th>
            <th>
                Equipo 1
            </th>
            <th>
                Equipo 2
            </th>
            <th>
                Arbitro
            </th>
            <th>
                Resultado
            </th>
        </tr>
    </thead>
    <tbody id="tbodyMatches">

    </tbody>
</table>

{{javascript_include("js/matches.js")}}

<script type="text/javascript">
    executeMatches("{{ url("") }}" + "getPartidos");
</script>
