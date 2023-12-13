<?php 
    require_once('../../private/initialize.php');
    $test = $_GET['test'] ?? '';
        
    if (!isset($_GET['id'])) 
        redirect_to(urlFor('salamanders/index.php'));

    $id = $_GET['id'];
    $salamanderName = '';
    if (postRequest()) {
        $salamanderName = $_POST['salamanderName'];
        echo "Salamander Name: $salamanderName<br>";
    } 
        
    $pageTitle = 'Edit';
    // $salamanderName = $salamanders[$id];
    include(SHARED_PATH . '/salamander-header.php'); 
?>

    <div id="content">
        <a href="<?php echo urlFor('/staff/subjects/index.php'); ?>" class="back-link">&laquo; Back to List</a>
        <h1>Edit Subject</h1>
        
        
        <form action="<?= urlFor('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">

            <label for="salamanderName">Name</label><br>
            <input type="text" name="salamanderName" value="<?= h($salamander['name']) ?>"/><br>
            <input type="submit" value="Edit Salamander"/>
            <label for="habitat">
            <p>Habitat: <br>
                <textarea rows="4" cols="50" name="habitat">
                    <?= h($salamander['habitat']); ?>
                </textarea>
            </p>
            </label>
            <label for="description">
                <p>Description:<br>
                    <textarea rows="4" cols="50" name="description">
                        <?= h($salamander['description']); ?>
                    </textarea> 
                </p>
            </label>
            <lable for="submit">
                <p><input type="submit" value="Edit Salamander"></p>
            </label>
        </form>
    </div>    

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>