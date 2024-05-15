<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .user li a.nav-link {
    font-size: 1px;
}

.dropdown-menu .dropdown-item {
    font-size: 15px; /* Adjust the font size as needed */
}

    </style>
</body>
</html>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-uppercase" href="#">ເວັບໄຊຫ້ອງການບ້ານດອນແດງ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="home.php" style="font-family: Noto Sans Lao;">
                        <i  class="bi bi-house-fill me-1"></i>ໜ້າຫຼັກ
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        ຈັດການຂໍ້ມູນ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="" style="font-family: Noto Sans Lao;"><i class="bi bi-houses-fill me-2"></i>ຂໍ້ມູນສໍານັກພິມ</a></li>
                        <li><a class="dropdown-item" href="profile.php" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ຂໍ້ມູນນັກຂຽນ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journals me-2"></i>ຂໍ້ມູນປະເພດປື້ມ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ຂໍ້ມູນປື້ມ</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-2" href="#" style="font-family: Noto Sans Lao;">
                        <i class="bi bi-people-fill me-1"></i>ການລົງທະບຽນສະມາຊິກ
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-2" href="#" style="font-family: Noto Sans Lao;">
                        <i class="bi bi-arrow-down-right-circle-fill me-1"></i>ການນໍາເຂົ້າປື້ມໃຫມ່
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-2" href="#" style="font-family: Noto Sans Lao;">
                        <i class="bi bi-journal-check me-1"></i>ການຢືມ-ຄືນປື້ມ
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        ໃຫ້ບໍລິການ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="report1.php" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ຂໍ້ມູນຄຳຮ້ອງລູກບ້ານ</a></li>
                        <li><a class="dropdown-item" href="report.php" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ຂໍ້ມູນຄຳຮ້ອງຜູ້ພັກເຊົາ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-check me-2"></i>ຢືນຢັນການຊຳລະເງີນໂອນ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-currency-dollar me-2"></i>ຢືນຢັນການຊຳລະເງີນສົດ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        ລາຍງານ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ລາຍງານຈໍານວນສະມາຊິກ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ລາຍງານຂໍ້ມູນປື້ມ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-check me-2"></i>ລາຍງານການຢືມ-ຄືນປື້ມ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-currency-dollar me-2"></i>ລາຍງານລາຍຮັບການຢືມປື້ມ</a></li>
                    </ul>
                </li>

                
            </ul>

            <ul class="user mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a 
                    class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        <h1>สวัสดี <?php echo $user['fullname']; ?></h1>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ຂໍ້ມູນສ່ວນຕົວ</a></li>
                        <li><a class="dropdown-item" href="login.php" style="font-family: Noto Sans Lao;"><i class="bi bi-box-arrow-right me-2"></i>ອອກຈາກລະບົບ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>