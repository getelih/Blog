<?php include  __DIR__ . '/../partials/header.php' ?>

<form action="/login" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <input type="submit" class="btn btn-primary" value="Login">
</form>

<?php include  __DIR__ . '/../partials/pagefoot.php' ?>