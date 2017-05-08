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
                Role
            </th>
            <th>
                Resources
            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roles as $item) { ?>
            <tr>
                <td>
                    <?= $item->role ?>
                </td>
                <td>
                    <a class="btn btn-default" href="<?= $this->url->get('role/resource/index/' . $item->id_role) ?>">
                        resource
                    </a>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?= $this->url->get('role/role/edit/' . $item->id_role) ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger"href="<?= $this->url->get('role/role/delete/' . $item->id_role) ?>">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
