<?
define('ROOT', dirname(__DIR__));
define('PATH', 'https://dz-project.loc');

define('APP', ROOT . '/app');
define('CONTROLLERS', APP . '/controllers');
define('VIEWS', APP . '/views');
define('COMPONENTS', VIEWS . '/components');

define('CONFIG', ROOT . '/config');

define('CORE', ROOT . '/core');

define('PUBLIC', ROOT . '/public');

require_once CORE . '\function.php';


$uri = trim($_SERVER['REQUEST_URI'], '/');
// dd($uri);

if ($uri == '' || $uri == 'index.php' || $uri == 'index') {
    require_once CONTROLLERS . '\index.php';
}
else if($uri == 'contacts.php') {
    require_once CONTROLLERS . '\contacts.php';
}
else {
    //404
}
?>