<?php
$db = new PDO('mysql:host=localhost;dbname=tests', 'root', '');

try
{
  // Quelques opérations sur la base de données
}
finally
{
  echo 'Action effectuée quoi qu\'il arrive';
}