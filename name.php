<?php

require __DIR__ . '/inc/all.inc.php';

$name = (string) ($_GET['name'] ?? '');
if (empty($name)) {
    header('Location: index.php');
    die();
}

$entries = fetch_name_entries($name);

?>
<?php require __DIR__ . '/views/header.php'; ?>
<h1>Statistics for the name: <?= escape($name) ?></h1>
<?php if ($entries): ?>
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Number of Babies Born</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entries as $entry): ?>
                <tr>
                    <td><?= escape($entry['year']) ?></td>
                    <td><?= escape($entry['count']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No entries found</p>
<?php endif; ?>
<?php require __DIR__ . '/views/footer.php'; ?>