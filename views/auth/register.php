<?php include  __DIR__ . '/../partials/header.php' ?>

<form action="/register" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="mb-3">
        <label for="password_confirm" class="form-label">Password Confirm</label>
        <input name="password_confirm" type="password" class="form-control" id="password_confirm" placeholder="Password Confirm">
    </div>
    <input type="submit" class="btn btn-primary" value="Register">
</form>

<?php include  __DIR__ . '/../partials/pagefoot.php' ?>