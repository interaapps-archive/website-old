<?php return false; ?><!--You can delete this file, but not in usage of the testserver!!-->
<script>console.log("ULOLE TESTSERVER! DONT USE IT ON A PUBLIC SERVER");
</script>
<?php
/*if (preg_match("/\.(?:png|jpg|jpeg|gif|js|css|html)$/", $_SERVER["REQUEST_URI"])) {return false;}*/
/*file_put_contents("../.temp.temp",$_SERVER["REQUEST_URI"]);*/
?>  <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);// */
chdir('..');


// IMPORTING STANDARD LIBS
require "ulole/loader.php";

loadCore();

// Initializing routings
$router = new Router();
require "app/route.php";
$router->setDirectories($views_dir, $templates_dir);
$router->set($route);

$router->route();