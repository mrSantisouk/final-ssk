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
        $Age = $_POST['Age']; 
        $Tel = $_POST['Tel']; 
        $Family_number = $_POST['Family_number']; 
        $Family_date = $_POST['Family_date'];
        $Issued_by = $_POST['Issued_by']; 
        $National = $_POST['National']; 
        $Villege = $_POST['Villege']; 
        $City = $_POST['City']; 
        $province = $_POST['province']; 
        $Picture = $_POST['Picture']; 
        $Jobs = $_POST['Jobs']; 
        $Job_address = $_POST['Job_address']; 
        $Father_name = $_POST['Father_name']; 
        $Father_age = $_POST['Father_age']; 
        $Father_job = $_POST['Father_job']; 
        $Father_address = $_POST['Father_address']; 
        $Mother_name = $_POST['Mother_name']; 
        $Mother_age = $_POST['Mother_age']; 
        $Mother_job = $_POST['Mother_job']; 
        $Mother_address = $_POST['Mother_address']; 
        $Unit = $_POST['Unit']; 
        $Owner = $_POST['Owner'];
        $Target = $_POST['Target']; 
        $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT); // Hash the password
        $username = $_POST['Username']; 

        try {
            // Prepare the SQL query
            $sql = "INSERT INTO tbl_user(F_name, L_name, Gender, Birthday, Tel, Age, Jobs, Religion, National, Status, Villege, City, province, Picture, Father_name, Mother_name, Family_number, Family_date, House_number, Unit, Card_number, Card_date, Card_issued_by, Road, Time, Content, Dear, Day, Password, Username) 
                    VALUES (:F_name, :L_name, :Gender, :Birthday, :Tel, :Age, :Jobs, :Religion, :National, :Status, :Villege, :City, :province, :Picture, :Father_name, :Mother_name, :Family_number, :Family_date, :House_number, :Unit, :Card_number, :Card_date, :Card_issued_by, :Road, :Time, :Content, :Dear, :Day, :Password, :Username)";

            // Bind parameters to the query
            $query = $dbh->prepare($sql);
            $query->bindParam(':F_name', $F_name, PDO::PARAM_STR);
            $query->bindParam(':L_name', $L_name, PDO::PARAM_STR);
            $query->bindParam(':Gender', $Gender, PDO::PARAM_STR);
            $query->bindParam(':Birthday', $Birthday, PDO::PARAM_STR);
            $query->bindParam(':Age', $Age, PDO::PARAM_STR);
            $query->bindParam(':Tel', $Tel, PDO::PARAM_STR);
            $query->bindParam(':Family_number', $Family_number, PDO::PARAM_STR);
            $query->bindParam(':Family_date', $Family_date, PDO::PARAM_STR);
            $query->bindParam(':Issued_by', $Issued_by, PDO::PARAM_STR);
            $query->bindParam(':National', $National, PDO::PARAM_STR);
            $query->bindParam(':Villege', $Villege, PDO::PARAM_STR);
            $query->bindParam(':City', $City, PDO::PARAM_STR);
            $query->bindParam(':province', $province, PDO::PARAM_STR);
            $query->bindParam(':Picture', $Picture, PDO::PARAM_STR);
            $query->bindParam(':Jobs', $Jobs, PDO::PARAM_STR);
            $query->bindParam(':Job_address', $Job_address, PDO::PARAM_STR);
            $query->bindParam(':Father_name', $Father_name, PDO::PARAM_STR);
            $query->bindParam(':Father_age', $Father_age, PDO::PARAM_STR);
            $query->bindParam(':Father_job', $Father_job, PDO::PARAM_STR);
            $query->bindParam(':Father_address', $Father_address, PDO::PARAM_STR);
            $query->bindParam(':Mother_name', $Mother_name, PDO::PARAM_STR);
            $query->bindParam(':Mother_age', $Mother_age, PDO::PARAM_STR);
            $query->bindParam(':Mother_job', $Mother_job, PDO::PARAM_STR);
            $query->bindParam(':Mother_address', $Mother_address, PDO::PARAM_STR);
            $query->bindParam(':Unit', $Unit, PDO::PARAM_STR);
            $query->bindParam(':Owner', $Owner, PDO::PARAM_STR);
            $query->bindParam(':Target', $Target, PDO::PARAM_STR);
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
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">
        function valid(){
            if(document.addemp.Password.value != document.addemp.confirmpassword.value) {
                alert("Passwords do not match!");
                document.addemp.confirmpassword.focus();
                return false;
            } 
            return true;
        }
    </script>
</head>

<body>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='dashboard';
                        include './admin-sidebar.php';
                    ?>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Add User</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.php">Home</a></li>
                                <li><span>Add User</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <?php if($error){ ?>
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <strong>Error: </strong><?php echo htmlentities($error); ?> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } else if($msg){ ?>
                                <div class="alert alert-success alert-dismissible fade show">
                                    <strong>Info: </strong><?php echo htmlentities($msg); ?> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } ?>
                                <form name="addemp" method="POST" onsubmit="return valid();">
                                    <div class="form-group">
                                        <label for="F_name">ຊື່</label>
                                        <input type="text" name="F_name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="L_name">ນາມສະກຸນ</label>
                                        <input type="text" name="L_name" class="form-control" required>
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
                                    <div class="form-group">
                                        <label for="Birthday">ວັນເດືອນປີເກີດ</label>
                                        <input type="date" name="Birthday" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Age">ອາຍຸ</label>
                                        <input type="number" name="Age" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Tel">ເບີໂທລະສັບ</label>
                                        <input type="text" name="Tel" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="House_number">ເລກທີສຳມະໂນຄົວ</label>
                                        <input type="number" name="Family_number" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ວັນອອກປືມສໍາມະໂນຄົວ</label>
                                            <input class="form-control" name="Family_date" type="date" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                        <label for="Religion">ອອກໃຫ້ທີ</label>
                                        <input type="text" name="Issued_by" class="form-control" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="National">ສັນຊາດ</label>
                                        <input type="text" name="National" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Villege">ບ້ານ</label>
                                        <input type="text" name="Villege" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="City">ເມືອງ</label>
                                        <input type="text" name="City" class="form-control" required>
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
                                        <label for="Picture">Picture</label>
                                        <input type="text" name="Picture" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Jobs">ວຽກ</label>
                                        <input type="text" name="Jobs" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Jobs">ເຮັດວຽກຢູ່</label>
                                        <input type="text" name="Job_address" class="form-control" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="Father_name">ຊື່ແລະນາມສະກຸນພໍ່</label>
                                        <input type="text" name="Father_name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="House_number">ອາຍຸພໍ່</label>
                                        <input type="text" name="Father_age" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Father_name">ວຽກ</label>
                                        <input type="text" name="Father_job" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Father_name">ທີ່ຢູ່ພໍ່</label>
                                        <input type="text" name="Father_address" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Family_number">ຊື່ແລະນາມສະກຸນແມ່</label>
                                        <input type="text" name="Family_number" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="House_number">ອາຍຸແມ່</label>
                                        <input type="text" name="Father_age" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Father_name">ວຽກ</label>
                                        <input type="text" name="Father_job" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Father_name">ທີ່ຢູ່ແມ່</label>
                                        <input type="text" name="Father_address" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Unit">ໜ່ວຍ</label>
                                        <input type="text" name="Unit" class="form-control" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="Road">ເຈົ້າຂ້ອງທີພັກ</label>
                                        <input type="text" name="Owner" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Content">ຈຸດປະສົງ</label>
                                        <input type="text" name="Target" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" name="Username" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="password" name="Password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmpassword">Confirm Password</label>
                                        <input type="password" name="confirmpassword" class="form-control" required>
                                    </div>
                                    
                                    <button type="submit" name="add" class="btn btn-primary">Add User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>
