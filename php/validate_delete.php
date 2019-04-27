<?php

$id = $_REQUEST['id'];
$value = $_REQUEST['value'];
echo 'ID:' . $id . ' ' . 'value:' . $value. ' ';
 
if (isset($_REQUEST['id']) && isset($_REQUEST['value']) && $value == 'delete') {
    
    //deleting record from database
    include 'db_connect.php';
    
    $sql = 'DELETE FROM uploaded_art WHERE id=' . $id . '';

    if ($conn->query($sql) === TRUE) {
        echo 'Record deleted successfully';
    } else {
        echo 'Error deleting record: ' . $conn->error;
    }
    
   
    
    
} elseif (isset($_REQUEST['id']) && isset($_REQUEST['value']) && $value == 'ok') {
    
    //updating validation status to OK
    include 'db_connect.php';
    
    $sql = 'UPDATE uploaded_art SET validation="OK" WHERE id=' . $id . '';

    if ($conn->query($sql) === TRUE) {
        echo 'Validation set to OK';
    } else {
        echo 'Error updating record: ' . $conn->error;
    }
    
   
    
} else {
    echo 'Not possible, record not existing or value is wrong';
}

include 'db_closeCon.php';

?>
