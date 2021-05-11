<div class="row">
    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
        <ul class="nav navbar-nav mai-top-nav">
            <?php if (isset($menus)): ?>
            <?php foreach ($menus as $value): ?>

            <li class="nav-item"><a href="<?php echo base_url("app.php?menu=".$value->sitemenu_url) ?>"
                    class="nav-link"><?php echo $value->sitemenu_title ?></a>
            </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>

    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
        
            <ul class="nav navbar-nav mai-top-nav navbar-right">
                <li class="nav-item"><a href="<?php echo base_url("auth") ?>" class="nav-link">Login</a>
                </li>
            </ul>
       
    </div>
</div>
