<?php
session_start();
include('./dbconn.php');

if (!isset($_SESSION['user_login'])) {
     // If the user is not logged in
    header("location: login.php"); // Redirect to the login page
}
else{
    if (!isset($_SESSION['user_login'])) {
        // If the user is not logged in
        header("location: login.php"); // Redirect to the login page
        exit; // Ensure no further code is executed
    }
    
    if (isset($_POST['apply'])) {
        // Check if all required fields are set

        $requiredFields = ['name', 'birth', 'employment','village', 'district', 'province', 'date', 'family_number','issued_by','work','work_village','work_district','work_province','telephone_number','father_name', 'father_old', 'father_employment', 'father_village','father_district','father_province',  'mother_name', 'mother_old', 'mother_employment', 'mother_village', 'morther_district', 'mother_province', 'reason' ];
        $missingFields = [];
    
        foreach ($requiredFields as $field) {
            if (!isset($_POST[$field])) {
                $missingFields[] = $field;
            }
        }
    
        if (!empty($missingFields)) {
            // Handle missing fields
            $error = "The following fields are missing: " . implode(', ', $missingFields);
        } else {
            // Assign variables
            $name = $_POST['name'];
            $birth = $_POST['birth'];
            $employment = $_POST['employment'];
            $national = $_POST['national'];
            $village = $_POST['village'];
            $district = $_POST['district'];
            $province = $_POST['province'];
            $date = $_POST['date'];
            $family_number = $_POST['family_number'];
            $issued_by = $_POST['issued_by'];
            $work = $_POST['work'];
            $work_village = $_POST['work_village'];
            $work_district = $_POST['work_district'];
            $work_province = $_POST['work_province'];
            $telephone_number = $_POST['telephone_number'];
            $father_name = $_POST['father_name'];
            $father_old = $_POST['father_old'];
            
            $father_employment = $_POST['father_employment'];
            $father_village = $_POST['father_village'];
            $father_district = $_POST['father_district'];
            $father_province = $_POST['father_province'];
            $mother_name = $_POST['mother_name'];
            $mother_birth = $_POST['mother_birth'];
            $mother_employment = $_POST['mother_employment'];
            $mother_village= $_POST['mother_village'];
            $mother_district = $_POST['mother_district'];
            $mother_province = $_POST['mother_province'];
            $reason = $_POST['reason'];
            
            
    
            // Prepare and execute SQL query
            $sql = "INSERT INTO from_pavud ('name', 'birth', 'employment','village', 'district', 'province', 'date', 'family_number','issued_by','work','work_village','work_district','work_province','telephone_number','father_name', 'father_old', 'father_employment', 'father_village','father_district','father_province',  'mother_name', 'mother_old', 'mother_employment', 'mother_village', 'morther_district', 'mother_province', 'reason' ) 
                    VALUES (:name, :birth, :employment,:village, :district, :province, :date, :family_number,:issued_by,:work,:work_village,:work_district,:work_province,:telephone_number,:father_name, :father_old, :father_employment, :father_village,:father_district,:father_province,  :mother_name, :mother_old, :mother_employment, :mother_village, :morther_district, :mother_province, :reason)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':birth', $birth, PDO::PARAM_STR);
            $query->bindParam(':employment', $employment, PDO::PARAM_STR);
            $query->bindParam(':village', $village, PDO::PARAM_INT);
            $query->bindParam(':district', $district, PDO::PARAM_STR);
            $query->bindParam(':province', $province, PDO::PARAM_STR);
            $query->bindParam(':date', $date, PDO::PARAM_STR);
            $query->bindParam(':family_number', $birth, PDO::PARAM_STR);
            $query->bindParam(':issued_by', $village, PDO::PARAM_INT);
            $query->bindParam(':work', $work, PDO::PARAM_STR);
            $query->bindParam(':work_village', $work_village, PDO::PARAM_STR);
            $query->bindParam(':work_district', $work_district, PDO::PARAM_STR);
            $query->bindParam(':work_province', $work_province, PDO::PARAM_STR);
            $query->bindParam(':telephone_number', $telephone_number, PDO::PARAM_STR);
            $query->bindParam(':father_name', $father_name, PDO::PARAM_STR);
            $query->bindParam(':father_old', $father_old, PDO::PARAM_STR);
            $query->bindParam(':father_employment', $father_employment, PDO::PARAM_STR);
            $query->bindParam(':father_village', $father_village, PDO::PARAM_STR);
            $query->bindParam(':father_district', $father_district, PDO::PARAM_INT);
            $query->bindParam(':father_province', $father_province, PDO::PARAM_STR);
            $query->bindParam(':mother_name', $homeland_province, PDO::PARAM_STR);
            $query->bindParam(':mother_old', $mother_old, PDO::PARAM_STR);
            $query->bindParam(':mother_employment', $mother_employment, PDO::PARAM_STR);
            $query->bindParam(':mother_village', $mother_village, PDO::PARAM_INT);
            $query->bindParam(':morther_district', $morther_district, PDO::PARAM_STR);
            $query->bindParam(':mother_province', $mother_province, PDO::PARAM_STR);
            $query->bindParam(':reason', $reason, PDO::PARAM_STR);
            
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
    
            if ($lastInsertId) {
                $msg = "ທ່ານປ້ອນຂໍ້ມູນສຳເລັດ";
            } else {
                $error = "ຂໍອາໄພ, ທ່ານປ້ອນຂໍ້ມູນບໍ່ຖືກ. ກາລຸນາລອງໃໝ່ອີກຄັ່ງ.";
            }
        }
    }
    

