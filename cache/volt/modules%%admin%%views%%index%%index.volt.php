<div class="page-header">
    <h1>Welcome! Super Admin </h1>
</div>

<h1>Login</h1>

<?= $this->tag->form(['admin/index/index', 'method' => 'post']) ?>
    <div class="row">
        <div class="cols-md-6">
            <span >Username</span>
        </div>
        <div class="cols-md-6">
            <?= $this->tag->textField(['username', 'class' => 'form-control']) ?>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-6">
            <span >password</span>
        </div>
        <div class="cols-md-6">
            <?= $this->tag->passwordField(['password', 'class' => 'form-control']) ?>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            <?= $this->tag->submitButton(['Enviar', 'class' => 'btn btn-notice']) ?>
        </div>
    </div>
<?= $this->tag->endForm() ?>
