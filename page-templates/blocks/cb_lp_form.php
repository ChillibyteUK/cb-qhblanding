<?php
$classes = $block['className'] ?? null;
$fid = get_field('form_id');
?>
<div class="form_container py-5 <?=$classes?>">
  <div class="form_inner">
    <?=do_shortcode('[gravityform id="' . $fid . '" ajax="true" title="false"]')?>
  </div>
</div>
<script>
  // if ptype input has value
  const radioButtons = document.querySelectorAll('input[name="input_3"]');
  let isChecked = false;

  for (const radioButton of radioButtons) {
    if (radioButton.checked) {
      isChecked = true;
      console.log('has value');
      document.getElementById('gform_next_button_<?=$fid?>_1').click();
      break;
    }
  }
  // advance to next step

  add_image('label_<?=$fid?>_3_0', 'detatched');
  add_image('label_<?=$fid?>_3_1', 'semi');
  add_image('label_<?=$fid?>_3_2', 'terraced');
  add_image('label_<?=$fid?>_3_3', 'bungalow');
  add_image('label_<?=$fid?>_3_4', 'flat');
  add_image('label_<?=$fid?>_3_5', 'other');

  function add_image(id, icon) {
    const btn = document.getElementById(id).innerHTML;
    document.getElementById(id).innerHTML =
      '<img src="<?=get_stylesheet_directory_uri()?>/img/icon-' + icon +
      '.svg" width=132 height=123 class="ptype-icon">' + btn;
  }
</script>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
  jQuery(document).on('gform_confirmation_loaded', function(event, formId) {
    console.log('success');
    var email = jQuery('#input_6_21').val();
    var phone_num = jQuery('#input_6_22').val();
    var last_name = jQuery('#input_6_24_6').val();
    
    console.log('email '+email);
    console.log('phone '+phone_num);
    console.log('name '+last_name);

    dataLayer.push({
      'event': 'lead',
      'email': email,
      'last_name': last_name,
      'phone_num': phone_num
    });
  });
</script>
<?php
}, 9999);
?>