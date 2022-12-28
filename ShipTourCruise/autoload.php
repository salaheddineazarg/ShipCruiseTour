<?php


define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname("ShipTourCruise").DS);
define("controller",ROOT_PATH.'CONTROLLER'.DS);
define("model",ROOT_PATH.'MODEL'.DS);
define("view",ROOT_PATH.'VIEW'.DS);
define("P",ROOT_PATH.'Public'.DS);
define('BURL',"http://localhost/ShipTourCruise/");

require (ROOT_PATH.'/model/database.php');
require  (ROOT_PATH.'/helper.php');


$modules = [ROOT_PATH,view,controller,model,P];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');

new controller();
?>