<script type="text/javascript">
	jQuery(document).ready(function() {
		var $guest_check = jQuery('#gb_guest_purchase_check');
		// Hide the registration option and show the hidden guest checkout below.
		// This showing and hidding allows for browsers without js to still have the option.
		jQuery('[for="gb_user_guest_purchase"]').parent().hide();
		jQuery('#guest_purchase_checkbox_wrap').show();
		// Show and Hide the Register and Login Forms, plus check the 
		$guest_check.bind( 'change', function() {
			jQuery('#checkout_login_register_forms').fadeToggle(); // hide
			jQuery('#gb_user_guest_purchase').attr('checked', this.checked ); // set the value on the hidden guest checkout option
		});
	});
</script>
<div id="checkout_login_register_wrap" class="clearfix">

	<div class="paymentform-info">
		<h2 class="section_heading gb_ff"><?php gb_e( 'Sign-up, Sign-in or Guest Purchase' ); ?></h2>
	</div>

	<div id="checkout_login_register_forms" class="clearfix">
		<div id="checkout_registration_form_wrap" class="checkout_login_block clearfix">

			<div id="checkout_registration_form" class="clearfix">
				<?php print $args['registration_form']; ?>
			</div><!-- #checkout_registration_form.-->

		</div>

		<div id="checkout_login_form_wrap" class="checkout_login_block clearfix">

			<div id="checkout_login_form" class="clearfix">
				<?php print $args['login_form']; ?>
			</div>

		</div>
	</div><!--  .checkout_login_register_forms -->

	<input type="hidden" name="gb_account_action" value="gb_account_register" />
	<input type="hidden" name="gb_login_or_register" value="1" />

	<span id="guest_purchase_checkbox_wrap" class="contrast_light message cloak clearfix">
		<label for="gb_guest_purchase_check">
			<input type="checkbox" name="gb_guest_purchase_check" id="gb_guest_purchase_check"> <?php gb_e('Guest Purchase') ?>
		</label>
	</span>

</div>
