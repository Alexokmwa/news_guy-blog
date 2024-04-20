<?php
require "../app/core/init.php";

$controller = $_GET['page_name'] ?? "landingpage";
$controller = strtolower($controller);

if(file_exists("../app/controllers/generalpagesctrl/" .$controller . ".php")){
    require "../app/controllers/generalpagesctrl/" .$controller . ".php";
}
else{
    echo "controller not found";
}

