<?=
    require_once('../../private/initialize.php');
    include(SHARED_PATH . '/salamander-header.php'); 
    if(postRequest()) {
        // Handle form values sent by new.php
        $salamander = [];
        $salamander['name'] = $_POST['name'] ?? '';
        $salamander['habitat'] = $_POST['habitat'] ?? '';
        $salamander['description'] = $_POST['description'];

        insert_salamander($salamander);
        $newID = mysqli_insert_id($db);
        redirect_to(urlFor('salamanders/show.php?id=' . $newID  ));
            
        print "<h1>Stub for Create Salamander</h1>
         Form parameters<br>
         Salamander: ".$salamander['name']." . <br> 
         Position: ".$salamander['habitat']." . <br> 
         Variable: ".$salamander['description']." . <br>";
    }

    else
        redirect_to('show.php?id=' . $newID);

    include(SHARED_PATH . '/salamander-footer.php'); 
?>