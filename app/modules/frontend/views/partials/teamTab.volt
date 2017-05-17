<br>
Buscar <input type="text" id="buscar" class="form-control">
<br>

<br>
Buscar2
<br>
<select class="form-control" id="buscar2">
    <option value="">....</option>
</select>
<br>
<br>
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Equipo
            </th>
            <th>
                País
            </th>
        </tr>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>

{{ javascript_include("js/team.js")}}

<script type="text/javascript">
    executeTeam("{{ url("") }}" + "getEquipos");
</script>
