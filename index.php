<?php

require __DIR__ . '/inc/all.inc.php';

$overview = gen_names_overview();

?>
<?php require __DIR__ . '/views/header.php'; ?>

<h1>Most common names</h1>
<ol>
    <?php foreach ($overview as $name): ?>
        <li>
            <a href="name.php?<?= http_build_query(['name' => $name['name']]); ?>"><?= escape($name['name']) ?></a>
        </li>
    <?php endforeach; ?>
</ol>
<?php require __DIR__ . '/views/footer.php'; ?>
