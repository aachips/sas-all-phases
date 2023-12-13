<?php require_once('../../private/initialize.php');
    $test = $_GET['test'] ?? '';

    if (postRequest()) {
        $salamanderName = $_POST['salamanderName'];
        echo "Salamander Name: $salamanderName";
    } else {
       // redirect_to(url_for('/salamanders/new.php'));
    }

    $pageTitle = 'Create Page';
    include(SHARED_PATH . '/salamander-header.php'); ?>

    <div id="content">
        <a href= "<?= urlFor('/salamander/index.php'); ?>">&laquo; Back to List</a>
        <h1>Create Salamander</h1>
        
        <form action="<?= urlFor('create.php');?>" method="post">            
            <label for="salamanderName">Menu name</label><br>
            <input type="submit" name="salamanderName" value="Create Salamander">
            
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position" id="">
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
                    <input type="submit" value="Create Page">
                </div>
            </dl>
        </form>
    </div>    

    <?php include(SHARED_PATH . '/salamander-footer.php'); ?>







