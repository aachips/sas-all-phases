<?php 
    require_once('../../private/initialize.php'); 
    $pageTitle = 'Salamander Details';
    include(SHARED_PATH . '/salamander-header.php'); 
    $id = $_GET['id'] ?? '1'; 
    $salamander = find_salamander_by_id($id);
?>
<div id="content">
    
    <h2>Salamander Details</h2>
    <p><strong>ID:</strong><?= h($salamander['id']); ?></p>

    <p><strong>Name:</strong><?= h($salamander['name']); ?></p>

    <p><strong>Habitat:</strong><br><?= h($salamander['habitat']); ?></p>
    
    <p><strong>Description:</strong><br><?= h($salamander['description']); ?></p>
    
    <p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
