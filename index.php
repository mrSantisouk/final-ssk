<?php
session_start();
if (!isset($_SESSION['user_login'])) { // If the user is not logged in
    header("location: login.php"); // Redirect to the login page
    exit;
}

$user = $_SESSION['user_login'];

// Redirect based on user level
if ($user['level'] == 'administrator') {
    header("location: admin.php"); // Redirect to the admin page
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="./assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/metisMenu.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="./assets/css/typography.css">
    <link rel="stylesheet" href="./assets/css/default-css.css">
    <link rel="stylesheet" href="./assets/css/fonts.css">
   
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="./assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<style>
* {box-sizing: border-box}
body{
    background-color: #bbb;
}
a{
    font-family: 'Noto Sans Lao', sans-serif;
}  
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a style="font-family: Noto Sans Lao;" class="navbar-brand fw-bold text-uppercase" href="#">ເວັບໄຊຫ້ອງການບ້ານດອນແດງ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php" style="font-family: Noto Sans Lao;">
                        <i  class="bi bi-house-fill me-1"></i>ໜ້າຫຼັກ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#" style="font-family: Noto Sans Lao;">
                        <i class="bi bi-people-fill me-1"></i>ແຈ້ງການ
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        ໃບຄຳຮ້ອງ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a target="_blank" href="print-details.php?id=<?=$row['id']?>" class="btn btn-sm btn-primary"> <i class="fa fa-file-pdf-o"></i> Print  Details</a> -->
                        <li><a class="dropdown-item" target="_blank" href="print-details.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-houses-fill me-2"></i>ໃບຢັ້ງຢືນທີ່ຢູ່</a></li>
                        <li><a class="dropdown-item" target="_blank" href="print-details2.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ໃບຄຳຮ້ອງ</a></li>
                        <li><a class="dropdown-item" target="_blank" href="print-details3.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-journals me-2"></i>ໃບຢັ້ງຢືນ</a></li>
                        <li><a class="dropdown-item" target="_blank" href="print-details4.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ໃບຊີວະປະຫວັດ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ໃບຄຳຮ້ອງຂໍຖືບັດພັກເຊົາຊົ່ວຄາວ</a></li>
                    </ul>

                        
                </li>   
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        ລາຍງານ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="" style="font-family: Noto Sans Lao;"><i class="bi bi-houses-fill me-2"></i>ລາຍງານໃບຢັ້ງຢືນທີ່ຢູ່</a></li>
                        <li><a class="dropdown-item" href="profile.php" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ລາຍງານໃບຄຳຮ້ອງ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journals me-2"></i>ລາຍງານໃບຢັ້ງຢືນ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ລາຍງານໃບຊີວະປະຫວັດ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ລາຍງານນັດໝາຍ</a></li>
                    </ul>
                </li>  
            </ul>
                    <li style="font-family: Noto Sans Lao;" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ສະບາຍດີ<?php echo $user['fullname']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ຂໍ້ມູນສ່ວນຕົວ</a></li>
                            <li><a class="dropdown-item" href="logout_action.php">ອອກ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="main-content-inner">
        <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <a href="#" style="font-family: 'Noto Sans Lao', sans-serif;" class="header-title mb-0">ໃບຢັ້ງຢືນທີ່ຢູ່</a>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <h1><?php include 'counters/leavetype-counter.php'?></h1> -->
                                        <span>Leave Types</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-users"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                    <a href="#"  style="font-family: 'Noto Sans Lao', sans-serif;"class="header-title mb-0">ໃບຄຳຮ້ອງ</a>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <h1><?php include 'counters/emp-counter.php'?></h1> -->
                                        <span>ເອກະສານ</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-th-large"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <a href="#" style="font-family: 'Noto Sans Lao', sans-serif;" class="header-title mb-0"> ໃບຢັ້ງຢືນ</a>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <h1><?php include 'counters/dept-counter.php'?></h1> -->
                                        <span>ຈຳນວນ</span>
                                    </div>
                                </div>
                                <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-spinner"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                    <a style="font-family: 'Noto Sans Lao', sans-serif;" href="#" class="header-title mb-0"> ໃບຊີວະປະຫວັດ</a>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <h1><?php include 'counters/pendingapp-counter.php'?></h1> -->
                                        <span>ຈຳນວນ</span>
                                    </div>
                                </div>
                               
                                <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
    </div>
<!--   
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="download.jfif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="sadsa.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="yee.jfif" alt="Third slide">
    </div>
  </div> -->
</div>
    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
