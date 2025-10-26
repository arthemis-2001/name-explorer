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