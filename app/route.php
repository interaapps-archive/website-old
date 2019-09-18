<?php
/*

"/"          =   Homepage
"@__404__@"  =   Page not found

(Do not use duplicated keys!)

You can use also this syntax for adding pages
$router->get("/test1", "homepage");
*/

// Directory for the views
$views_dir      =  "resources/views/";
$templates_dir  =  "resources/views/templates/";

$route = [
  "/"           =>     "homepage.php",
  "/about"      =>     "aboutus.php", // Executing the static about function in the AboutController class
  "/imprint"    =>     "imprint.php",
  "/dsgvo"      =>     "dsgvo.php",
  "@__404__@"   =>     "404.php",


  "/p/impressum"    =>     "imprint.php",
  "/p/informationen"=>     "dsgvo.php"
];

$router->get("/projects/jdom", function() {
  return view("github", [
    "pagetitle"=>"JDom",
    "github"=>"https://github.com/interaapps/jdom"
  ]);
});