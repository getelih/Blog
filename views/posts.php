<?php
$posts = [
    [
        'title' => 'World news 1',
        'body' => 'World news body 1',
        'created_at' => 'December 14, 2020',
        'author' => 'Geteli'
    ],
    [
        'title' => 'World news 2',
        'body' => 'World news body 2',
        'created_at' => 'November 14, 2020',
        'author' => 'Anni'
    ],
    [
        'title' => 'World news 3',
        'body' => 'World news body 3',
        'created_at' => 'October 14, 2020',
        'author' => 'Kaspar'
    ],
    [
        'title' => 'World news 4',
        'body' => 'World news body 4',
        'created_at' => 'September 14, 2020',
        'author' => 'Martin'
    ],
    [
        'title' => 'World news 5',
        'body' => 'World news body 5',
        'created_at' => 'August 14, 2020',
        'author' => 'Juku'
    ],

];
?>

<h3 class="pb-4 mb-4 fst-italic border-bottom">
    From the Firehose
</h3>

<?php foreach($posts as $post): ?>
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1"><?php echo $post['title']; ?></h2>
        <p class="blog-post-meta">
            <?php echo $post['created_at']; ?> by <a href="#"><?php echo $post['author'] ?? 'Unknown'; ?></a>
        </p>
        <p><?php echo $post['body']; ?></p>
    </article>
<?php endforeach; ?>

<nav class="blog-pagination" aria-label="Pagination">
    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
    <a class="btn btn-outline-secondary rounded-pill disabled" href="#" aria-disabled="true">Newer</a>
</nav>
