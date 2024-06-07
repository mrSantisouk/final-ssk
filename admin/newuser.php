<?php
    session_start();
    error_reporting(0);
    include('../from/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else { 
    if(isset($_GET['del']))
    {
    
    $sql = "DELETE from  tbl_user  ";
    $query = $dbh->prepare($sql);
   
    $query -> execute();
    $msg="The selected admin account has been deleted";

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</head>
<style>
    .saibar{
        background: black;
    }
    body{
        background-color: #333333 ;
    }
    .header-area {
    padding: 15px 30px;
    background: #00ad9d;
    border-bottom: 1px solid #d8e3e7;
  }
  h3{
    font-family: "Noto Sans Lao", sans-serif;
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
                            <h4 class="page-title pull-left">ຜູ້ລົງທະບຽນໃໝ່</h4>
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
            <br><br><br><br>
            <!-- page title area end -->
          
                <!-- sales report area end -->
                
                <!-- row area start -->
                <div class="row">
                    
                    <!-- trading history area start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="card-body">
                                <div class="data-tables datatable-dark">
                                    <h3>ລູກບ້ານ </h3>
                                    <table id="dataTable3" class="table table-striped table-hover text-center">
                                        <thead class="text-capitalize">
                                        <tr>
                                                <th>#</th>
                                                <th>ເລກທີສຳມະໂນຄົວ</th>
                                                <th>ໜ່ວຍ</th>
                                                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                                <th>ເພດ</th>
                                                <th>ວັນເດືອນປີເກີດ</th>
                                                <th>ເບີໂທລະສັບ</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $sql = "SELECT * from tbl_user  limit 1";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $result)
                                    {               ?>  
                                        <tr>
                                            <td> <?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->Family_number);?></td>
                                            <td><?php echo htmlentities($result->House_number);?></td>
                                            <td><?php echo htmlentities($result->F_name);?></td>
                                            <td><?php if($result->Gender == 'M'){
                                                  echo ('ທ້າວ');
                                            }else if($result->Gender == 'F'){
                                                    echo ('ນາງ');
                                            } else{
                                                echo ('error');
                                            }
                                           ?></td>
                                            <td><?php echo htmlentities($result->Birthday);?></td>
                                            <td><?php echo htmlentities($result->Tel);?></td>
                                        </tr>
                                         <?php $cnt++;} }?>

                                    </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                    </div>
                    
                    <!-- trading history area end -->
                </div>
                <!-- row area end -->
                
                </div>
                <!-- row area start-->
            </div>
            <div class="row">
                    
                    <!-- trading history area start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="card-body">
                                <div class="data-tables datatable-dark">
                                    <h3>ຜູ່ພັກເຊົ່າ </h3>
                                    <table id="dataTable3" class="table table-striped table-hover text-center">
                                        <thead class="text-capitalize">
                                        <tr>
                                                <th>#</th>
                                                <th>ຊື່ແລະນາມສະກຸນ</th>
                                                <th>ວັນເດືອນປີເກີດ</th>
                                                <th>ອາຍຸ</th>
                                                <th>ເພດ</th>
                                                
                                                <th>ສັນຊາດ</th>
                                                <th>ເລກທີສຳມະໂນຄົວ</th>
                                                <th>ເບີໂທລະສັບ</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $sql = "SELECT * from tbl_user limit 1";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $result)
                                    {?>  
                                        <tr>
                                            <td> <?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->F_name);?></td>
                                            <td><?php echo htmlentities($result->Age);?></td>
                                            <td><?php if($result->Gender == 'M'){
                                                  echo ('ທ້າວ');
                                            }else if($result->Gender == 'F'){
                                                    echo ('ນາງ');
                                            } else{
                                                echo ('error');
                                            }
                                           ?></td>
                                            <td><?php echo htmlentities($result->Birthday);?></td>
                                            
                                            <td><?php echo htmlentities($result->National);?></td>
                                            <td><?php echo htmlentities($result->Family_number);?></td>
                                            <td><?php echo htmlentities($result->Tel);?></td>
                                        </tr>
                                         <?php $cnt++;} }?>

                                    </tbody>
                                     
                                     
                                    </table>
                                </div>
                            </div>
                    </div>
                    
                    <!-- trading history area end -->
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
<?php } ?>