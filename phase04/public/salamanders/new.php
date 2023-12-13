<?php 
    require_once('../../private/initialize.php');
    $test = $_GET['test'] ?? '';
    
    // $subject_set = find_all_subjects();
    // $subject_count = mysqli_num_rows($subject_set) + 1;
    // mysqli_free_result($subject_set);
    // $subject = [];
    // $subject["position"] = $subject_count;

    if (postRequest()) {
        $salamanderName = $_POST['salamanderName'];
        echo "Salamander Name: $salamanderName";
    } 
    else {
       // redirect_to(urlFor('/salamanders/index.php')); 
       $pageTitle = 'Create Page';
       include(SHARED_PATH . '/salamander-header.php'); ?>

    <div id="content">
        <a href= "<?= urlFor('index.php'); ?>">&laquo; Back to List</a>
        <h1>Create Salamander</h1>
        
        <form action="<?= urlFor('create.php');?>" method="post">            
            <label for="salamanderName">Salamander Name</label><br>
            <input type="text" name="salamanderName" value="Create Salamander">
            
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
    <?php include(SHARED_PATH . '/salamander-footer.php'); 
}
?>
    