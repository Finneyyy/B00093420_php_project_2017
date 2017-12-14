<?php
require_once __DIR__ . '/../vendor/autoload.php';

use EFProject\ProductRepository;

//have to create the database first
$productRepository = new ProductRepository();

$productRepository->dropProductTable();
$productRepository->createProductTable();

$productRepository->deleteAll();
$productRepository->getAllFromProduct();

$productRepository->insertIntoProduct('Hoodie', 25.00);
$productRepository->insertIntoProduct('T-Shirt', 10.00);
$productRepository->insertIntoProduct('Sweatshirt', 20.00);
$productRepository->insertIntoProduct('Mug', 5.00);
$productRepository->insertIntoProduct('Book', 16.99);


//$productRepository->deleteAll(); //this goes into the LoginController in ref. to specific users (admin).
