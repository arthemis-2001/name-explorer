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