include('../function.php');
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
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="./from.css">
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
.w3-bar {
  width: 100%;
  overflow: hidden;
  background-color: #000000;
}
</style>
<body>
    
<div class="w3-top nav">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="../index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>ໜ້າຫຼັກ</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ໂຄງຮ່າງການຈັດຕັ້ງ</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ແຈ້ງການ </a>
  <a href="#notice" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ການເຄື່ອນໄຫວ</a>
  <a href="#form" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ໃບຄຳຮ້ອງ</a>
  <a href="../h2.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ລູກບ້ານ</a>
  <a href="../h.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ຜູ້ພັກເຊົ່າ</a>
  
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ຕິດຕໍ່</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div> 
    <div class="main-content">
            <!-- header area start -->
           
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">ຄຳຮ້ອງຂໍຖືບັດພັກເຊົ່າຊົ່ວຄາວ</h4>
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
                           
                            
                            <!-- <?php if($error){?><div class="alert alert-danger alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($error); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            
                             </div><?php } 
                                 else if($msg){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($msg); ?> 
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 </div><?php }?> -->
                                <div class="card">
                                <form name="addemp" method="POST">

                                <div class="card-body">
                                        <h4 class="header-title">ກາລຸນາປ້ອນຂໍ້ມູນ</h4>
                                        <!-- <p class="text-muted font-14 mb-4">Please fill up the form below.</p> -->
                                       
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຊື່ ແລະ ນາມສະກຸນ</label>
                                            <textarea class="form-control" name="name" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ວັນ, ເດືອນ, ປີເກີດ</label>
                                        <label for="example-text-input" class="col-form-label">ວັນທີ:</label>
                                        <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="birth">  
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ສັນຊາດ</label>
                                            <textarea class="form-control" name="name" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ມາຈາກບ້ານ</label>
                                            <textarea class="form-control" name="homeland" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <textarea class="form-control" name="homeland_district" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                                
                                        
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                            <select class="custom-select" name="homeland_province" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກແຂວງ</option>
                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                             <label for="example-text-input" class="col-form-label">ຖືປື້ມສຳມະໂນຄົວເລກທີ</label>
                                            <input class="form-control" type="number" id="tentacles" name="family_namber" min="0" max="1000" />
                                        </div>  
                                                <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ລົງວັນທີ:</label>
                                            <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="birth">  
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອອກໃຫ້ໂດຍກອງບັນຊາການ ປກສ ເມືອງ</label>
                                            <textarea class="form-control"  type="text" name="Race" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ບ່ອນເຮັດວຽກ</label>
                                            <textarea class="form-control" name="national" type="text"  length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                            <textarea class="form-control" name="homeland" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <textarea class="form-control" name="homeland_district" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                                
                                        
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                            <select class="custom-select" name="homeland_province" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກແຂວງ</option>
                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                             <label for="example-text-input" class="col-form-label">ເບີໂທລະສັບ</label>
                                            <input class="form-control" type="number" id="tentacles" name="family_namber" min="0" max="1000" />
                                        </div>  
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຊື່ແລະນາມສະກຸນພໍ່</label>
                                            <textarea class="form-control"  type="text" name="Ethnicity" length="100" id="example-text-input" rows="1" ></textarea> 
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອາຍຸ</label>
                                            <input class="form-control" type="number" id="tentacles" name="family_namber" min="0" max="1000" />                                                    
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                            <textarea class="form-control" name="homeland" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <textarea class="form-control" name="homeland_district" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                                
                                        
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                            <select class="custom-select" name="homeland_province" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກແຂວງ</option>
                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຊື່ແລະນາມສະກຸນແມ່</label>
                                            <textarea class="form-control"  type="text" name="Ethnicity" length="100" id="example-text-input" rows="1" ></textarea> 
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອາຍຸ</label>
                                            <input class="form-control" type="number" id="tentacles" name="family_namber" min="0" max="1000" />                                                    
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                            <textarea class="form-control" name="homeland" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <textarea class="form-control" name="homeland_district" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                                
                                        
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                            <select class="custom-select" name="homeland_province" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກແຂວງ</option>
                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ມີຈຸດປະສົງພັກເຊົາຢູ່ໜ່ວຍ</label>
                                            <input class="form-control" type="number" id="tentacles" name="new_nuay" min="0" max="1000" />
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                            <textarea class="form-control" name="homeland" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <textarea class="form-control" name="homeland_district" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                                
                                        
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                            <select class="custom-select" name="homeland_province" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກແຂວງ</option>
                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເປັນເຮືອນ,ຫ້ອງແຖວຂອງທ່ານ</label>
                                            <textarea class="form-control"  type="text" name="Ethnicity" length="100" id="example-text-input" rows="1" ></textarea> 
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ພ້ອມດ້ວຍຜູ້ຕິດຕາມຈຳນວນທັງໝົດ</label>
                                            <input class="form-control" type="number" id="tentacles" name="new_nuay" min="0" max="1000" />
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ຍິງ</label>
                                            <input class="form-control" type="number" id="tentacles" name="new_nuay" min="0" max="1000" />
                                            </div>

                                       
                                       
                                       

                                        <!-- <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອຈສອນ</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="400" id="example-text-input" rows="1"></textarea>
                                        </div> -->

                                        <button class="btn btn-primary" name="apply" id="apply" type="submit">ຢັ້ງຢືນ</button>
                                        <button class="btn btn-primary" id="apply" ><a href="fromphuksaohuamkan.php" style="color: #f2f2f2;"> ຈຳນວນຜູ້ພັກເຊົາລວມກັນ</a></button>
                                        
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
<?php } ?> 