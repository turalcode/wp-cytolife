<?php
define('CYTOLIFE_ROLE_MEDIC', 'medic');
define('CYTOLIFE_ROLE_RETAIL', 'retail');

$isLogin = is_user_logged_in();
define('CYTOLIFE_IS_LOGIN', $isLogin);

// $isMedic = in_array(CYTOLIFE_ROLE_MEDIC, $current_user->roles);
$user = wp_get_current_user();
$isMedic = wc_user_has_role($user, CYTOLIFE_ROLE_MEDIC);
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

// Upload

$upload_dir = wp_get_upload_dir()['basedir'];

$folder_abs_path_photos = site_url() . '/wp-content/uploads/user-photos';
define('CYTOLIFE_ABS_PATH_PHOTOS', $folder_abs_path_photos);

$folder_path_photos = $upload_dir . '/user-photos';
define('CYTOLIFE_PATH_PHOTOS', $folder_path_photos);

$folder_abs_path_documents = site_url() . '/wp-content/uploads/user-documents';
define('CYTOLIFE_ABS_PATH_DOCUMENTS', $folder_abs_path_documents);

$folder_path_documents = $upload_dir . '/user-documents';
define('CYTOLIFE_PATH_DOCUMENTS', $folder_path_documents);

// Months

define('CYTOLIFE_MONTHS', array(
    'january' => 'Январь',
    'february' => 'Февраль',
    'march' => 'Март',
    'april' => 'Апрель',
    'may' => 'Май',
    'june' => 'Июнь',
    'july' => 'Июль',
    'august' => 'Август',
    'september' => 'Сентябрь',
    'october' => 'Октябрь',
    'november' => 'Ноябрь',
    'december' => 'Декабрь'
));
