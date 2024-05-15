<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="register-box bg-light p-5 rounded mt-3">
            <h1>ລົງທະບຽນລູກບ້ານ</h1>
            <form method="post" action="register_action.php">
                <div class="mb-3">
                    <label for="u_fullname" class="form-label">ຊື່ ແລະ ນາມສະກຸນ</label>
                    <input type="text" class="form-control" id="u_fullname" name="u_fullname" required>
                </div>
                <div class="mb-3">
                <label for="u_bod" class="form-label">ວັນເດືອນປີເກີດ</label>
                    <input type="date" class="form-control" id="u_bod" name="u_bod" placeholder="ວັນເດືອນປີເລີມ" required>
                    <label for="u_age" class="form-label"></label>
                    <input type="number" class="form-control" id="u_age" name="u_age" placeholder="ອາຍຸ" required>
                   
                    <label for="u_nation" class="form-label"></label>
                    <input type="text" class="form-control" id="u_nation" name="u_nation" placeholder="ສັນຊາດ" required>
                    <label for="u_religion" class="form-label"></label>
                    <input type="text" class="form-control" id="u_religion" name="u_religion" placeholder="ສາສະໜາ" required>
                    <label for="u_phone" class="form-label"></label>
                    <input type="text" class="form-control" id="u_phone" name="u_phone" placeholder="ເບີໂທລະສັບ" required>
                    <label for="u_house" class="form-label"></label>
                    <input type="text" class="form-control" id="u_house" name="u_house" placeholder="ບ້ານ" required>
                    <label for="u_unit" class="form-label"></label>
                    <input type="text" class="form-control" id="u_unit" name="u_unit" placeholder="ໜ່ວຍ" required>
                    <label for="u_house_num" class="form-label"></label>
                    <input type="text" class="form-control" id="u_house_num" name="u_house_num" placeholder="ເຮືອນເລກທີ" required>
                    <label for="u_village" class="form-label"></label>
                    <input type="text" class="form-control" id="u_district" name="u_district" placeholder="ເມືອງ" required>
                    <label for="u_capital" class="form-label"></label>
                    <input type="text" class="form-control" id="u_capital" name="u_capital" placeholder="ແຂວງ" required>
                    <label for="u_road" class="form-label"></label>
                    <input type="text" class="form-control" id="u_road" name="u_road" placeholder="ຫົນທາງ" required>
                    <label for="u_card" class="form-label"></label>
                    <input type="text" class="form-control" id="u_card" name="u_card" placeholder="ເລກບັດປະຈຳຕົວ" required>
                   <br>
                    <label for="u_card_img" class="form-label">ຮູບບັດປະຈຳຕົວ</label>
                    <input type="file" class="form-control" id="u_card_img" name="u_card_img" placeholder="ຮູບບັດ" required>
                    <br>
                    <label for="u_house_img" class="form-label">ຮູບປຶ້ມສຳມະໂນຄົວ</label>
                    <input type="file" class="form-control" id="u_card_img" name="u_card_img" placeholder="ຮູບປຶ້ມ" required>
                    <br>
                    <label for="u_father_name" class="form-label">ຊື່ ແລະ ນາມສະກຸນ ພໍ່</label>
                    <input type="text" class="form-control" id="u_father_name" name="u_father_name" placeholder="ຊື່ ແລະ ນາມສະກຸນ" required>
                   
                    <label for="u_father_dob" class="form-label"></label>
                    <input type="date" class="form-control" id="u_father_dob" name="u_father_dob" placeholder="ວັນເດືອນປີເກີດ" required>
                    <label for="u_father_age" class="form-label"></label>
                    <input type="text" class="form-control" id="u_father_age" name="u_father_age" placeholder="ອາຍຸພໍ່" required>
                   <label for="u_father_job" class="form-label"></label>
                    <input type="text" class="form-control" id="u_father_job" name="u_father_job" placeholder="ອາຊີບ" required>
                    <label for="u_father_dob" class="form-label"></label>
                    <input type="text" class="form-control" id="u_father_phone" name="u_father_phone" placeholder="ເບີໂທ" required>
                    <br>
                    <label for="u_mother_name" class="form-label">ຊື່ ແລະ ນາມສະກຸນ ແມ່</label>
                    <input type="text" class="form-control" id="u_mother_name" name="u_mother_name" placeholder="ຊື່ ແລະ ນາມສະກຸນ" required>
                    <label for="u_mother_dob" class="form-label"></label>
                    <input type="date" class="form-control" id="u_mother_dob" name="u_mother_dob" placeholder="ວັນເດືອນປີເກີດ" required>
                    <label for="u_mother_age" class="form-label"></label>
                    <input type="text" class="form-control" id="u_mother_age" name="u_mother_age" placeholder="ອາຍຸພໍ່" required>
                    <label for="u_mother_job" class="form-label"></label>
                    <input type="text" class="form-control" id="u_mother_job" name="u_mother_job" placeholder="ອາຊີບ" required>
                    <label for="u_mother_dob" class="form-label"></label>
                    <input type="text" class="form-control" id="u_mother_phone" name="u_mother_phone" placeholder="ເບີໂທ" required>

            
                </div>
              
              
                
                <div class="mb-3">
                    <label for="u_username" class="form-label">ຊື່ຜູ້ໃຊ້ງານ</label>
                    <input type="text" class="form-control" id="u_username" name="u_username" placeholder="" required>
                </div>
                <div class="mb-3">
        <label for="u_password" class="form-label">ລະຫັດຜ່ານ</label>
        <div class="input-group">
            <input type="password" class="form-control" id="u_password" name="u_password" placeholder="" required>
            <button class="btn btn-outline-secondary" type="button" id="show_password_btn">
                <i class="bi bi-eye"></i>
                
            </button>
            </button>
        </div>
    </div>
               
                <button class="w-100 btn btn-lg btn-primary" type="submit">ລົງທະບຽນ</button>
                <a href="login.php" class="w-100 btn btn-lg btn-danger mt-3">ຍົກເລິກ</a>

            </form>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById('show_password_btn').addEventListener('click', function() {
        var passwordField = document.getElementById('u_password');
        var fieldType = passwordField.getAttribute('type');

        if (fieldType === 'password') {
            passwordField.setAttribute('type', 'text');
            this.innerHTML = '<i class="bi bi-eye-slash"></i>';
        } else {
            passwordField.setAttribute('type', 'password');
            this.innerHTML = '<i class="bi bi-eye"></i>';
        }
    });
</script>

</body>

</html>