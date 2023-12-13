<?=
    require_once('../../private/initialize.php');
    include(SHARED_PATH . '/salamander-header.php'); 


    if(postRequest()) {
        // Handle form values sent by new.php
        $salamanderName = $_POST['salamanderName'] ?? '';
        $position = $_POST['position'] ?? '';
        $visible = $_POST['visible'] ?? '';
        
        echo "<h1>Stub for Create Salamander</h1>";
        echo "Form parameters<br>";
        echo "Salamander: " . $salamanderName . "<br>";
        echo "Position: " . $position . "<br>";
        echo "Variable: " . $visible . "<br>";
    }

    else
        redirect_to('/staff/subjects/new.php');


    // if (is_post_request()) {
    //     $salamanderName = $_POST['salamanderName'];
    //     echo "Salamander Name: $salamanderName<br>";
    // } else {
    //     redirect_to(url_for('/salamanders/new.php'));
    // }

    include(SHARED_PATH . '/salamander-footer.php'); 
?>
