<?php use Core\View;  ?>
<?php View::setSiteTitle("Add Product"); ?>
<?php View::start('body'); ?>
<h1>Add New Product</h1>
<div class="row">
  <div class="col-md-10 col-md-offset-1 well">
    <?php View::partial('adminproducts','form'); ?>
  </div>
</div>
<?php View::end(); ?>
