<?php
/*
Template Name: Landing Page 1
*/

get_header();
?>
<main>
    <div class="lp_header py-5">
        <div class="container-xl text-center">
            <h1>HERO HERE</h1>
        </div>
    </div>
    <div class="form_container py-5">
        <?=do_shortcode('[gravityform id="1" title="false"]')?>
    </div>
    <div class="lp_body py-5">
        <div class="container-xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia saepe harum nisi nihil aut. Consectetur, voluptatum aliquid iste maxime voluptate, blanditiis quibusdam optio nostrum quaerat quae est. Nesciunt pariatur cumque aliquid est omnis minima accusantium enim, numquam in ea nostrum dolorum quo corporis nam laborum fugiat architecto suscipit soluta sed?
        </div>
    </div>
</main>
<?php

get_footer();
