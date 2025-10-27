<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Add Job</title>
<style>
body{font-family:Poppins;background:#eef4ff;margin:0;display:flex;justify-content:center;align-items:center;height:100vh;}
form{background:#fff;padding:40px;width:400px;border-radius:10px;box-shadow:0 6px 15px rgba(0,0,0,.1);}
h2{text-align:center;color:#0a66c2;}
input,textarea{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;}
button{width:100%;padding:12px;background:#0a66c2;color:#fff;border:none;border-radius:6px;cursor:pointer;}
button:hover{background:#004c99;}
</style>
<script>
function addJob(e){
 e.preventDefault();
 alert("Job added successfully! Redirecting to home...");
 window.location.href='home.php';
}
</script>
</head>
<body>
<form onsubmit="addJob(event)">
<h2>Add New Job</h2>
<input type="text" placeholder="Job Title" required>
<input type="text" placeholder="Company Name" required>
<input type="text" placeholder="Location" required>
<textarea rows="4" placeholder="Job Description"></textarea>
<button type="submit">Post Job</button>
</form>
</body>
</html>
