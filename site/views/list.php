<?php

use Bookshop\Book;
use Data\DataManager;

 require_once('views/partials/header.php'); ?>

<div class="page-header">
    <h2>List of books by category</h2>
</div>

<?php 
$book = new Bookshop\Book(1,1,"buchtitel","autor",23.00);

$category = new Bookshop\Category(1, "Science-Fiction");
var_dump($category);

$user = new Bookshop\User(1, "test", "asldkjalsdkjsadl");
var_dump($user);

echo DataManager::test();
?>

<?php require_once('views/partials/footer.php'); ?>