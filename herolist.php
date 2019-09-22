<?php
  $heroes = array();

  function addToList($fname, $lname, $hname, $reason){
    array_push($heroes, new array("first_name" -> $fname, "last_name" -> $lname, "hero_name" -> $hname, "reason" -> $reason));
  }

  ?>
