<?php
define('DBCONNECTION', 'mysql:host=localhost;dbname=2050hotel;charset=utf8');
define('DBUSER', 'root');
define('DBPASS', '');


spl_autoload_register(function ($class) {
    $file = 'lib/' . $class . '.class.php';
    if (file_exists($file))
      include $file;
});

/* localhost connection */
$pdo = DatabaseHelper::setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));

?>
