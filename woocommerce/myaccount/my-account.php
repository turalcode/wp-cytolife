<?php
defined('ABSPATH') || exit;
?>

<?php if (CYTOLIFE_IS_LOGIN) : ?>
	<div class="woocommerce-MyAccount-content">
		<div class="row">
			<div class="col-md-4"><?php do_action('woocommerce_account_navigation'); ?></div>
			<div class="col-md-8"><?php do_action('woocommerce_account_content'); ?></div>
		</div>
	</div>
<?php endif; ?>