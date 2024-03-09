<?php

use Data\DataManager;
$categories = DataManager::getCategories();
$categoryId = isset($_REQUEST['categoryId']) ? (int) $_REQUEST['categoryId'] : null;
$books = (isset($categoryId) && ($categoryId > 0)) ? DataManager::getBooksByCategory($categoryId) : null;

require_once('views/partials/header.php'); ?>

<div class="page-header">
    <h2>List of books by category</h2>
</div>

<ul class="nav nav-tabs">
    <?php foreach ($categories as $cat) : ?>
    <li class="navitem">
        <button class="nav-link 
        <?php if ($cat->getId() === $categoryId) : ?>active <?php endif; ?>
        ">
            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?view=list&categoryId=<?php echo $cat->getId(); ?>"><?php echo $cat->getName(); ?></a>
        </button>
    </li>
    <?php endforeach; ?>
</ul>

<br />
<?php if (isset($books)) {
    if (sizeof($books) > 0) {
        require('views/partials/booklist.php'); 
    }
}
?>



<?php require_once('views/partials/footer.php'); ?>