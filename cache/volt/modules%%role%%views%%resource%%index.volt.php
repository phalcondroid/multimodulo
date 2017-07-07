<h1>
    Lista de recursos
</h1>

<a class="btn btn-danger pull-right" href="<?= $this->url->get('role/role/index') ?>">
    <span class="glyphicon glyphicon-backward"></span>
</a>

<a class="btn btn-default pull-right" href="<?= $this->url->get('role/resource/new/' . $idRole) ?>">
    <span class="glyphicon glyphicon-plus"></span>
</a>

<table class="table">
    <thead>
        <tr>
            <th>
                Resource
            </th>
            <th>
                Actions
            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resource as $item) { ?>
            <tr>
                <td>
                    <?= $item->name ?>
                </td>
                <td>
                    <a class="btn btn-default" href="<?= $this->url->get('role/actions/index/' . $item->id_resource) ?>">
                        actions
                    </a>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?= $this->url->get('role/resource/edit/' . $item->id_resource) ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger"href="<?= $this->url->get('role/resource/delete/' . $item->id_resource) ?>">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
