<?

require('default.config.php');

define('DOL_ADMIN_USER', __val($conf->global->RH_DOL_ADMIN_USER, 'admin') );
define('LIME_DB',__val($conf->global->RH_LIME_DB,'limesurvey' ));

define('USER_MAIL_SENDER', __val($conf->global->RH_USER_MAIL_SENDER,'webmaster@atm-consulting.fr'));