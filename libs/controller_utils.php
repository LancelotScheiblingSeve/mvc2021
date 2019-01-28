<?php

function get_param($key){
    if(isset($_GET[$key])){
      return $_GET[$key];
    }else{
      return false;
    }
}