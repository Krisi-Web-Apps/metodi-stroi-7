<?php

$router = new Router();

$router->addRoute("/", function () {
  view("home");
});

$router->addRoute("/za-nas", function () {
  view("about");
});

require "services/index.php";

$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($currentPath);