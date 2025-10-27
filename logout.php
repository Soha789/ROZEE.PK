<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Logout</title>
<style>
body{font-family:Poppins;background:#eef3fa;display:flex;align-items:center;justify-content:center;height:100vh;}
.box{background:#fff;padding:50px;text-align:center;border-radius:10px;box-shadow:0 6px 15px rgba(0,0,0,.1);}
button{margin-top:20px;padding:12px 25px;background:#0a66c2;color:#fff;border:none;border-radius:6px;cursor:pointer;}
button:hover{background:#004c99;}
</style>
<script>
setTimeout(()=>{window.location.href='index.php';},2500);
</script>
</head>
<body>
<div class="box">
<h2>You have been logged out successfully</h2>
<p>Redirecting to home page...</p>
<button onclick="window.location.href='index.php'">Go Now</button>
</div>
</body>
</html>
