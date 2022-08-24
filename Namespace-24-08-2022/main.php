<?php

function test()
{
  throw new Exception('Oups, je suis un geek.');

}

try
{
  test();
} catch (Exception $e) 
{
  echo $e->getMessage().'<br/>';
  echo $e->getLine().'<br/>';
  echo $e->getCode().'<br/>';
  echo $e->getFile().'<br/>';
}
finally
{
  echo "Je suis dans le block Finally <br/>";
}