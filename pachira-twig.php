<?php

Pachira::addPlugin("twig", function($options){
  global $__pachira_twig;
  $loader = new Twig\Loader\FilesystemLoader(el($options, "directory"));
  $__pachira_twig = new Twig\Environment($loader);

  function twig($name, $vars=[]){
    global $__pachira_twig;
    echo $__pachira_twig->render($name, $vars);
  }
});
