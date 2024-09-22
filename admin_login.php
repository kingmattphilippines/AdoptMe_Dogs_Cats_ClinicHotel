<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Me</title>
</head>
<body>

<style>
body {
    margin: 8rem 25rem 25rem 25rem;
}
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 20%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>

<form action="admin_check_login.php" method="POST" autocomplete="off">
  <div class="imgcontainer">
    <img src="image/admin_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  <center><h2>Adopt Me Login</h2></center>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="NAME" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="PASSWORD" required>

    <button type="submit" name="login" id="login">Login</button>
  </div>
</form>
    
</body>
</html>