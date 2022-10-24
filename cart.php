<?php

require 'inc/data/products.php';
require 'inc/head.php';



?>
<section class="cookies container-fluid">
    <div class="row">
        <h4>My cart :</h4>
        <?php
        foreach ($_SESSION['productsCart'] as $cart_id => $cookie_id) {
            foreach ($catalog as $product_key => $cookie_array) {
                if (intval($cookie_id) === $product_key) {
                    echo '<li>' . $cookie_array['name'];
                    '</li>';
                }
            }
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>