<?php require 'inc/head.php'; ?>
<!--penser a importer le tableau de produits -->
<?php require 'inc/data/products.php' ; ?>

<section class="cookies container-fluid">
    <div class="row">
    <?php
    //var_dump($_SESSION['cart']);
        
    foreach ($_SESSION['cart'] as $acookie){ ?>
        <!--echo $catalog[$acookie]['name']; -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $acookie; ?>.jpg" alt="<?= $catalog[$acookie]['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[$acookie]['name']; ?></h3>
                        <p><?= $catalog[$acookie]['description']; ?></p>
                        
                    </figcaption>
                </figure>
            </div>



   <?php }
      
    ?>
       
    </div>
</section>
<?php require 'inc/foot.php'; ?>
