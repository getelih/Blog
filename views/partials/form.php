<?php include __DIR__. '/partials/header.php'; ?>
<h1>Form</h1>
<?php if($name): ?>
<h3>Hello <?= $name ?>!</h3>
<?php endif; ?>

<a href="/form?name=Geteli">Say hello</a>

<form action="/answer?age=31" method="POST">
    <input name="name" type="text" placeholder="Name">
    <input type="submit" value="Send"> 
</form>

<?php include __DIR__. '/partials/pagefoot.php'; ?>