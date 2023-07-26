<section class="lp_property_type">
    <div class="lp_property_type__badge">
        <div class="lp_property_type__badge-inner">
            <img src="<?=get_stylesheet_directory_uri()?>/img/house-calc.svg"
                alt="" width=58 height=58>
            <div>UK Homeowners<br>Find out how much cash you can get for your house</div>
        </div>
    </div>
    <div class="lp_property_type__inner">
        <div class="text-center mb-3">Tap your property type below to get started:</div>
        <div class="radio"><input type="radio" name="ptype" value="Detatched" id="detatched"> <label
                for="detatched">Detatched</label>
        </div>
        <div class="radio"><input type="radio" name="ptype" value="Semi" id="semi"> <label
                for="semi">Semi-Detatched</label></div>
        <div class="radio"><input type="radio" name="ptype" value="Terraced" id="terraced"> <label
                for="terraced">Terraced</label></div>
        <div class="radio"><input type="radio" name="ptype" value="Bungalow" id="bungalow"> <label
                for="bungalow">Bungalow</label></div>
        <div class="radio"><input type="radio" name="ptype" value="Flat" id="flat"> <label for="flat">Flat</label></div>
        <div class="radio mb-4"><input type="radio" name="ptype" value="Other" id="other"> <label
                for="other">Other</label></div>
        <button id="gco">Get a cash offer</button>
    </div>
</section>
<script>
    document.getElementById('gco').addEventListener('click', function() {
        // const radioButtons = document.getElementsByName('ptype');
        const selectedRadio = document.querySelector('input[name="ptype"]:checked');
        if (selectedRadio) {
            const selectedValue = selectedRadio.value;
            window.location.href = '/form/?t=' + selectedValue;
        }
    })
</script>