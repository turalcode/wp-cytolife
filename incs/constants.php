<?php
define('CYTOLIFE_ROLE_MEDIC', 'medic');
define('CYTOLIFE_ROLE_RETAIL', 'retail');

$isLogin = is_user_logged_in();
define('CYTOLIFE_IS_LOGIN', $isLogin);

$current_user = wp_get_current_user();
$isMedic = in_array(CYTOLIFE_ROLE_MEDIC, $current_user->roles);
define('CYTOLIFE_IS_MEDIC', $isMedic);

define('CYTOLIFE_SLUG_NEW_PRODUCTS', 'novinki');
define('CYTOLIFE_SLUG_POPULAR_PRODUCTS', 'populyarnoe');
