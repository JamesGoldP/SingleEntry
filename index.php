<?php
//  index.php?m=home&c=index&a=index


$m = isset($_GET['m']) ? intval($_GET['m']) : 'Home';
$c = isset($_GET['c']) ? intval($_GET['c']) : 'Index';
$a = isset($_GET['a']) ? intval($_GET['a']) : 'init';

define('BASE_DIR', __DIR__);
define('ControllPath', BASE_DIR.DIRECTORY_SEPARATOR.'Controller');
define('ModelPath', BASE_DIR.DIRECTORY_SEPARATOR.'Model');
define('ViewPath', BASE_DIR.DIRECTORY_SEPARATOR.'ViewPath');

include_once(ControllPath.DIRECTORY_SEPARATOR.$m.DIRECTORY_SEPARATOR.$c.'.php');
$c = new $c;
call_user_func_array(array($c, $a), array());