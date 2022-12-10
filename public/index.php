<?php
require __DIR__ . '/../src/auth.php';
require __DIR__ . '/../src/bootstrap.php';

?>

<?php view('header', ['title' => 'Dashboard']) ?>
<p>Welcome <?=current_user(); ?> <a href="logout.php">Logout</a></p>
<?php view('footer') ?>