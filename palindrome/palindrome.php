<?php 
    // with strrev()
    function palindromeStr($string) {
        if (strrev ($string) == $string)
            return 1;
        else
            return 0;    
    }

    $original = $_POST['input'];
    if(palindromeStr($original))
        echo "Palindrome";
    else
        echo "not a palindrome";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Palindrome Detector</title>
    </head>
    <body>
        <form method="post" action="palindrome.php">
            <input type="text" name="input">
            <input type="submit" action="palindrome.php">
        </form>
    </body>
</html>