<h1>Nuevo recurso</h1>

<a class="btn btn-danger pull-right" href="<?= $this->url->get('role/role/index') ?>">
    <span class="glyphicon glyphicon-backward"></span>
</a>

<br><br>

<?= $this->tag->form(['role/resource/new/' . $idRole, 'method' => 'post']) ?>
    <div class="row">
        <div class="cols-md-6">
            <span >Nombre</span>
        </div>
        <div class="cols-md-6">
            <?= $this->tag->textField(['name', 'class' => 'form-control']) ?>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-6">
            <span >Role</span>
        </div>
        <div class="cols-md-6">
            <?= $this->tag->select(['id_role', $role, 'using' => ['id_role', 'role'], 'class' => 'form-control']) ?>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            <?= $this->tag->submitButton(['Enviar', 'class' => 'btn btn-notice']) ?>
        </div>
    </div>
<?= $this->tag->endForm() ?>
