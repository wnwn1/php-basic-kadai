<?php
// $colors = array("red","blue","yellow");
$colors = ["red","blue","yellow","pink","black", "white"];
$members = [
  "jun" => "konojunya",
  "hoge" => "hogehogeo"
];

// foreach($colors as $color) 
// {
//   echo $color;
//   echo PHP_EOL;
// }

// foreach($members as $key => $member) 
// {
//   // echo $key;
//   // echo PHP_EOL;
//   echo $member;
//   echo PHP_EOL;
// }

for($i=0; $i <= count($colors) - 1; $i++)
{
  echo $colors[$i];
  echo PHP_EOL;
}