<div>
<?php foreach ($articles as $article) : ?>
    <div>
        <h2><?= $article['title'] ?></h2>
        <h2><?= $article['author'] ?></h2>
        <h2><?= $article['body'] ?></h2>
    </div>
    <hr>
<?php endforeach; ?>
</div>