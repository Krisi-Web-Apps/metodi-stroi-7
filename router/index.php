<?php

$router = new Router();

$router->addRoute("/", function () {
  view("home");
});

$router->addRoute("/za-nas", function () {
  view("about");
});

$router->addRoute("/contacts", function () {
  view("contacts");
});

$router->addRoute("/gallery", function () {
  view("gallery");
});

$router->addRoute("/video", function () {
  view("video");
});

$router->addRoute("/ceni", function () {
  view("prices");
});

require "services/index.php";

$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($currentPath);