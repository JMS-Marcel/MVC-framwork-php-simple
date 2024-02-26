<?php

function dump($var)
{
  echo '<pre>';
  print_r($var);
  echo '</pre>';
}

function esc($str)
{
  return htmlspecialchars($str);
}