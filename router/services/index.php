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

$router->addRoute("/uslugi/grub-stroej", function () {
  view("services/grub-stroej");
});

$router->addRoute("/uslugi/vatreshi-remonti", function () {
  view("services/vatreshi-remonti");
});

require "roof-repairs/index.php";
