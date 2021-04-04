<!DOCTYPE html>
<html>
  
<head><link rel = "stylesheet" href = "info.css"</head>
<title>Sign In</title>
<link rel="shortcit icon" href="https://lh3.googleusercontent.com/tyD-CVYo8pEtgUkXxWvwLyv3udZAf09AdsM0c9N7chpmuoLCVB9p57iXU7DQRHDwy3Kjb48=s85"/>
<h1 class = "heading">Sign Up for Isolate<h1>

<div class="box">
<form  method = 'post'>
    <br>
    <input class="sub_box" type="text" name= "username" placeholder = "Username">
    <br>

    <input class="sub_box" type="password" name = "password" placeholder = "Password">
    <br>

    <input class="sub_box" type="password" name = "password" placeholder = "Repeat Password">
  <br>
    <input id = "color" type="submit" value="Sumbit">
</form>
</div>
<p><?php echo $_POST["username"]></p>

</html>
