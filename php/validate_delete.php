<?php

$id = $_REQUEST['id'];
$value = $_REQUEST['value'];
echo $id . $value;
 
if (isset($_REQUEST['id']) && isset($_REQUEST['value']) && $value == 'delete') {
    
    
    include 'db_connect.php';
    
    $sql = 'DELETE FROM uploaded_art WHERE id=' . $id . '';

    if ($conn->query($sql) === TRUE) {
        echo 'Record deleted successfully';
    } else {
        echo 'Error deleting record: ' . $conn->error;
    }
    
    include 'db_closeCon.php';
    
    
    
} elseif (isset($_REQUEST['id']) && isset($_REQUEST['value']) && $value == 'ok') {
    
    
    include 'db_connect.php';
    
    $sql = 'UPDATE uploaded_art SET validation="OK" WHERE id=' . $id . '';

    if ($conn->query($sql) === TRUE) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . $conn->error;
    }
    
    include 'db_closeCon.php';
    
}

?>
