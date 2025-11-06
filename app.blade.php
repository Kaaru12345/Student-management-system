<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Student Management System - Demo</title>
    <style>
    body { font-family: Arial, sans-serif; margin:0; background:#f4f6fb; }
    .sidebar { width:220px; background:#0b3b66; color:#fff; min-height:100vh; float:left; padding:20px; }
    .content { margin-left:240px; padding:24px; }
    .card { background:#fff; padding:16px; border-radius:8px; box-shadow:0 1px 3px rgba(0,0,0,0.1); margin-bottom:16px; }
    table { width:100%; border-collapse:collapse; }
    th,td { padding:10px; border-bottom:1px solid #eee; text-align:left; }
    .btn { background:#0b6bd6; color:#fff; padding:8px 12px; border-radius:6px; text-decoration:none; display:inline-block; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>SMS Demo</h2>
        <p><a href="/dashboard" style="color:#fff;text-decoration:none">Dashboard</a></p>
        <p><a href="/students" style="color:#fff;text-decoration:none">Students</a></p>
        <p><a href="/students/create" style="color:#fff;text-decoration:none">Add Student</a></p>
        <p><a href="/attendance" style="color:#fff;text-decoration:none">Attendance</a></p>
        <p><a href="/marks" style="color:#fff;text-decoration:none">Marks</a></p>
        <p><a href="/fees" style="color:#fff;text-decoration:none">Fees</a></p>
    </div>
    <div class="content">
        <?php if(session('success')): ?>
            <div class="card"><?php echo session('success'); ?></div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
