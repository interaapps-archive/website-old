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
  "/donate"      =>     "donate.php",
  "@__404__@"   =>     "404.php",


  "/p/impressum"    =>     "imprint.php",
  "/p/informationen"=>     "dsgvo.php",
  "/darkmode"=>"apps/darkmode.php"
];

$router->get("/projects/jdom", function() {
  return view("github", [
    "pagetitle"=>"JDom",
    "github"=>"https://github.com/interaapps/jdom"
  ]);
});

$router->get("/projects/cajax", function() {
  return view("github", [
    "pagetitle"=>"Cajax",
    "github"=>"https://github.com/interaapps/cajax"
  ]);
});

$router->get("/projects/uloleframework", function() {
  return view("github", [
    "pagetitle"=>"Ulole Framework",
    "github"=>"https://github.com/interaapps/ulole-framework"
  ]);
});

$router->get("/projects/pastefy", function() {
  return view("pastefy", [
    "pagetitle"=>"Pastefy",
    "github"=>"https://github.com/interaapps/pastefy"
  ]);
});

$router->get("/projects/uppm", function() {
  return view("github", [
    "pagetitle"=>"UPPM",
    "github"=>"https://github.com/interaapps/uppm"
  ]);
});

$router->get("/projects/website", function() {
  return view("github", [
    "pagetitle"=>"Website",
    "github"=>"https://github.com/interaapps/website"
  ]);
});


$router->get("/projects/quotysco", function() { return view("github", [ "pagetitle"=>"Quotysco", "github"=>"https://github.com/interaapps/quotysco" ]); });
$router->get("/quotysco", function() { return view("github", [ "pagetitle"=>"Quotysco", "github"=>"https://github.com/interaapps/quotysco" ]); });


$router->get("/projects/punyshort", function() {
  return view("github", [
    "pagetitle"=>"Punyshort",
    "github"=>"https://github.com/interaapps/punyshort"
  ]);
});

use ulole\core\classes\Response;

$router->get("/qu", function(){return Response::redirect("https://quotysco.ga");});

