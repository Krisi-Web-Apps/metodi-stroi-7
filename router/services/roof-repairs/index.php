<?php

$base_url = "/uslugi/remont-pokrivi";
$base_url_view = "/services";

$router->addRoute("$base_url/pemont-pokrivi-keremidi", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/roof-tiles");
});

$router->addRoute("$base_url/remont-pokrivi-bitumni-keremidi", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/roof-bitum-tiles");
});

$router->addRoute("$base_url/remont-pokrivi-lamarina", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/roof-paneling");
});

$router->addRoute("$base_url/remont-pokrivi-polycarbonat", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/roof-polycarbonate");
});

$router->addRoute("$base_url/remont-pokrivi-darvena-konstrukcia", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/wooden-construction");
});

$router->addRoute("$base_url/suh-montage-kapaci", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/installation-of-covers");
});

$router->addRoute("$base_url/izmazvane-komini", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/plastering-chimneys");
});

$router->addRoute("$base_url/ukuci-obshivki", function () {
  global $base_url_view;
  view("$base_url_view/roof-repairs/gutter-linings");
});