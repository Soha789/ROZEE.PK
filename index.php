<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Job Portal | Home</title>
<style>
body{margin:0;font-family:Poppins,Arial;background:#f4f6fa;color:#333;}
header{background:#0a66c2;color:#fff;padding:20px;text-align:center;box-shadow:0 2px 6px rgba(0,0,0,.2);}
.container{max-width:900px;margin:60px auto;text-align:center;}
h1{font-size:42px;margin-bottom:10px;}
p{font-size:18px;color:#555;}
button{padding:12px 25px;margin:15px;border:none;border-radius:6px;font-size:16px;cursor:pointer;transition:.3s;}
.signup{background:#0a66c2;color:#fff;}
.login{background:#fff;color:#0a66c2;border:2px solid #0a66c2;}
button:hover{transform:translateY(-2px);box-shadow:0 4px 10px rgba(0,0,0,.2);}
</style>
<script>
function goTo(page){window.location.href=page;}
</script>
</head>
<body>
<header><h2>ROZEE-Style Job Portal</h2></header>
<div class="container">
<h1>Find your dream job today</h1>
<p>Welcome to a professional job platform inspired by Rozee.pk — where employers meet talented job seekers.</p>
<button class="signup" onclick="goTo('signup.php')">Sign Up</button>
<button class="login" onclick="goTo('login.php')">Login</button>
</div>
</body>
</html>
