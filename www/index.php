<?php
include("../libs/view_utils.php");
include("../libs/controller_utils.php");

$controller = isset($_GET["controller"]) ? $_GET["controller"] : "index";
$action = isset($_GET["action"]) ? $_GET["action"] : "home";

echo $controller;
echo "/";
echo $action;
echo "<br>";


require("../controllers/".$controller.".php");

$action_name = $controller."_".$action;
$action_name();