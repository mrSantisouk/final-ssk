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

        $requiredFields = ['from_number', 'name', 'old', 'employment', 'national', 'current', 'khoum', 'nuay', 'home_number', 'family_namber', 'date', 'district', 'province', 'father_name', 'mother_name', 'father_village', 'father_district', 'father_province', 'picture' ];
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
            $from_number = $_POST['from_number'];
            $name = $_POST['name'];
            $old = $_POST['old'];
            $employment = $_POST['employment'];
            $national = $_POST['national'];
            $current = $_POST['current'];
            $khoum = $_POST['khoum'];
            $nuay = $_POST['nuay'];
            $home_number = $_POST['home_number'];
            $family_namber = $_POST['family_namber'];
            $date = $_POST['date'];
            $district = $_POST['district'];
            $province = $_POST['province'];
            $father_name = $_POST['father_name'];
            $mother_name = $_POST['mother_name'];
            $father_village = $_POST['father_village'];
            $father_district = $_POST['father_district'];
            $father_province = $_POST['father_province'];
            $picture = $_POST['picture'];
            
    
            // Prepare and execute SQL query
            $sql = "INSERT INTO from_yungyuentu (from_number, name, old, employment, national, current, khoum, nuay, home_number, family_namber, date, district, province, father_name, mother_name, father_village, father_district, father_province, picture) 
                    VALUES (:from_number, :name, :old, :employment, :national, :current, :khoum, :nuay,  :home_number, :family_namber, :date, :district, :province, :father_name, :mother_name, :father_village, :father_district, :father_province, :picture)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':from_number', $from_number, PDO::PARAM_STR);
            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':old', $old, PDO::PARAM_INT);
            $query->bindParam(':employment', $employment, PDO::PARAM_STR);
            $query->bindParam(':national', $national, PDO::PARAM_STR);
            $query->bindParam(':current', $current, PDO::PARAM_STR);
            $query->bindParam(':khoum', $khoum, PDO::PARAM_STR);
            $query->bindParam(':nuay', $nuay, PDO::PARAM_STR);
            $query->bindParam(':home_number', $home_number, PDO::PARAM_STR);
            $query->bindParam(':family_namber', $family_namber, PDO::PARAM_STR);
            $query->bindParam(':date', $date, PDO::PARAM_INT);
            $query->bindParam(':district', $district, PDO::PARAM_STR);
            $query->bindParam(':province', $province, PDO::PARAM_STR);
            $query->bindParam(':father_name', $father_name, PDO::PARAM_STR);
            $query->bindParam(':mother_name', $mother_name, PDO::PARAM_STR);
            
            $query->bindParam(':father_village', $father_village, PDO::PARAM_STR);
            $query->bindParam(':father_district', $father_district, PDO::PARAM_STR);
            $query->bindParam(':father_province', $father_province, PDO::PARAM_STR);
            $query->bindParam(':picture', $picture, PDO::PARAM_STR);
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
    <title >  </title>
  
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
    <link rel="stylesheet" href="./from.css">
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
                            <h4 class="page-title pull-left">ໃບຢັ້ງຢືນທີ່ຢູ່</h4>
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
                                        <label for="example-text-input" class="col-form-label">ຕິດຮູບ3*4</label>
                                        <input type="file" id="avatar" name="picture" accept="image/png, image/jpeg" />
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ເລກທີ</label>
                                        <input class="form-control"  type="text" id="tentacles" name="from_number" min="10" max="100" />
                                        </div>
            
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຂໍຢັ້ງຢືນວ່າ ທ້າວ ຫຼື ນາງ</label>
                                            <textarea class="form-control" name="name" type="text"  length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ອາຍຸ</label>
                                            <input class="form-control" type="number" id="tentacles" name="old" min="10" max="100" />
                                        </div>
                                        <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">ອາຊິບ</label>
                                            <textarea class="form-control" name="employment" type="text"  length="100" id="example-text-input" rows="1" ></textarea> 
                                        </div>

                                        <!-- <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">End Date</label>
                                            <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="todate">
                                        </div> -->
                                         <div class="form-group">
                                             <label for="example-text-input" class="col-form-label">ສັນຊາດ</label>
                                            <textarea class="form-control"  type="text" name="national" length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                        </div>
                                        <div class="form-group">
                                             <label for="example-text-input" class="col-form-label">ທີຢູ່ປັດຈຸບັນບ້ານ</label>
                                            <textarea class="form-control"  type="text" name="current" length="100" id="example-text-input" rows="1" ></textarea> 
                                        </div>
                                        <div>
                                             <label for="example-text-input" class="col-form-label">ຄຸ້ມ</label>
                                            <input class="form-control" type="number" id="tentacles" name="khoum" min="0" max="1000" />
                                        </div>
                                        <div>
                                             <label for="example-text-input" class="col-form-label">ໜ່ວຍ</label>
                                            <input class="form-control" type="number" id="tentacles" name="nuay" min="0" max="1000" />
                                        </div>
                                        <div>
                                            <label for="example-text-input" class="col-form-label">ເຮືອນເລກທີ</label>
                                            <input class="form-control" type="number" id="tentacles" name="home_number" min="0" max="1000" />
                                        </div>
                                       
                                        <div class="form-group">
                                             <label for="example-text-input" class="col-form-label">ເລກທີສຳມະໂນຄົວທີ</label>
                                            <input class="form-control" type="number" id="tentacles" name="family_namber" min="0" max="1000" />
                                        </div>  
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ລົງວັນທີ</label>
                                        <input class="form-control" type="date" value="2020-03-05" data-inputmask="'alias': 'date'" required id="example-date-input" name="date">           
                                        </div> 
                                      
                                            
                                        
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                        <textarea class="form-control"  type="text" name="district" length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                            
                                    
                                        <div class="form-group">
                                            
                                        <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                        <select class="custom-select" name="province" autocomplete="off"  id="">
                                                <option value="">ກາລູນາເລືອກແຂວງ</option>
                                                <?php $sql = "SELECT province from tbl_province";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0) {
                                                        foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->province);?>"><?php echo htmlentities($result->province);?></option>
                                                <?php }
                                            } 
                                            // if(isset($_POST['classroom'])){
                                            //     foreach($_POST['classroom'] as $selected){
                                            //         echo $selected;
                                            //     }
                                            // }
                                            ?>
                                                        
                                            
                                           
                                            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ເປັນລູກຂອງທ້າວ</label>
                                            <textarea class="form-control" name="father_name" type="text"  length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                        </div>
                                       
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ແລະ ນາງ</label>
                                            <textarea class="form-control" name="mother_name" type="text"  length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                            <textarea class="form-control" name="father_village" type="text"  length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <textarea class="form-control" name="father_district" type="text"  length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                                
                                        
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ແຂວງ</label>
                                            <select class="custom-select" name="father_province" autocomplete="off"  id="">
                                                    <option value="">ກາລູນາເລືອກແຂວງ</option>

                                                    <?php $sql = "SELECT province from tbl_province";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0) {
                                                        foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->province);?>"><?php echo htmlentities($result->province);?></option>
                                                <?php }
                                            } 
                                            // if(isset($_POST['classroom'])){
                                            //     foreach($_POST['classroom'] as $selected){
                                            //         echo $selected;
                                            //     }
                                            // }
                                            ?>
                    
                                                </select>
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
<?php 
} ?> 