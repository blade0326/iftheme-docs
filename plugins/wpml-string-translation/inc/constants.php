<?php
define('WPML_ST_FOLDER', basename(WPML_ST_PATH));

if((defined('WP_ADMIN') && defined('FORCE_SSL_ADMIN') && FORCE_SSL_ADMIN) || is_ssl()){
    define('WPML_ST_URL', rtrim(str_replace('http://','https://', WP_PLUGIN_URL), '/') . '/' . WPML_ST_FOLDER );
}else{
    define('WPML_ST_URL', WP_PLUGIN_URL . '/' . WPML_ST_FOLDER );
}

define('ICL_STRING_TRANSLATION_NOT_TRANSLATED', 0);
define('ICL_STRING_TRANSLATION_COMPLETE', 1);
define('ICL_STRING_TRANSLATION_NEEDS_UPDATE', 2);
define('ICL_STRING_TRANSLATION_PARTIAL', 3);
define('ICL_STRING_TRANSLATION_WAITING_FOR_TRANSLATOR', 11);

define('ICL_STRING_TRANSLATION_TEMPLATE_DIRECTORY', get_template_directory());
define('ICL_STRING_TRANSLATION_STYLESHEET_DIRECTORY', get_stylesheet_directory());

define('ICL_STRING_TRANSLATION_STRING_TRACKING_TYPE_SOURCE', 0);
define('ICL_STRING_TRANSLATION_STRING_TRACKING_TYPE_PAGE', 1);
define('ICL_STRING_TRANSLATION_STRING_TRACKING_THRESHOLD', 5);

define('ICL_STRING_TRANSLATION_AUTO_REGISTER_THRESHOLD', 500);

define('ICL_STRING_TRANSLATION_DYNAMIC_CONTEXT', 'wpml_string');
