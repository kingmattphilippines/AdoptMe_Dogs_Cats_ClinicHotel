<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Me | Animals Sanctuary</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"></a><img src="image/logo.png" width="230px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="all_pets.php">PETS</a></li>
                        <!-- <li><a href="evaluation.php">EVALUATION</a></li> -->
                    </ul>
                </nav>
                <a href="#"></a><img src="image/adopt.png" width="70px" height="50px">
                <img src="image/icon.png" class="menu-icon" onclick="menutoggle()">
            </div>

            <div class="container">
                <h2>Evaluation Form</h2>
                <form action="evaluation_func.php" method="POST" style="margin: 15px;">
                    <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="form-control" placeholder="eg. Samuel" name="FIRSTNAME">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" placeholder="eg. Pablo" name="LASTNAME">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Phone Number:</label>
                        <input type="text" class="form-control" placeholder="eg. 09991234567" name="PHONE_NUMBER">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="eg. sample@email.com" name="EMAIL">
                    </div>
                    <div class="form-group">
                        <label for="barangay">Barangay:</label>
                        <input type="text" class="form-control" placeholder="eg. Barangay Pinagbuhatan" name="BARANGAY">
                    </div>
                    <div class="form-group">
                        <label for="municipality">Municipality:</label>
                        <input type="text" class="form-control" placeholder="eg. Municipality of Pasig" name="MUNICIPALITY">
                    </div>
                    <div class="form-group">
                        <label for="province">Province:</label>
                        <input type="text" class="form-control" placeholder="eg. Zambales" name="PROVINCE">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select class="form-control" name="GENDER">
                            <option value="">Select a gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="adults_household">How many other adults in this household?</label>
                        <textarea class="form-control" placeholder="Please provide your answer here" name="ADULTS_HOUSEHOLD"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="childrens_household">How many children in this household?</label>
                        <textarea class="form-control" placeholder="Please provide your answer here" name="CHILDRENS_HOUSEHOLD"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="decide_adopt">What made you decide to adopt?</label>
                        <textarea class="form-control" placeholder="Please provide your answer here" name="DECIDE_ADOPT"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="particular_animal">Why did you select this particular animal?</label>
                        <textarea class="form-control" placeholder="Please provide your answer here" name="PARTICULAR_ANIMAL"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="new_owner">Why should we allow you to become the new owner?</label>
                        <textarea class="form-control" placeholder="Please provide your answer here" name="NEW_OWNER"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fam_supp_decision_adopt">Does everyone in the family support your decision to adopt a pet?</label>
                        <textarea class="form-control" placeholder="Please provide your answer here" name="FAM_SUPP_DECISION_ADOPT"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="explain_why">Explain:</label>
                        <textarea class="form-control" placeholder="Please provide your answer here" name="EXPLAIN_WHY"></textarea>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

            <br>

            <!---------------footer----------->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-2">
                            <h3>Visit our Animals Santuary Website</h3>
                            <p>Adopt Me!. </p>
                            <div class="icon-logo">
                                <img src="image/phone.png">
                                <img src="image/mail.png">
                                <img src="image/facebook.png">
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src="image/adopt.png" width="400px" height="100px">
                            <p>To sustainably the safetiness of our pets and love ones. </p>
                        </div>
                        <div class="footer-col-3">
                            <h3>Useful Links</h3>
                            <ul>
                            <li>HOME</li>
                            <li>PETS</li>
                            <li>ABOUT</li>
                            </ul>
                        </div>
                    <div class="footer-col-4">
                            <h3>Folllow Us</h3>
                            <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>YouTube</li>
                            </ul>
                        </div>
                    </div>
                    <p>Copyright 2023 - Adopt Me"</p>
                </div>
            </div>

</body>

</html>