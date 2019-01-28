<?php 


function make_path($controller, $action, $parameters = []){
  $base =  "/?controller=".$controller.
  "&action=".$action;
  foreach($parameters as $key => $val){
    $base .= "&".$key."=".$val;
  }
  return $base;
}

function display_image($src){
  return "<img src='".$src."' />";
}