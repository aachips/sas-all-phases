<?php
function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result, $sql);
    return $result;
}

function find_salamander_by_id($id) {
    global $db;
    $sql = "SELECT * FROM salamanders ";
    $sql .="WHERE id=$id";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $salamander = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $result;
}

function update_salamander($salamander) {
    global $db;
    $sql = "UPDATE salamander SET ";
    $sql .= "name='" .  $salamander['name'] . "', ";
    $sql .= "habitat='" .  $salamander['habitat'] . "',";
    $sql .= "description='" .  $salamander['description'] . "' ";
    $sql .= "WHERE id='" . $salamander['id'] . "' ";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    if($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }
}

// I am getting errors because validate_salamander doesn't exist at this stage. 

// function update_salamander($salamander) {
//     global $db;
// 
//     $errors = validate_salamander($salamander);
//         $errors = [];    
//     //if(!empty($errors)) {}
// }

// function insert_salamander($salamander) {
//     global $db;
//     $errors = validate_salamander($salamander);
//     if(!empty($errors)) 
//         return $errors;
// 
//     $sql = "INSERT INTO salamander ";
//     $sql .= "(name, habitat, description) ";
//     $sql .= "VALUES("; 
//     $sql .= "'" . $salamander['name'] . "', "; 
//     $sql .= "'" . $salamander['habitat'] . "', "; 
//     $sql .= "'" . $salamander['description'] . "', "; 
//     $sql .= ")";
//     echo $sql; exit(); 
//     $result = mysqli_query($db, $sql);
// 
//     if($result) 
//         return true;
//     else {
//         echo mysqli_error($db);
//         db_disconnect($db);
//         exit();
//     }
// }

function insert_salamander($salamander) {
    global $db;
     $sql = "INSERT INTO salamander ";
     $sql .= "(name, habitat, description) ";
     $sql .= "VALUES(";
     $sql .= "'" . $salamander['name'] . "', ";
     $sql .= "'" . $salamander['habitat'] . "', ";
     $sql .= "'" . $salamander['description'] . "'";
     $sql .= ")";
     $result = mysqli_query($db, $sql);
 
     if($result) {
         return true;
     } else {
         echo mysqli_error($db);
         db_disconnect($db);
         exit();
     }
 }

// function delete_salamander