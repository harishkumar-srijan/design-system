<?php
    $imageExist = isset($image) && !empty($image);
?>
<div class="story-card scroll-track left-right delay-4 <?= $size ?? 'regular'  ?> <?= !$imageExist? 'no-image' : ''?>">
    <div class="hover-image">
        <?php if($imageExist): ?>
            <img src="<?= $image ?>" alt="story-image">
        <?php endif; ?>
    </div>
    <div class="content">
        <p class="tag">
            Content Tag
        </p>
        <h5 class="heading h5">
            Lorem ipsum dolor sit amet, consectetur domus adipiscing elit, sed do eiusmod tempor incididunt
        </h5>
        <p class="small-copy">
            This year the world is commemorating the 25th anniversary of the Beijing Declaration and Platform for Action This year the world is commemorating the 25th anniversary of the Beijing Declaration and Platform for Action
        </p>
        <div class="cta">
            <a class="text-link arrow-2" href="#">
                Read More
                <?=  file_get_contents("assets/images/arrows/btn-arrow-red-secondary.svg");  ?>
            </a>
        </div>
    </div>
</div>