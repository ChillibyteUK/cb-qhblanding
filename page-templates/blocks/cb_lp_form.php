<?php
$classes = $block['className'] ?? null;
?>
<div class="form_container py-5 <?=$classes?>">
    <div class="form_inner">
        <?=do_shortcode('[gravityform id="' . get_field('form_id') . '" ajax="true" title="false"]')?>
    </div>
</div>
<script>

    // if input_27 has value
    const radioButtons = document.querySelectorAll('input[name="input_27"]');
    let isChecked = false;

    for (const radioButton of radioButtons) {
      if (radioButton.checked) {
        isChecked = true;
        console.log('has value');
        document.getElementById('gform_next_button_1_26').click();
        break;
      }
    }
    // advance to next step

    add_image('label_1_27_0','detatched');
    add_image('label_1_27_1','semi');
    add_image('label_1_27_2','terraced');
    add_image('label_1_27_3','bungalow');
    add_image('label_1_27_4','flat');
    add_image('label_1_27_5','other');

    function add_image(id,icon) {
        const btn = document.getElementById(id).innerHTML;
        document.getElementById(id).innerHTML = '<img src="<?=get_stylesheet_directory_uri()?>/img/icon-' + icon + '.svg" width=132 height=123 class="ptype-icon">' + btn;
    }
</script>