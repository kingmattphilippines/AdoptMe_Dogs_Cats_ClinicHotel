<?php

    include("conn.php");

    if (isset($_POST['submit'])) {

        $FNAME = $_POST['FIRSTNAME'];
        $LNAME = $_POST['LASTNAME'];
        $PHONE_NUM = $_POST['PHONE_NUMBER'];
        $EMAIL = $_POST['EMAIL'];
        $BRGY = $_POST['BARANGAY'];
        $MUNI = $_POST['MUNICIPALITY'];
        $PROV = $_POST['PROVINCE'];
        $GEND = $_POST['GENDER'];
        $ADULTS_HOUSEHOLD = $_POST['ADULTS_HOUSEHOLD'];
        $CHILDRENS_HOUSEHOLD = $_POST['CHILDRENS_HOUSEHOLD'];
        $DECIDE_ADOPT = $_POST['DECIDE_ADOPT'];
        $PARTICULAR_ANIMAL = $_POST['PARTICULAR_ANIMAL'];
        $NEW_OWNER = $_POST['NEW_OWNER'];
        $FAM_SUPP_DECISION_ADOPT = $_POST['FAM_SUPP_DECISION_ADOPT'];
        $EXPLAIN_WHY = $_POST['EXPLAIN_WHY'];

        $sql = "INSERT INTO evaluation (`FIRSTNAME`,`LASTNAME`,`PHONE_NUMBER`,`EMAIL`,`BARANGAY`,`MUNICIPALITY`,`PROVINCE`,`GENDER`,`ADULTS_HOUSEHOLD`,`CHILDRENS_HOUSEHOLD`,`DECIDE_ADOPT`,`PARTICULAR_ANIMAL`,`NEW_OWNER`,`FAM_SUPP_DECISION_ADOPT`,`EXPLAIN_WHY`)VALUES('$FNAME','$LNAME','$PHONE_NUM','$EMAIL','$BRGY','$MUNI','$PROV','$GEND','$ADULTS_HOUSEHOLD','$CHILDRENS_HOUSEHOLD','$DECIDE_ADOPT','$PARTICULAR_ANIMAL','$NEW_OWNER','$FAM_SUPP_DECISION_ADOPT','$EXPLAIN_WHY')";

        if ($conn->query($sql)) {
            header("Location: all_pets.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }

    }

?>