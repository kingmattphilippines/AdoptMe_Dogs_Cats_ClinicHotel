<?php

session_start();

include("conn.php");

if (isset($_POST['login'])) {
    $NAME = $_POST['NAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $sql = "SELECT * FROM admins WHERE NAME='$NAME'";
    $query = $conn->query($sql);

    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();

        if ($NAME == $row['NAME'] && $PASSWORD == $row['PASSWORD']) {
       
            $_SESSION['admin'] = $row['ID'];

            header("Location: admin_dashboard.php");
            exit;
        } else {
            header("Location: admin_login.php");
        }
    } else {
        header("Location: admin_login.php");
    }
}

?>
