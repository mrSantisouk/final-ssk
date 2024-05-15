<?php
session_start();
if (!isset($_SESSION['user_login'])) { // If the user is not logged in
    header("location: login.php"); // Redirect to the login page
    exit;
}
include('../function.php');
$user = $_SESSION['user_login'];

// Redirect based on user level
if ($user['level'] == 'administrator') {
    header("location: admin.php"); // Redirect to the admin page
    exit;
}
$lastInsertId = null;
if($lastInsertId)
{
     $msg="ສົ່ງຂໍ້ມູນສຳເລັດ";
}   else    {
    $error="ຂໍອະໄພປ້ອນຂໍ້ມູນບໍ່ຖືກ ລອງໃໝ່ອີກຄັ້ງ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title >  ສະຖາບັນການທະນາຄານ</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/BI.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
    <div class="main-content">
            <!-- header area start -->
           
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">ໃບຊີວະປະຫວັດ</h4>
                            <ul class="breadcrumbs pull-left">
                                
                                <li><span>ຟອມສຳລັບປ້ອນຂໍ້ມູນ</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                            
                     
                            
                        

                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                           
                            
                            <?php if($error){?><div class="alert alert-danger alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($error); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            
                             </div><?php } 
                                 else if($msg){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($msg); ?> 
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 </div><?php }?>
                                <div class="card">
                                <form name="addemp" method="POST">

                                <div class="card-body">
                                        <h4 class="header-title">ກາລຸນາປ້ອນຂໍ້ມູນ</h4>
                                        <!-- <p class="text-muted font-14 mb-4">Please fill up the form below.</p> -->
                                       
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຊື່ ແລະ ນາມສະກຸນ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ວັນ, ເດືອນ, ປີເກີດ</label>
                                        <label for="example-text-input" class="col-form-label">ວັນທີ:</label>
                                        <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="fromdate">  
                                        </div>

                                        <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ບ້ານເກີດ</label>
                                            <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກບ້ານ</option>
                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກເມືອງ</option>
                    
                                                </select>
                                            </div>
                                                
                                        
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                            <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກແຂວງ</option>
                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເຊື້ອຊາດ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ສັນຊາດ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຊົນເຜົ່າ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea> 
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ສາສະໜາ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ລະດັບການສຶກສາມັນ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ວິຊາສະເພາະ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຊັ້ນວິຊາສະເພາະ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອາຊິບປັດຈຸບັນ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ບ່ອນປະຈໍາການ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ໜ້າທີ່ຮັບຜິດຊອບ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ວັນ, ເດືອນ, ປີ ສັງກັດລັດ</label>
                                            <input class="form-control" type="number" id="tentacles" name="tentacles" min="10" max="100" />
                                        </div>

                                    
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ປັດຈຸບັນຢູ່ໜ່ວຍ</label>
                                        <input class="form-control" type="number" id="tentacles" name="tentacles" min="0" max="1000" />
                                        </div>
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກບ້ານ</option>
                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກເມືອງ</option>
                
                                            </select>
                                        </div>
                                            
                                    
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກແຂວງ</option>
                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">2. ການເຄື່ອນໄຫວຂອງຕົນໃນໄລຍະ (ອາຍຸ 8 ປີ ເຖີງປະຈຸບັນ)</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="15" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຊື່ ແລະ ນາມສະກຸນ ພໍ່</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ວັນ, ເດືອນ, ປີເກີດ</label>
                                        <label for="example-text-input" class="col-form-label">ວັນທີ:</label>
                                        <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="fromdate">  
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເຊື້ອຊາດ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ສັນຊາດ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອາຊິບ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea> 
                                            </div>
                                            <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ປັດຈຸບັນຢູ່ໜ່ວຍ</label>
                                        <input class="form-control" type="number" id="tentacles" name="tentacles" min="0" max="1000" />
                                        </div>
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກບ້ານ</option>
                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກເມືອງ</option>
                
                                            </select>
                                        </div>
                                            
                                    
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກແຂວງ</option>
                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຊື່ ແລະ ນາມສະກຸນ ແມ່</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ວັນ, ເດືອນ, ປີເກີດ</label>
                                        <label for="example-text-input" class="col-form-label">ວັນທີ:</label>
                                        <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="fromdate">  
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເຊື້ອຊາດ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ສັນຊາດ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອາຊິບ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="1" ></textarea> 
                                            </div>
                                            <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ປັດຈຸບັນຢູ່ໜ່ວຍ</label>
                                        <input class="form-control" type="number" id="tentacles" name="tentacles" min="0" max="1000" />
                                        </div>
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກບ້ານ</option>
                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກເມືອງ</option>
                
                                            </select>
                                        </div>
                                            
                                    
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                        <select class="custom-select" name="leavetype" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກແຂວງ</option>
                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຊື ແລະ ນາມສະກຸນ, ອາຍຸ, ບ່ອນຢູ່ຂ້ອງອ້າຍ, ເອື້ອຍ, ນ້ອງຄິງ, ຂອງຕົນ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="100" id="example-text-input" rows="15" ></textarea>
                                        </div>
                                        <div class="form-group">    
                                        <label for="example-text-input" class="col-form-label">ທີ່:</label>
                                        <input class="form-control" type="number" id="tentacles" name="tentacles" min="0" max="1000" />
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ວັນທີ:</label>
                                        <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="fromdate">           
                                        </div> 


                                        <!-- <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອຈສອນ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="400" id="example-text-input" rows="1"></textarea>
                                        </div> -->

                                        <button class="btn btn-primary" name="apply" id="apply" type="submit">ຢັ້ງຢືນ</button>
                                        
                                    </div>
                                </form>
                                </div>
                            </div>
                            
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
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>
