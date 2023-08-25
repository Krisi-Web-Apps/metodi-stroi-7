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
