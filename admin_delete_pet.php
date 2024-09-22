<?php

include("conn.php");

if (isset($_GET['q'])) {
    
    $ID = $_GET['q'];

    $sql = "DELETE FROM pets WHERE ID='".$_GET['q']."'";
    $query = $conn->query($sql);

    if ($query) {

        if ($conn->affected_rows > 0) {
            echo "Deleted successfully!";
            header("Location: admin_add_pets.php");
        }
        return "Error : " . $conn->error;
        
    }
    return "Error : " . $conn->error;
}

?>