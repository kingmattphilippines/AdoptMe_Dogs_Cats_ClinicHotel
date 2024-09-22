<?php
include("conn.php");

$dest = "upload";

if (isset($_POST['submit'])) {
    $PET_NAME = $_POST['PET_NAME'];
    $PET_DESC = $_POST['PET_DESC'];

    $display_tmp_name = $_FILES['PET_DISPLAY']['tmp_name'];
    $display_filename = $_FILES['PET_DISPLAY']['name'];
    move_uploaded_file($display_tmp_name, "$dest/$display_filename");

    $additional_pictures = [];
    for ($i = 0; $i < count($_FILES['PET_D']['tmp_name']); $i++) {
        $tmp_name = $_FILES['PET_D']['tmp_name'][$i];
        $filename = $_FILES['PET_D']['name'][$i];
        move_uploaded_file($tmp_name, "$dest/$filename");
        $additional_pictures[] = $filename;
    }

    $sql = "INSERT INTO pets (`PET_NAME`, `PET_DESC`, `PET_DISPLAY`, `PET_D1`, `PET_D2`, `PET_D3`, `PET_D4`)
            VALUES ('$PET_NAME', '$PET_DESC', '$display_filename', '" . implode("','", $additional_pictures) . "')";

    if ($conn->query($sql)) {
        header("Location: admin_add_pets.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>