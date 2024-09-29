
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Singup</title>
  <link rel="stylesheet" href="lsup.css">
</head>
<body>
  <div class="wrapper">
    <h1>Sign Up</h1>


    <form action="dbconnect.php" method="post">
      <input type="text" placeholder="Username" name="usern">

      <input type="password" placeholder="Password"name="pass">
      <input type="password" placeholder="Re-Enter Passowrd" name="repassword">
  


    <div class="terms">
      <input type="checkbox" id="checkbox">
      <label for="checkbox">   I  agree to these <a href="#">
        Terms & Conditions</a></label>
        
    </div>
    <input type="submit" value="Submit">
    </form>
    <div class="member">
      Already a member? <a href="./login.html">
      Login Here
    </a>
    </div>
  </div>
</body>
</html>
