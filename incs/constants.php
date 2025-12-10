<?php
define('CYTOLIFE_ROLE_MEDIC', 'medic');

$isLogin = is_user_logged_in();
define('CYTOLIFE_IS_LOGIN', $isLogin);

$current_user = wp_get_current_user();
$isMedic = in_array('medic', $current_user->roles);
define('CYTOLIFE_IS_MEDIC', $isMedic);

define('CYTOLIFE_SLUG_NEW_PRODUCTS', 'novinki');
define('CYTOLIFE_SLUG_POPULAR_PRODUCTS', 'populyarnoe');
