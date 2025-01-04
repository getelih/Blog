<?php include  __DIR__ . '/partials/header.php' ?>

<?php if($name): ?>
    <h1>Hello <?=$name?>!</h1>
<?php endif; ?>

<a href="/form?name=Kaspar">Say hello</a>

<form action="/answer?age=31" method="POST">
    <input type="text" name="name">
    <input type="submit" value="Send">
</form>

<?php include  __DIR__ . '/partials/pagefoot.php' ?>