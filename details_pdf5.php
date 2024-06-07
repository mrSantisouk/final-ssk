<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Pdf</title>
</head>
<body>
    <div>
    <center>
        <p>ສາທາລະນະລັດ ປະຊາທິປະໄຕປະຊາຊົນລາວ<br>
             ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະລາດ ວັດທະນາຖາວອນ</p> 
             <p style=" font-size:16;">ຄຳຮ້ອງຂໍຖືບັດພັກເຊົ່າຊົ່ວຄາວ</p>
        
    </center>

    <p style="margin-left: 110px;">1.ຊື່ ແລະ ນາມສະກຸນ<?= $user['name'] ?>ວັນ,ເດືອນ,ປີເກີດ<?= $user['birth'] ?>ອາຊິບ</p>
    <p style="margin-left: 90px;">ສັນຊາດ<?= $user['national'] ?>ມາຈາກບ້ານ<?= $user['village'] ?>ເມືອງ<?= $user['district'] ?>ແຂວງ<?= $user['province'] ?></p>
    <p style="margin-left: 90px;">ຖືປື້ມສຳມະໂນຄົວເລກທີ<?= $user['family_number'] ?>ລົງວັນທີ<?= $user['date'] ?>ອອກໃຫ້ໂດຍກອງບັນຊາການ ປກສ ເມືອງ<?= $user['issued_by'] ?></p>
    <p style="margin-left: 90px;">ບ່ອນເຮັດວຽກ<?= $user['work'] ?>ບ້ານ<?= $user['work_village'] ?>ເມືອງ<?= $user['work_district'] ?>ແຂວງ<?= $user['work_province'] ?></p>
    <p style="margin-left: 90px;">ເບີໂທລະສັບ<?= $user['telephone_number'] ?></p>
    <p style="margin-left: 110px;">ຊື່ ແລະ ນາມສະກຸນ ພໍ່<?= $user['father_name'] ?>ອາຍຸ<?= $user['father_old'] ?>ອາຊິບ<?= $user['father_employment'] ?></p>
    <p style="margin-left: 90px;">ປະຈຸບັນຢູ່ບ້ານ<?= $user['father_village'] ?>ເມືອງ<?= $user['father_district'] ?>ແຂວງ<?= $user['father_province'] ?></p>
    <p style="margin-left: 110px;">ຊື່ ແລະ ນາມສະກຸນ ແມ່<?= $user['mother_name'] ?>ອາຍຸ<?= $user['mother_old'] ?>ອາຊິບ<?= $user['mother_employment'] ?></p>
    <p style="margin-left: 90px;">ປະຈຸບັນຢູ່ບ້ານ<?= $user['mother_village'] ?>ເມືອງ<?= $user['mother_district'] ?>ແຂວງ<?= $user['mother_province'] ?></p>
    <p style="margin-left: 80px;">ເຫດຜົນຂອງການພັກເຊົາ<?= $user['reason'] ?></p>
   
   
    <p style="margin-left: 80px;">  ເມື່ອໄດ້ພັກເຊົາຊົວຄາວແລ້ວ ຂ້າພະເຈົ້າພ້ອມດ້ວຍຜູ້ຕິດຕາມຈະຂໍປະຕິຍານຕາທສັນຍາຮັກສາຄວາມສະຫງົບ ແລະ</p>
    <p style="margin-left: 90px;">ບົດບັນທຶກສັນຍາຄອບຄົວປ້ອງກັນຄວາມສະຫງົບດີຂອງການຈັດຕັ້ງວາງອອກຢ່າງເຂັ້ມງວດ</p>

    </div>
        <p>aaaaaປກສ ກຸ່ມ5aaaaaaaaaaaaaaaaaປກສ ບ້ານaaaaaaaaaaaaaaaaເຈົ້າຂອງຄຳຮ້ອງ</p> 
        <p>  </p>
    <!-- <table  width="100%" border="1">
        <tr>
            <!-- <td><b>Name:</b></td>
            <td><?= $user['u_fullname'] ?></td>
            <td><b>Email:</b></td>
            <td><?= $user['u_username'] ?></td> -->
        </tr>
        <!-- <tr>
            <td><b>Mobile:</b></td>
           
            <td><b>Address:</b></td>
          
        </tr> -->
    </table> 
    
</body>
<style>
@font-face {
    font-family: "Noto Sans Lao", sans-serif;
    src: url("https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap") format('truetype');
  }  
body{
    font-family:Phetsarath ;
   
}
h1{
    font-family:Phetsarath ;
    
}
.font{
    font-size: 16vh;
}
#main {
  width: 200px;
  height: 200px;
  border: 1px solid #c3c3c3;
  display: flex;
  flex-wrap: wrap;
}

#main div {
  width: 50px;
  height: 50px;
}
</style>
</html>