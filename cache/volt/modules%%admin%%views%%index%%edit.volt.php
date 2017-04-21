<form class="" action="<?= $this->url->get('admin/index/index') ?>" method="post">
    <?php foreach ($formInsert as $elements) { ?>
        <?= $elements ?><br>
    <?php } ?>
    <input type="submit" name="" value=" mandar ">
</form>
