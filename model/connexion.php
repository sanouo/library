<?php

// connect database
try {
  $bdd = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'phpmyadmin', 'sana15');
} catch (Exception $e) {
  die($e->getMessage());
}
