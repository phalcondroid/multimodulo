<br>
Trozo de código reutilizable HTML <?= $parametro ?>
<br><?php $this->_macros['print_array'] = function($__p = null) { if (isset($__p[0])) { $parametro = $__p[0]; } else { if (isset($__p["parametro"])) { $parametro = $__p["parametro"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'print_array' was called without parameter: parametro");  } }  ?>

    <?php $robots = ['uno' => '<b>laslkska</b>', 'dos' => '<?php echo \'print echo\'; ?><script>location.href=\'http://www.google.com\'</script>']; ?>
    <ul><?php foreach ($robots as $key => $value) { ?>
            <li>
                <?= $key ?>
                <br>
                <?= $this->escaper->escapeHtml($value) ?>
            </li><?php } ?>
    </ul><?php }; $this->_macros['print_array'] = \Closure::bind($this->_macros['print_array'], $this); ?>
