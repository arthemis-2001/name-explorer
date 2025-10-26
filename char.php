<?php

require __DIR__ . '/inc/all.inc.php';

$char = (string) ($_GET['char'] ?? '');

if (strlen($char) > 1) {
    $char = $char[0];
}
if (strlen($char) == 0) {
    header('Location: index.php');
    die();
}
$char = strtoupper($char);

$names = fetch_names_by_initial($char);

?>
<?php require __DIR__ . '/views/header.php'; ?>
<?php if ($names): ?>
    <ul>
        <?php foreach ($names as $name): ?>
            <li>
                <a href="name.php?<?= http_build_query(['name' => $name]); ?>">
                    <?= escape($name); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No names found</p>
<?php endif; ?>
<?php require __DIR__ . '/views/footer.php'; ?>