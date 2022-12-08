<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="news/<?= esc($news_item['slug'], 'url') ?>">View Blog</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No BLogs</h3>

    <p>Unable to find any blogs for you.</p>

<?php endif ?>