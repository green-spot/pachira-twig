<?php

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/route.php";

Pachira::run([
  "twig" => [
    "directory" => __DIR__ . "/views/"
  ],
]);
