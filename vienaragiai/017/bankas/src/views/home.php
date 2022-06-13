<?php

require __DIR__ . '/top.php';
?>

<h1>Sweet Home Alabama</h1>

<div class="home">
        home
    <div class="home_bin">
            bin
        <div class="home_bin_content">
            content
        </div>
    </div>
</div>

<ul>
<?php foreach($list as $value) : ?>
    
    <li><?= $value ?></li>

<?php endforeach ?>
</ul>

<?php
require __DIR__ . '/bottom.php';
?>