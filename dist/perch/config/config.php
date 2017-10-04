<?php
    define('PERCH_LICENSE_KEY', 'P21508-TFF390-LAT882-BMS747-QTB030');

    define("PERCH_DB_USERNAME", 'perchuser');
    define("PERCH_DB_PASSWORD", 'MM7iQ3zNwE');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "perch");
    define("PERCH_DB_PREFIX", "perch2_");

    define('PERCH_TZ', 'America/New_York');

    define('PERCH_EMAIL_FROM', 'noah@noahstapp.com');
    define('PERCH_EMAIL_FROM_NAME', 'Noah Stapp');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
    define('PERCH_EMAIL_METHOD', 'mail');
    define('PERCH_EMAIL_FROM', 'noah@noahstapp.com');
    define('PERCH_EMAIL_FROM_NAME', 'Perch - noahstapp.com');
