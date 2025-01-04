<?php include  __DIR__ . '/../partials/header.php' ?>

<form action="/admin/posts" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input name="image" type="file" accept="image/*" class="form-control" id="image" placeholder="Image">
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
</form>

<?php include  __DIR__ . '/../partials/pagefoot.php' ?>