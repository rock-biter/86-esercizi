<?php

function generaPassword($length)
{

  $chars = 'abcdefghilmnopqrstuvz';
  $numbers = '0123456789';
  $symbols = '$#@?!{}[]&';

  $chars .= strtoupper($chars);
  $chars .= $numbers;
  $chars .= $symbols;
  $password = '';

  for ($i = 0; $i < $length; $i++) {
    $max = strlen($chars) - 1;
    $random_index = rand(0, $max);

    $char = $chars[$random_index];
    // var_dump($char);

    $password .= $char;
  }

  return $password;
}
