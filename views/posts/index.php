<?php include  __DIR__ . '/../partials/header.php' ?>
<a class="btn btn-primary" href="/admin/posts/create">Add Post</a>
<table class="table table-striped table-hover"> 
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?=$post->id?></td>
                <td><?=$post->title?></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/admin/posts/show?id=<?=$post->id?>" class="btn btn-info">View</a>
                        <a href="/admin/posts/edit?id=<?=$post->id?>" class="btn btn-warning">Edit</a>
                        <a href="/admin/posts/delete?id=<?=$post->id?>" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include  __DIR__ . '/../partials/pagefoot.php' ?>