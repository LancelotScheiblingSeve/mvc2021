<?php
require_once("../models/tv_show.php");

function tv_show_list(){
  $tv_shows =  tv_show_all();
  
  $items = array_map(function($elt){
    $elt["url"] = make_path("tv_show", "read", ["id" => $elt["id"]]);
    return $elt;
  }, $tv_shows);

  include("../views/list.php");
}

function tv_show_read(){
  $id = get_param("id");
  $tv_show =  tv_show_get($id);
  include("../views/tv_show_single.php");
}
