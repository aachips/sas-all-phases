<?php require_once('../../private/initialize.php');
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
        
        
        <form action="<?= urlFor('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="post">
            <label for="salamanderName">Name</label><br>
            <input type="text" name="salamanderName" value="<?= $salamanderName; ?>"/><br>
            <input type="submit" value="Edit Salamander"/>
        
            <dl>
                <dt>Position</dt>
                <dd><select name="position" id="">
                    <option value="1">1</option>
                </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0">
                    <input type="checkbox" name="visible" value="1">
                </dd>
                <div id="operations">
                    <input type="submit" value="Edit Subject">
                </div>
            </dl>
        </form>
    </div>    

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>