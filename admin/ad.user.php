<?php
session_start();
error_reporting(0);
include('../from/dbconn.php');

if(strlen($_SESSION['alogin']) == 0) {   
    header('location:index.php');
} else {
    if(isset($_POST['add'])) {
        // Retrieve form data
        $F_name = $_POST['F_name']; 
        $L_name = $_POST['L_name']; 
        $Gender = $_POST['Gender']; 
        $Birthday = $_POST['Birthday']; 
        $Tel = $_POST['Tel']; 
        $Age = $_POST['Age']; 
        $Jobs = $_POST['Jobs']; 
        $Religion = $_POST['Religion']; 
        $National = $_POST['National']; 
        $Status = $_POST['Status']; 
        $Villege = $_POST['Villege']; 
        $City = $_POST['City']; 
        $Province = $_POST['Province']; 
        $Picture = $_POST['Picture']; 
        $Father_name = $_POST['Father_name']; 
        $Mother_name = $_POST['Mother_name']; 
        $Family_number = $_POST['Family_number']; 
        $Family_date = $_POST['Family_date']; 
        $House_number = $_POST['House_number']; 
        $Unit = $_POST['Unit']; 
        $Card_number = $_POST['Card_number'];
        $Card_date = $_POST['Card_date']; 
        $Card_issued_by = $_POST['Card_issued_by']; 
        $Road = $_POST['Road']; 
        $Time = $_POST['Time']; 
        $Content = $_POST['Content']; 
        $Dear = $_POST['Dear']; 
        $Day = $_POST['Day']; 
        $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT); // Hash the password
        $username = $_POST['Username']; 

        try {
            // Prepare the SQL query
            $sql = "INSERT INTO tbl_user(F_name, L_name, Gender, Birthday, Tel, Age, Jobs, Religion, National, Status, Villege, City, Province, Picture, Father_name, Mother_name, Family_number, Family_date, House_number, Unit, Card_number, Card_date, Card_issued_by, Road, Time, Content, Dear, Day, Password, Username) 
                    VALUES (:F_name, :L_name, :Gender, :Birthday, :Tel, :Age, :Jobs, :Religion, :National, :Status, :Villege, :City, :Province, :Picture, :Father_name, :Mother_name, :Family_number, :Family_date, :House_number, :Unit, :Card_number, :Card_date, :Card_issued_by, :Road, :Time, :Content, :Dear, :Day, :Password, :Username)";

            // Bind parameters to the query
            $query = $dbh->prepare($sql);
            $query->bindParam(':F_name', $F_name, PDO::PARAM_STR);
            $query->bindParam(':L_name', $L_name, PDO::PARAM_STR);
            $query->bindParam(':Gender', $Gender, PDO::PARAM_STR);
            $query->bindParam(':Birthday', $Birthday, PDO::PARAM_STR);
            $query->bindParam(':Tel', $Tel, PDO::PARAM_STR);
            $query->bindParam(':Age', $Age, PDO::PARAM_STR);
            $query->bindParam(':Jobs', $Jobs, PDO::PARAM_STR);
            $query->bindParam(':Religion', $Religion, PDO::PARAM_STR);
            $query->bindParam(':National', $National, PDO::PARAM_STR);
            $query->bindParam(':Status', $Status, PDO::PARAM_STR);
            $query->bindParam(':Villege', $Villege, PDO::PARAM_STR);
            $query->bindParam(':City', $City, PDO::PARAM_STR);
            $query->bindParam(':Province', $Province, PDO::PARAM_STR);
            $query->bindParam(':Picture', $Picture, PDO::PARAM_STR);
            $query->bindParam(':Father_name', $Father_name, PDO::PARAM_STR);
            $query->bindParam(':Mother_name', $Mother_name, PDO::PARAM_STR);
            $query->bindParam(':Family_number', $Family_number, PDO::PARAM_STR);
            $query->bindParam(':Family_date', $Family_date, PDO::PARAM_STR);
            $query->bindParam(':House_number', $House_number, PDO::PARAM_STR);
            $query->bindParam(':Unit', $Unit, PDO::PARAM_STR);
            $query->bindParam(':Card_number', $Card_number, PDO::PARAM_STR);
            $query->bindParam(':Card_date', $Card_date, PDO::PARAM_STR);
            $query->bindParam(':Card_issued_by', $Card_issued_by, PDO::PARAM_STR);
            $query->bindParam(':Road', $Road, PDO::PARAM_STR);
            $query->bindParam(':Time', $Time, PDO::PARAM_STR);
            $query->bindParam(':Content', $Content, PDO::PARAM_STR);
            $query->bindParam(':Dear', $Dear, PDO::PARAM_STR);
            $query->bindParam(':Day', $Day, PDO::PARAM_STR);
            $query->bindParam(':Password', $Password, PDO::PARAM_STR);
            $query->bindParam(':Username', $username, PDO::PARAM_STR);

            // Execute the query
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if($lastInsertId) {
                $msg = "New admin has been added successfully";
            } else {
                $error = "Error: Could not add admin";
            }
        } catch (PDOException $e) {
            $error = "Error: " . $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel - Employee Leave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">
        function valid(){
            if(document.addemp.Password.value!= document.addemp.confirmpassword.value) {
            alert("ລະຫັດຂອງທ່ານບໍຕົງກັນ  !!");
            document.addemp.confirmpassword.focus();
            return false;
                } return true;
        }
    </script>

    <!-- <script>
        function checkAvailabilityEmpid() {
            $("#loaderIcon").show();
            jQuery.ajax({
            url: "check_availability.php",
            data:'empcode='+$("#empcode").val(),
            type: "POST",
            success:function(data){
            $("#empid-availability").html(data);
            $("#loaderIcon").hide();
            },
            error:function (){}
            });
        }
    </script> -->

    <!-- <script>
        function checkAvailabilityEmailid() {
            $("#loaderIcon").show();
            jQuery.ajax({
            url: "check_availability.php",
            data:'emailid='+$("#email").val(),
            type: "POST",
            success:function(data){
            $("#emailid-availability").html(data);
            $("#loaderIcon").hide();
            },
            error:function (){}
            });
        }
    </script> -->
</head>
<style>
    .saibar{
        background: black;
    }
    
    .header-area {
    padding: 15px 30px;
    background: #00ad9d;
    border-bottom: 1px solid #d8e3e7;
  }
  .nav-btn {
        position: fixed;
        z-index: 99;
        left: 275px;
       
        padding: 14px;
        top: 0;
        margin: 0;
    }
    .nav-btn span {
        background: #fffbfb;
    }
    .notification-area li > i {
  font-size: 26px;
  color: #FFFFFF;
  vertical-align: middle;
  text-shadow: 0 0 8px rgba(0, 0, 0, 0.12);
  -webkit-transition: color 0.3s ease 0s;
  transition: color 0.3s ease 0s;
}
.user-profile {
  margin-right: -30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  background: -webkit-linear-gradient(left, #d80000 0%, #8063f5 100%);
  background: linear-gradient(to right, #0087FF 0%, #044B8A 100%);
  padding: 17px 38px;
  position: relative;
}
.cardbody {
  padding: 50.6px;
  padding: 2.6rem;
}

</style>
<body >
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu saibar">
            
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='dashboard';
                        include './admin-sidebar.php';
                    ?>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>

                            <!-- Notification bell -->
                           

                        </ul>
						<!-- notification ends -->
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">ເພີ່ມລູກບ້ານ</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.php">ໜ້າຫຼັກ</a></li>
                                <li><span>ພະນັກງານ ແລະ ນາຍບ້ານດອນແດງ</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../assets/images/admin.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">ພະນັກງານ ແລະ ນາຍບ້ານດອນແດງ <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout.php">ອອກຈາກລະບົບ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                    <div class="row">
                
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                            
                                <div class="alert alert-danger alert-dismissible fade show">
                                 <strong>Info: </strong>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                                  </button>
                                 </div>
                                 <?php if($msg){?>
                                <div class="alert alert-success alert-dismissible fade show">
                                 <strong>Info: </strong><?php echo htmlentities($msg); ?> 
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                                 </button>
                                  </div>
                                <?php }?>
                            
                            
                                <div class="card">
                                <form name="addemp" method="POST">

                                <div class="card-body">
                                        <p class="text-muted font-14 mb-4">ກະລຸນາກອກຂໍ້ມູນ</p>
                                    
                                        <div class="form-group">
                                        <label for="Picture">Picture</label>
                                        <input type="file" accept="image/*" class="form-control" required id="image" name="Picture">
                                    </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຊື່  </label>
                                            <input class="form-control" name="F_name"  type="text" required id="example-text-input">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ນາມສະກຸນ </label>
                                            <input class="form-control" name="L_name"  type="text" required id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                        <label for="Gender">ເພດ</label>
                                        <select name="Gender" class="form-control" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
<!-- 
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ເພດ</label>
                                            <input class="form-control" name="Gender" type="text"  autocomplete="off" required id="example-email-input">
                                        </div> -->


                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ວັນເດືອນປີເກີດ</label>
                                            <input class="form-control" name="birthday" type="date"   autocomplete="off" required id="example-text-input">
                                        </div>


                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເບີໂທລະສັບ</label>
                                            <input class="form-control" name="tel" type="number" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ອາຍຸ</label>
                                            <input class="form-control" name="age" type="number" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ເຮັດວຽກຢູ່</label>
                                            <input class="form-control" name="jobs" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ສາສະໜາ</label>
                                            <input class="form-control" name="religion" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ສັນຊາດ</label>
                                            <input class="form-control" name="national" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ສະຖານະ</label>
                                            <input class="form-control" name="status" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            
                                            <label for="example-text-input" class="col-form-label">ບ້ານ</label>
                                            <textarea class="form-control" name="villege" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                            <label for="example-text-input" class="col-form-label">ເມືອງ</label>
                                            <textarea class="form-control" name="city" type="text" length="100" id="example-text-input" rows="1" ></textarea>
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
                                            } ?>
                    
                                                </select>
                                            </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ຊື່ແລະນາມສະກຸນພໍ່</label>
                                            <input class="form-control" name="father_name" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ຊື່ແລະນາມສະກຸນແມ່</label>
                                            <input class="form-control" name="mother_name" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເລກທີສຳມະໂນຄົວ</label>
                                            <input class="form-control" name="Family_number" type="number" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ວັນອອກປືມສໍາມະໂນຄົວ</label>
                                            <input class="form-control" name="Family_date" type="date" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ບ້ານເລກທີ</label>
                                            <input class="form-control" name="House_number" type="number" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ໜ່ວຍ</label>
                                            <input class="form-control" name="Unit" type="number" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເລກບັດປະຈໍາໂຕ</label>
                                            <input class="form-control" name="Card_number" type="number" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ເລກທີອອກບັດປະຈໍາໂຕ</label>
                                            <input class="form-control" name="Card_date" type="date" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ໝົດວັນທີ</label>
                                            <input class="form-control" name="Card_issued_by" type="date" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ຖະໜົນ</label>
                                            <input class="form-control" name="mother_name" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ເວລາ</label>
                                            <input class="form-control" name="Time" type="Time"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ເລື່ອງ</label>
                                            <input class="form-control" name="Content" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ຮຽນ</label>
                                            <input class="form-control" name="Dear" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">ລົງວັນທີ</label>
                                            <input class="form-control" name="day" type="date"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Username</label>
                                            <input class="form-control" name="Username" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Password</label>
                                            <input class="form-control" name="Password" type="password"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຢືນຢັນ ລະຫັດຜ່ານ</label>
                                            <input class="form-control" name="confirmpassword" type="password" autocomplete="off" required>
                                        </div>


                                       
                        

                                        <button class="btn btn-primary" name="add" id="update" type="submit" onclick="return valid();">PROCEED</button>
                                        
                                    </div>
                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
          
                <!-- sales report area end -->
                
                <!-- row area start -->
               
                <!-- row area end -->
                
                </div>
                <!-- row area start-->
            </div>
            <!-- <?php include '../includes/footer.php' ?> -->
        <!-- footer area end-->
     
        <!-- main content area end -->

        

    </div>
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>