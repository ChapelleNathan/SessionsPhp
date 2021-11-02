<?php
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Your Cart</h2>
        <?php foreach ($catalog as $id => $cookie) : ?>
            <?php if (in_array($id, $_SESSION['panier'])) : ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                    </figure>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>