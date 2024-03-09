<?php require_once('views/partials/header.php'); ?>

<div class="page-header">
    <h2>List of books by category</h2>
</div>

<?php 
$book = new Bookshop\Book(1,1,"buchtitel","autor",23.00);
echo $book->name;
?>

<?php require_once('views/partials/footer.php'); ?>