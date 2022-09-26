<?php include "partials/header.php"; ?>
<?php 

  include "classes/Card.php"; 
  $product_data = json_decode(file_get_contents("data/product-data.json"), true);

?>
<?php include "partials/navigation.php"; ?>

<?php include "partials/hero.php"; ?>


<section class="christmas-offers">
    <div class="container">
        <h1 class="text-center">Kalėdiniai pasiūlymai</h1>
        <?php include "partials/features.php"; ?>
        <div class="toggle-client">
            <div class="toggle-button-wrapper nav-tab">
                <a href="javascript:void(0)" class="toggle-button-text toggle-button__left active">Privatiems klientams</a>
                <div class="toggle-button__slider"></div>
                <a href="javascript:void(0)" class="toggle-button-text toggle-button__right">Verslo klientams</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row categories_row ">
            <?php foreach ($product_data as $product) : ?>
                <div class="col-sm-6">
                <?php Card::render_card($product); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>










<?php include "partials/footer.php"; ?>