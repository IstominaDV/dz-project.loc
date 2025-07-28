<?
session_start();

require_once dirname(__DIR__). '/config/config.php';
require_once CORE . '/function.php';

require_once CLASSES. '/DB.php';
$db_config = require_once CONFIG. '/db.php';
$db = DB::getInstance()->getConnection($db_config);
// $db = new DB($db_config);
//dd($db);

require_once CORE. '/router.php';
?>