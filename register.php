<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>
<style>
  body {
    background-color: #f8f9fa;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    width: auto;
  }

  .register-box {
    width: 3000px;
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  .register-box h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
  }

  .btn {
    font-weight: bold;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }

  .btn-secondary {
    background-color: #23B81D;
    border-color: #23B81D;
  }

  .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
  }

  .btn-lg {
    padding: 10px 20px;
    font-size: 18px;
  }
</style>
<body>
<div class="container" style="display: flex; justify-content: center; align-items: center;">
    <div class="register-box bg-light p-5 rounded mt-3" style="background-color: #f8f9fa; border-radius: 10px; padding: 30px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
        <h1 style="text-align: center; margin-bottom: 30px; color: #333;">ລົງທະບຽນ</h1>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; width: 100%;">
            <a href="user.php" class="btn btn-primary" style="font-weight: bold;  margin-right: 10px; margin-bottom: 10px; background-color: #007bff; border-color: #007bff; padding: 10px 20px; font-size: 18px;">ລູກບ້ານ</a>
            <a href="guest.php" class="btn btn-secondary" style="font-weight: bold; margin-right: 10px; margin-bottom: 10px; background-color: #23B81D; border-color: #23B81D; padding: 10px 20px; font-size: 18px;">ຜູ້ພັກເຊົາ</a>
        </div>

        <a href="login.php" class="btn btn-danger" style="font-weight: bold; width: 100%; max-width: calc(33.33% - 10px); margin-bottom: 10px; background-color: #dc3545; border-color: #dc3545; padding: 10px 20px; font-size: 18px;">ອອກ</a>
    </div>
</div>
</body>

</html>