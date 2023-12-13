<?php 
    require_once('../../private/initialize.php'); 
    $id = $_GET['id'] ?? '1';
    // fancy if...else: if the id is not empty assign it the value from $_GET['id' else $id = 1 or use the non-coalesing operator
    $pageTitle = 'Salamander Details';
    include(SHARED_PATH . '/salamander-header.php');
?>

<div id="content">
    <h2>Salamander Details</h2>
    <p> Page ID: <?= h($id); ?></p>
    <p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>