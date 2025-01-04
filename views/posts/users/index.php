
<?php include __DIR__ . '/../partials/header.php'; ?>

<h1>My Posts</h1>
<a class="btn btn-primary" href="/admin/posts/create">Add Post</a>
<table class="table table-striped table-hover">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= htmlspecialchars($post->title) ?></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/user/posts/show?id=<?= $post->id ?>" class="btn btn-info">View</a>
                        <a href="/user/posts/edit?id=<?= $post->id ?>" class="btn btn-warning">Edit</a>
                        <form action="/user/posts/destroy?id=<?= $post->id ?>" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include __DIR__ . '/../partials/pagefoot.php'; ?>
