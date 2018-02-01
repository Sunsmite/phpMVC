<?php

include "helloWorldView.php";
include "helloWorldModel.php";
include "helloWorldController.php";

$model = new helloWorldModel();
$controller = new helloWorldController($model);
$view = new helloWorldView($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
  $controller->{$_GET['action']}();
}

echo $view->output();
