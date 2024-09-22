<?php
include("conn.php");

$dest = "upload";

if (isset($_POST['update'])) {
    $ID = $_POST['ID'];
    $PET_NAME = $_POST['PET_NAME'];
    $PET_DESC = $_POST['PET_DESC'];

    if ($_FILES['PET_DISPLAY']['size'] > 0) {
        $display_tmp_name = $_FILES['PET_DISPLAY']['tmp_name'];
        $display_filename = $_FILES['PET_DISPLAY']['name'];
        move_uploaded_file($display_tmp_name, "$dest/$display_filename");
        $updateDisplay = ", PET_DISPLAY='$display_filename'";
    } else {
        $updateDisplay = "";
    }

    $updateAdditionalPictures = "";
    for ($i = 1; $i <= 4; $i++) {
        if ($_FILES['PET_D'.$i]['size'] > 0) {
            $tmp_name = $_FILES['PET_D'.$i]['tmp_name'];
            $filename = $_FILES['PET_D'.$i]['name'];
            move_uploaded_file($tmp_name, "$dest/$filename");
            $updateAdditionalPictures .= ", PET_D$i='$filename'";
        }
    }

    $sql = "UPDATE pets SET PET_NAME='$PET_NAME', PET_DESC='$PET_DESC' $updateDisplay $updateAdditionalPictures WHERE ID='$ID'";

    if ($conn->query($sql)) {
        echo "Updated successfully!";
        header("Location: admin_add_pets.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
