<?php
    include 'functions/utility-functions.php';
    include 'functions/names-functions.php';
    $fileName = 'names-short-list.txt';
    $fullNames = load_full_names($fileName);
    $lineNumber = 0;
    
    $firstNames = load_first_names($fullNames);
    $lastNames = load_last_names($fullNames);
    // Load up the array
    // Get all first names
    foreach($fullNames as $fullName) {
        $startHere = strpos($fullName, ",") + 1;
        $firstNames[] = trim(substr($fullName, $startHere));
    }
    
    dd($firstNames);

    // Get all last names
    foreach ($fullNames as $fullName) {
        $stopHere = strpos($fullName, ",");
        $lastNames[] = substr($fullName, 0, $stopHere);
    }

    dd($lastNames);

    // Get valid names
    for($i = 0; $i < sizeof($fullNames); $i++) {
        // jam the first and last name toghether without a comma, then test for alpha-only characters
        if(ctype_alpha($lastNames[$i].$firstNames[$i])) {
            $validFirstNames[$i] = $firstNames[$i];
            $validLastNames[$i] = $lastNames[$i];
            $validFullNames[$i] = $validLastNames[$i] . ", " . $validFirstNames[$i];
        }
    }
    

    $FH = fopen("$fileName", "r");
    $nextName = fgets($FH);

    while(!feof($FH)) {
        if($lineNumber % 2 == 0) 
            $fullNames[] = trim(substr($nextName, 0, strpos($nextName, " --")));
        $lineNumber++;
        $nextName = fgets($FH);
    }

    

    // $findMe = ',';
    // echo $fullNames[0] . '<br>';
    // echo strpos($fullNames[0], $findMe) . '<br>';
    // echo substr($fullNames[0], 0, strpos($fullNames[0], $findMe));
    // exit();




    // ~~~~~~~~~~~~ Display results ~~~~~~~~~~~~ //

    print "<h1>Names - Results</h1>
           <h2>All Names</h2>
           <p>There are " . sizeof($fullNames) . " total names</p>
           <ul>";    
        foreach($fullNames as $fullName) {
            echo "<li>$fullName</li>";
        }
    print "</ul>
         <h2>All Valid Names</h2>
         <p>There are " . sizeof($validFullNames) . " valid names</p>
         <ul>";    
        foreach($validFullNames as $validFullName) {
            echo "<li>$validFullName</li>";
        }
    print "</ul>
            <h2>Unique Names</h2>";

    $uniqueValidNames = (array_unique($validFullNames));
    echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique names</p>
            <ul>");    
        foreach($uniqueValidNames as $uniqueValidNames) {
            echo "<li>$uniqueValidNames</li>";
        }

    ?>








