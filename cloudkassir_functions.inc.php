<?php
spl_autoload_register(function($class) {
	if ($class == 'nc_payment_register_provider_cloudkassir') {
		include __DIR__ . '/cloudkassir.php';
	}
});