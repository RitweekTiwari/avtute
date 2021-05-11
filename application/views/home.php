<div class="container">
<?php if (isset($menus)): ?>
    <?php foreach ($menus as $value): ?>
<div class="card text-center">
  <div class="card-header">
    Tutorials
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $value->sitemenu_title ?></h5>
    <a href="<?php echo base_url("app.php?menu=".$value->sitemenu_url) ?>" class="btn btn-primary">Goto tutorials</a>
  </div>
</div>
<?php endforeach; ?>
  <?php endif; ?>
  </div>