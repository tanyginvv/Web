<?php

$FORM_ELEMENTS_NUMBER = 4;

function getGetParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

$email = getGetParameter('email');

$file = 'data/' . $email . '.txt';
if ((!(empty($email))) && (file_exists($file)))
{
  $tempArray = file($file);
  for ($i = 0; $i < $FORM_ELEMENTS_NUMBER; $i++)
  {
     echo "$tempArray[$i] <br />";
  }
}