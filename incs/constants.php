<?php
define('CYTOLIFE_ROLE_MEDIC', 'medic');
define('CYTOLIFE_ROLE_RETAIL', 'retail');

$isLogin = is_user_logged_in();
define('CYTOLIFE_IS_LOGIN', $isLogin);

$current_user = wp_get_current_user();
$isMedic = in_array(CYTOLIFE_ROLE_MEDIC, $current_user->roles);
define('CYTOLIFE_IS_MEDIC', $isMedic);

// Endpoint links

define('CYTOLIFE_ENDPOINT_LINKS', [
    'edit-account' => 'icon-profile',
    'orders' => 'icon-cart',
    'downloads' => 'icon-education',
    'support' => 'icon-support',
    'change-password' => 'icon-refresh'
]);

// Categories

define('CYTOLIFE_SLUG_NEW_PRODUCTS', 'novinki');
define('CYTOLIFE_SLUG_POPULAR_PRODUCTS', 'populyarnoe');

// Order status

define('CYTOLIFE_COMPLETED', 'completed');
define('CYTOLIFE_PROCESSING', 'processing');
define('CYTOLIFE_CANCELLED', 'cancelled');
