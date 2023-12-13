<?php 
  require_once('../../private/initialize.php'); 
  include(SHARED_PATH . '/salamander-header.php');
  if(!isset($_GET['id'])) {
    redirect_to(urlFor('salamanders/index.php'));
    }
    $id = $_GET['id'];
      
    if(postRequest()) {
      delete_salamander($id);
      redirect_to(urlFor('salamanders/index.php'));
    } else {
      $salamander = find_salamander_by_id($id);
    }
    
    $pageTitle = 'Delete Salamander'; ?>
    
      <a href="<?php echo urlFor('salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>
        <h1>Delete Salamander</h1>
        <p>Are you sure you want to delete this salamander?</p>
        <p><?php echo h($salamander['name']); ?></p>
    
        <form action="<?php echo urlFor('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>" method="post">
            <input type="submit" name="commit" value="Delete Salamander" />
        </form>

  <? include(SHARED_PATH . '/salamander-footer.php'); ?>