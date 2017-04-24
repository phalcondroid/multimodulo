<h1>
    Lista de roles
</h1>

<a class="btn btn-default pull-right" href="<?= $this->url->get('role/role/new') ?>">
    <span class="glyphicon glyphicon-plus"></span>
</a>

<table class="table">
    <thead>
        <tr>
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
        <?php foreach ($actions as $item) { ?>
            <tr>
                <td>
                    <?= $item->action ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?= $this->url->get('role/role/edit' . $item->id_action) ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger"href="<?= $this->url->get('role/role/delete' . $item->id_action) ?>">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
