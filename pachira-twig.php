<?php

Pachira::addPlugin("twig", function($options){
  $params = [];
  if(el($options, "cache")) $params["cache"] = el($options, "cache");

  $loader = new Twig\Loader\FilesystemLoader(el($options, "directory"));
  Pachira::$store["twig"] = new Twig\Environment($loader, $params);

  function twig($name, $vars=[]){
    echo Pachira::$store["twig"]->render($name, $vars);
  }
});
