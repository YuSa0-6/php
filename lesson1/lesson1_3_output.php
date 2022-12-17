<?php
$generation = $_POST['ticket'];
$season = $_POST['season'];

function ddd($str1, $str2)
{
  $fee = 0;
  switch ($str1) {
    case 'kids':
      $fee == 500;
      if($str2 == 'holiday') $fee == $fee/2;
      
      break;

    case 'student':
      $fee == 700;
      if($str2 == 'holiday') $fee == $fee/2;
      break;

    case 'adult':
      $fee == 1000;
      break;

    case 'old':
      $fee == 600;
      break;

    default:
      $fee == 0;
      break;
  }

}
