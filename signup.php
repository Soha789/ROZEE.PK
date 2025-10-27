<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Sign Up</title>
<style>
body{font-family:Poppins;background:#eaf2fd;display:flex;align-items:center;justify-content:center;height:100vh;margin:0;}
form{background:#fff;padding:40px 50px;border-radius:10px;box-shadow:0 6px 20px rgba(0,0,0,.1);}
h2{text-align:center;color:#0a66c2;margin-bottom:25px;}
input{width:100%;padding:12px;margin:10px 0;border:1px solid #ccc;border-radius:6px;}
button{width:100%;padding:12px;border:none;border-radius:6px;background:#0a66c2;color:#fff;font-size:16px;cursor:pointer;}
button:hover{background:#004c99;}
p{text-align:center;margin-top:10px;}
a{color:#0a66c2;text-decoration:none;}
</style>
<script>
function signup(e){e.preventDefault();alert("Signup successful! Redirecting to home...");window.location.href='home.php';}
</script>
</head>
<body>
<form onsubmit="signup(event)">
<h2>Create Your Account</h2>
<input type="text" placeholder="Full Name" required>
<input type="email" placeholder="Email" required>
<input type="password" placeholder="Password" required>
<button type="submit">Sign Up</button>
<p>Already have an account? <a href="login.php">Login here</a></p>
</form>
</body>
</html>
