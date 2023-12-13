<?php 
  require_once('../../private/initialize.php');
  $salamander_set = find_all_salamanders();
  include(SHARED_PATH . '/salamander-header.php');
  $pageTitle = "Salamanders";
?>

<h1>Salamanders</h1>
<a href="<?= urlFor('/salamanders/new.php'); ?>">Create a Salamander</a>

<table class="list">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Habitat</th>
    <th>Description</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
        <tr>
          <td><?= h($salamander['id']) ?></td>
    	    <td><?= h($salamander['name']) ?></td>
          <td><?= h($salamander['description']) ?></td>
          <td><?= h($salamander['habitat']) ?></td>
          <td><a href="<?= h(u('show.php?id=' . h(u($salamander['id'])))); ?>">View</a></td>
          <td><a href="<?= h(u('edit.php?id=' . h(u($salamander['id'])))); ?>">Edit</a></td>
          <td><a href="<?= h(u('delete.php?id=' . h(u($salamander['id'])))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <?php mysqli_free_result($salamander_set); ?>
  
    Thanks to <a href="https://herpsofnc.org">Ampibians and Reptiles of North Carolina</a>

    <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
