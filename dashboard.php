<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Dashboard</title>
<style>
body{margin:0;font-family:Poppins;background:#f4f6fa;}
header{background:#0a66c2;color:#fff;padding:20px;text-align:center;}
.table{max-width:800px;margin:40px auto;background:#fff;padding:30px;border-radius:10px;box-shadow:0 4px 15px rgba(0,0,0,.1);}
table{width:100%;border-collapse:collapse;}
th,td{padding:12px;text-align:left;border-bottom:1px solid #eee;}
th{background:#f0f5ff;color:#0a66c2;}
.total{text-align:right;margin-top:15px;font-weight:600;}
button{background:#0a66c2;color:#fff;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;}
button:hover{background:#004c99;}
</style>
<script>
function backHome(){window.location.href='home.php';}
</script>
</head>
<body>
<header><h2>Your Dashboard</h2></header>
<div class="table">
<table>
<tr><th>Job Title</th><th>Status</th><th>Earnings</th></tr>
<tr><td>Frontend Developer</td><td>Applied</td><td>Rs 500</td></tr>
<tr><td>Graphic Designer</td><td>Applied</td><td>Rs 300</td></tr>
<tr><td>Project Manager</td><td>Shortlisted</td><td>Rs 1000</td></tr>
</table>
<p class="total">Total Earnings: <b>Rs 1,800</b></p>
<button onclick="backHome()">Back to Home</button>
</div>
</body>
</html>
