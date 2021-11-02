<?php require 'inc/head.php'; ?>
<?php
session_start();

if (empty($_SESSION['username'])) {
    header('Location: index.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php var_dump($_SESSION); ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>