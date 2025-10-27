<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Home | Jobs</title>
<style>
body{margin:0;font-family:Poppins;background:#f4f6fa;}
nav{background:#0a66c2;color:#fff;display:flex;justify-content:space-between;align-items:center;padding:15px 40px;}
nav h2{margin:0;}
nav button{background:#fff;color:#0a66c2;border:none;padding:8px 15px;border-radius:6px;cursor:pointer;}
nav button:hover{background:#e6eef9;}
.container{max-width:1000px;margin:40px auto;}
.job-card{background:#fff;padding:20px;margin:15px 0;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.05);}
.job-card:hover{transform:scale(1.01);}
.apply{background:#0a66c2;color:#fff;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;}
.apply:hover{background:#004c99;}
</style>
<script>
function go(page){window.location.href=page;}
function applyJob(title){alert("You applied for "+title+"!");}
</script>
</head>
<body>
<nav>
<h2>Job Portal</h2>
<div>
<button onclick="go('add_jobs.php')">Add Job</button>
<button onclick="go('dashboard.php')">Dashboard</button>
<button onclick="go('profile.php')">Profile</button>
<button onclick="go('logout.php')">Logout</button>
</div>
</nav>
<div class="container">
<h2>Available Jobs</h2>
<div class="job-card"><h3>Frontend Developer</h3><p>Company: Techify Solutions | Lahore</p><p>Experience: 2+ years | Salary: Rs 80,000 – 120,000</p><button class="apply" onclick="applyJob('Frontend Developer')">Apply</button></div>
<div class="job-card"><h3>Graphic Designer</h3><p>Company: Creative Minds | Karachi</p><p>Experience: 1+ year | Salary: Rs 60,000 – 90,000</p><button class="apply" onclick="applyJob('Graphic Designer')">Apply</button></div>
<div class="job-card"><h3>Project Manager</h3><p>Company: Global Tech | Islamabad</p><p>Experience: 5+ years | Salary: Rs 150,000 – 200,000</p><button class="apply" onclick="applyJob('Project Manager')">Apply</button></div>
</div>
</body>
</html>
