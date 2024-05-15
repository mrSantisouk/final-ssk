<?php
session_start();
if (!isset($_SESSION['user_login'])) { // If the user is not logged in
    header("location: login.php"); // Redirect to the login page
    exit;
}



// Redirect based on user level
if ($user['level'] == 'administrator') {
    // Display admin-specific content
    // You can include admin.php file here or directly put admin-specific content
    // Here, I'm redirecting to admin.php for demonstration purposes
    header("location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    

    <div class="container">
        <div class="bg-light p-5 rounded mt-3">
            <h1>สวัสดี <?php echo $user['fullname']; ?></h1>
            <h2>ระดับผู้ใช้ <?php echo $user['level']; ?></h2>
            
            <div class="mt-5">
                <?php if ($user['level'] == 'administrator') { ?>
                    <!-- Admin-specific content here -->
                    <a href="admin.php" class="btn btn-lg btn-warning">หน้าสำหรับผู้ดูแลระบบ</a>
                <?php } else { ?>
                    <!-- Regular user content -->
                    <a href="logout_action.php" class="btn btn-lg btn-danger">ออกจากระบบ</a>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
