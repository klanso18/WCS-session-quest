<?php 
require 'inc/head.php'; 

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
?>


<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php 
          $cookies = $_SESSION['cart'];
          foreach ($cookies as $cookie) {
            var_dump($cookie);
          }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
