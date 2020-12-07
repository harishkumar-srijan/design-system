<?php
use helpers\View;
?>
<!-- Page Headers -->
<?php View::render('partials/header') ?>

<body>
<!-- Navigation -->
<?php View::render('partials/navigation/main') ?>


<!-- Navigation -->
<?php View::render('modules/hero') ?>
<?php View::render('modules/featured-stories') ?>
<?php View::render('modules/our-mission') ?>
<?php View::render('modules/our-expertise') ?>
<?php
    View::render('modules/trusted-partnerships', [
        'classes' => 'show-for-small-only',
        'trackScroll' => true
    ])
?>
<?php View::render('modules/global-impact') ?>
<?php View::render('modules/publications') ?>
<?php View::render('modules/recent-news') ?>
<?php View::render('modules/twitter-feed') ?>

<!-- Footer -->
<?php View::render('partials/footer'); ?>
<script type="text/javascript" src="/dist/app.js"></script>
</body>
</html>
