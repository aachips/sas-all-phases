<?php
    require_once('../../private/initialize.php');
    include(SHARED_PATH . '/salamander-header.php'); 
    $pageTitle = 'Create Salamander'; 
    if(postRequest()) {
        $salamander = [];
        $salamander['id'] = $id;
        $salamander['name'] = $_POST['name'] ?? '';
        $salamander['habitat'] = $_POST['habitat'] ?? '';
        $salamander['description'] = $_POST['description'] ?? '';

        $result = insert_salamander($salamander);
        if($result === true) {
            $new_id = mysqli_insert_id($db);
            redirect_to(url_for('/staff/pages/show.php?id=' . $new_id));
        } else {
            $errors = $result;
        }

        } else {

        $salamanders = [];
        $salamanders['subject_id'] = '';
        $salamanders['menu_name'] = '';
        $salamanders['position'] = '';
        $salamanders['visible'] = '';
        $salamanders['content'] = '';

        }

        $page_set = find_all_salamanders();
        $page_count = mysqli_num_rows($page_set) + 1;
        mysqli_free_result($page_set);

?>
<div id="content">
    <a class="back-link" href="<?php echo urlFor('salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>
        <div class="page new">
    <h1>Create Salamander</h1>
    <?= display_errors($errors); ?>

    <form action="<?= urlFor('salamanders/create.php'); ?>" method="post">
        <label for="name">
            <p>Name:<br> <input type="text" name="name" value=""></p>
        </label>
        <label for="habitat">
            <p>Habitat: <br>
                <textarea rows="4" cols="50" name="habitat" value=""></textarea>
            </p>
        </label>
        <label for="description">
            <p>Description:<br>
                <textarea rows="4" cols="50" name="description" value=""></textarea> 
            </p>
        </label>
        <lable for="submit">
            <p><input type="submit" value="Create Salamander"></p>
        </label>
    </form>
</div>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
