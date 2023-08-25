<?php

$router->addRoute("/uslugi", function () {
  view("services/index");
});

$router->addRoute("/uslugi/nov-pokriv", function () {
  view("services/new-roof");
});

$router->addRoute("/uslugi/remont-pokrivi", function () {
  view("services/roof-repairs");
});

$router->addRoute("/uslugi/hydroizolacia", function () {
  view("services/waterproofing");
});

$router->addRoute("/uslugi/alpinistki-uslugi", function () {
  view("services/mountaineering-services");
});

require "roof-repairs/index.php";
