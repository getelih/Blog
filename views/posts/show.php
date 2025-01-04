<?php include  __DIR__ . '/../partials/header.php' ?>

<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <th>ID</th>
            <td><?=$post->id?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?=$post->title?></td>
        </tr>
        <tr>
            <th>Content</th>
            <td><?=$post->body?></td>
        </tr>
    </tbody>
</table>

<?php include  __DIR__ . '/../partials/pagefoot.php' ?>