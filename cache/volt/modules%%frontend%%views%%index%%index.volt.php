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

<?= $this->tag->javascriptInclude('js/Output/frontend.js') ?>

<script type="text/javascript">
    new Frontend.Arbitros("<?= $this->url->get() ?>");
</script>
