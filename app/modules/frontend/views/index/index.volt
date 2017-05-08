<div class="page-header">
    <h1>Consulta de arbitros</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Pais
            </th>
            <th>
                estado
            </th>
        </tr>
    </thead>
    <tbody id="cuerpo">

    </tbody>
</table>

{{ javascript_include("js/Output/frontend.js") }}

<script type="text/javascript">
    new Frontend.Arbitros("{{ url() }}");
</script>
