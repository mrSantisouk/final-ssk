<?php
session_start();
error_reporting(0);
include('../from/dbconn.php');

if(strlen($_SESSION['alogin']) == 0) {   
    header('location:index.php');
} else {
    if(isset($_POST['add'])) {
        $Admin_type = $_POST['Admin_type']; 
        $Admin_name = $_POST['Admin_name']; 
        $email = $_POST['email']; 
        $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT); // Hash the password
        $username = $_POST['Username']; 
        
        try {
            $sql = "INSERT INTO tbl_admin(Admin_type, Admin_name, email, Password, Username) VALUES(:Admin_type, :Admin_name, :email, :Password, :Username)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':Admin_name', $Admin_name, PDO::PARAM_STR);
            $query->bindParam(':Admin_type', $Admin_type, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':Password', $Password, PDO::PARAM_STR);
            $query->bindParam(':Username', $username, PDO::PARAM_STR);

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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Custom form script -->
    <script type="text/javascript">
        function valid(){
            if(document.addemp.password.value!= document.addemp.confirmpassword.value) {
            alert("New Password and Confirm Password Field do not match  !!");
            document.addemp.confirmpassword.focus();
            return false;
                } return true;
        }
    </script>

    <script>
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
    </script>

    <script>
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
    </script>
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

<body>
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
                                        <p class="text-muted font-14 mb-4">ກາລຸນາປ້ອນຂໍ້ມູນຢ່າງຄົບຖ້ວນ</p>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Admin_type</label>
                                            <input class="form-control" name="Admin_type" type="text"  autocomplete="off" required id="example-email-input">
                                        </div>
                                    

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຊື່ ແລະ ນາມສະກຸນ ພະນັກງານ</label>
                                            <input class="form-control" name="Admin_name"  type="text" required id="example-text-input">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Email ID</label>
                                            <input class="form-control" name="email" type="email"  autocomplete="off" required id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">username</label>
                                            <input class="form-control" name="Username" type="text"   autocomplete="off" required id="example-text-input">
                                        </div>

                                        <h4>Setting Passwords</h4>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ລະຫັດຜ່ານ</label>
                                            <input class="form-control" name="Password" type="Password" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ຢືນຢັນ ລະຫັດຜ່ານ</label>
                                            <input class="form-control" name="confirmpassword" type="password" autocomplete="off" required>
                                        </div>

                        

                                        <button class="btn btn-primary" name="add" id="update" type="submit" onclick="return valid();">ຢືນຢັນ</button>
                                        
                                    </div>
                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php include '../includes/footer.php' ?>
        <!-- footer area end-->
        </div>
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

