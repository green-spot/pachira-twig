<?php

namespace App;

get("/", function(){
  twig("index.html", ["name" => "Pachira"]);
});
