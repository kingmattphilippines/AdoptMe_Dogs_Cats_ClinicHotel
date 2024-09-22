<?php

include("conn.php");

if (isset($_GET['ev'])) {
    
    $ID = $_GET['ev'];

    $sql = "DELETE FROM evaluation WHERE ID='".$_GET['ev']."'";
    $query = $conn->query($sql);

    if ($query) {

        if ($conn->affected_rows > 0) {
            echo "Deleted successfully!";
            header("Location: admin_evaluation.php");
        }
        return "Error : " . $conn->error;
        
    }
    return "Error : " . $conn->error;
}

?>