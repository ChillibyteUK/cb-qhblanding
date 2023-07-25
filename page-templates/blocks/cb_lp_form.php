<?php
$classes = $block['className'] ?? null;
?>
<div class="form_container py-5 <?=$classes?>">
    <div class="form_inner">
        <?=do_shortcode('[gravityform id="' . get_field('form_id') . '" ajax="true" title="false"]')?>
    </div>
</div>