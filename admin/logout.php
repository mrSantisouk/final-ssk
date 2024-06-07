<?php
session_start();
session_destroy(); // ลบ session ทั้งหมด
header("location: loginadmin.php"); // redirect ไปยังหน้า login.php