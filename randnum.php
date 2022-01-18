<?php
if((!defined('z'))){exit;}

function RAND_NUM($RNUM){
  for($n = 0; $n < 3; $n++){
    $Z 	  = mt_rand(1,1000000000);
    $RNUM = $RNUM.$Z;
  }
  return $RNUM;
}

function RAND_NUM_SMALL($RNUM){
  $Z  	= mt_rand(1,1000000000);
  return $Z;
}

?>
