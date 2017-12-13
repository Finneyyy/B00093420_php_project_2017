<?php
require_once __DIR__ . '/../vendor/autoload.php';

use EFProject\ProductRepository;

$productRepository = new ProductRepository();

$productRepository->dropTable();
$productRepository->createTable();

//$productRepository->deleteAll(); //this goes into the LoginController in ref. to specific users (admin).
