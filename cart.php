<?php 
require 'inc/head.php'; 
require 'inc/data/products.php';

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
?>


<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php 
          if (!empty($_SESSION['cart'])) :
            foreach ($catalog as $key => $cookie) :
                if (in_array($key, $_SESSION['cart'])) : ?>
                    <li><?= $cookie['name']; ?></li>
        <?php
                endif;
            endforeach;
        endif;
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
