<?php 

$tv_show_table = [
    1 => ["id" => 1, 
     "title" => "Game of thrones", 
     "synopsis" => "Lorem 1",
   ],
    2 => ["id" => 2, 
     "title" => "Vikings", 
     "synopsis" => "Lorem 2",
   ],
    3 => ["id" => 3, 
     "title" => "Altered Carbon", 
     "synopsis" => "Lorem 3",
   ],
    4 => ["id" => 4, 
     "title" => "The Americans", 
     "synopsis" => "Lorem 4",
   ],
    5 => ["id" => 5, 
     "title" => "Le Bureau des Légendes", 
     "synopsis" => "Lorem 5",
   ],
    6 => ["id" => 6, 
     "title" => "Breaking Bad", 
     "synopsis" => "Lorem 6",
   ],
];

function tv_show_all(){
  global $tv_show_table;
  return $tv_show_table;
}

function tv_show_get($id){
  global $tv_show_table;
  return $tv_show_table[$id];
}

