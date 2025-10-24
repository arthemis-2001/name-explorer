<?php

require __DIR__ . '/inc/all.inc.php';

$char = (string) ($_GET['char'] ?? '');
if (strlen($char) > 1) {
    $char = $char[0];
}
$char = strtoupper($char);

$stmt = $pdo->prepare('SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :expr ORDER BY `names`.`name` ASC');
$stmt->bindValue(':expr', "{$char}%");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$names = [];

foreach ($results as $result) {
    $names[] = $result['name'];
}

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
