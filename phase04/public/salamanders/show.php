<?php 
  require_once('../../private/initialize.php');
  $id = $_GET['id'] ?? '1';
  $pageTitle = 'Salamander Details';
  include(SHARED_PATH . '/salamander-header.php');
  $salamander = find_salamander_by_id($id);
?>

<div id="content">
  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>
  <div class="subject show">
    <h2>Salamander Details</h2>
    <p><strong>ID:</strong><?= h($salamander['id']); ?></p>

    <p><strong>Name:</strong><?= h($salamander['name']); ?></p>

    <p><strong>Habitat:</strong><br><?= h($salamander['habitat']); ?></p>
    
    <p><strong>Description:</strong><br><?= h($salamander['description']); ?></p>
    <p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
  </div>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); 
