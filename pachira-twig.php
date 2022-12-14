<?php

Pachira::addPlugin("twig", function($options){
  $loader = new Twig\Loader\FilesystemLoader(el($options, "directory"));
  Pachira::$store["twig"] = new Twig\Environment($loader);

  function twig($name, $vars=[]){
    echo Pachira::$store["twig"]->render($name, $vars);
  }
});
