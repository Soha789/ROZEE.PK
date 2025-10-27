<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Profile</title>
<style>
body{font-family:Poppins;background:#f0f4fa;margin:0;padding:0;}
header{background:#0a66c2;color:#fff;text-align:center;padding:20px;}
.container{max-width:600px;margin:40px auto;background:#fff;padding:30px;border-radius:10px;box-shadow:0 4px 15px rgba(0,0,0,.1);}
label{font-weight:600;display:block;margin-top:15px;}
input,textarea{width:100%;padding:10px;margin-top:5px;border:1px solid #ccc;border-radius:6px;}
button{margin-top:20px;padding:12px 20px;border:none;border-radius:6px;background:#0a66c2;color:#fff;cursor:pointer;}
button:hover{background:#004c99;}
</style>
<script>
function saveProfile(e){e.preventDefault();alert("Profile updated!");}
function logout(){alert("Logged out!");window.location.href='logout.php';}
</script>
</head>
<body>
<header><h2>User Profile</h2></header>
<div class="container">
<form onsubmit="saveProfile(event)">
<label>Full Name</label><input type="text" value="John Doe">
<label>Bio</label><textarea rows="3">Passionate job seeker looking for opportunities in IT sector.</textarea>
<label>Resume Link</label><input type="url" value="https://example.com/resume.pdf">
<button type="submit">Save Changes</button>
<button type="button" onclick="logout()">Logout</button>
</form>
</div>
</body>
</html>
