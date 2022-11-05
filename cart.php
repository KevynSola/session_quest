<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php if (isset($_SESSION['add_to_cart'])): ?>
<section class="cookies container-fluid">

    <?php $countCart = array_count_values($_SESSION['add_to_cart']); ?>
    <ul class="list-group list-group-flush">
        <?php foreach ($countCart as $id => $count) { ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-2">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>"
                        class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h3>
                        <?= $catalog[$id]['name']; ?>
                    </h3>
                    <p>
                        <?= $catalog[$id]['description']; ?>
                    </p>
                    <p class="badge bg-success">Quantity : <?= $count ?>
                    </p>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>

</section>
<?php else: ?>
<h2>Empty Cart</h2>
<?php endif ?>
<?php require 'inc/foot.php'; ?>