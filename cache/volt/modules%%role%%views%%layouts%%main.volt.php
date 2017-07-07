<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="pull-left" href="<?= $this->url->get('role/index/destroy') ?>">
                Cerrar sesión
            </a>
            <div class="dropdown pull-right">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Menú
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <?php foreach ($menu as $item) { ?>
                        <li>
                            <a href="#">
                                <?= $item->action ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?= $this->getContent() ?>
