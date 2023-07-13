<?php

$db = mysqli_connect('localhost', 'root', '', 'appsalon');

if (!$db) {
  echo 'Hubo un error al conectar a la bd';
  exit;
}
