<?php
$bg = wp_get_attachment_image_url(get_field('background'), 'full');
?>
<div class="lp_hero" style="background-image:url(<?=$bg?>)">
    <img class="lp_hero__logo"
        src="<?=get_stylesheet_directory_uri()?>/img/qhb-logo--blue.svg"
        width=3171 height=1557>
    <div class="container-xl">
        <h1><span><?=get_field('title')?></span>
        </h1>
    </div>
</div>