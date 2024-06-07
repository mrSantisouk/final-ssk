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
             <p style=" font-size:16;">ຊິວະປະຫວັດຫຍໍ້</p>
        
    </center>
    <p style="margin-left: 90px;">1.ສະພາບຕົນເອງ</p>
    <p style="margin-left: 110px;">ຊື່ ແລະ ນາມສະກຸນ<?= $user['name'] ?>ວັນ,ເດືອນ,ປີເກີດ<?= $user['birth'] ?></p>
    <p style="margin-left: 90px;">ບ້ານເກີດ<?= $user['homeland'] ?>ເມືອງ<?= $user['homeland_district'] ?>ແຂວງ<?= $user['homeland_province'] ?></p>
    <p style="margin-left: 90px;">ເຊື້ອຊາດ<?= $user['Race'] ?>ສັນຊາດ<?= $user['national'] ?>ຊົນເຜົ່າ<?= $user['Ethnicity'] ?>ສາສະໜາ<?= $user['Religion'] ?></p>
    <p style="margin-left: 90px;">ລະດັບການສຶກສາມັນ<?= $user['level_of_education'] ?>ວິຊາສະເພາະ<?= $user['Special_subject'] ?></p>
    <p style="margin-left: 90px;">ຊັ້ນວິຊາສະເພາະ<?= $user['Special_class'] ?>ອາຊິບປັດຈຸບັນ<?= $user['employment_now'] ?></p>
    <p style="margin-left: 90px;">ບ່ອນປະຈໍາການ<?= $user['brn_u_pajumkarn'] ?>ໜ້າທີ່ຮັບຜິດຊອບ<?= $user['nar_t_hup_phit_srp'] ?></p>
    <p style="margin-left: 80px;">ວັນ,ເດືອນ,ປີ ສັງກັດລັດ<?= $user['date_sungkut'] ?> ປັດຈຸບັນຢູ່ໜ່ວຍ<?= $user['nuaynow'] ?></p>
    <p style="margin-left: 80px;">ບ້ານ<?= $user['village'] ?>ເມືອງ<?= $user['district'] ?>ແຂວງ<?= $user['province'] ?></p>
    <p style="margin-left: 80px;">2. ການເຄື່ອນໄຫວຂອງຕົນໃນໄລຍະ (ອາຍຸ 8 ປີ ເຖີງປະຈຸບັນ)</p>
    <p style="margin-left: 80px;"><?= $user['karnkhueanwai'] ?></p>
   
    <p style="margin-left: 100px;">3. ສະພາບຄອບຄົວ ພໍ່, ແມ່</p>
    <p style="margin-left: 110px;">ຊື່ ແລະ ນາມສະກຸນ ພໍ່<?= $user['father_name'] ?>ວັນ,ເດືອນ,ປີເກີດ<?= $user['father_birth'] ?>.</p>
    <p style="margin-left: 90px;">ເຊື້ອຊາດ<?= $user['father_race'] ?>ສັນຊາດ<?= $user['father_national'] ?>ອາຊິບ<?= $user['father_employment'] ?>ປັດຈຸບັນຢູ່ໜ່ວຍ<?= $user['father_nuay_now'] ?></p>
    <p style="margin-left: 90px;">ບ້ານເກີດ<?= $user['father_village'] ?>ເມືອງ<?= $user['father_district'] ?>ແຂວງ<?= $user['father_province'] ?></p>
    <p style="margin-left: 110px;">ຊື່ ແລະ ນາມສະກຸນ ແມ່<?= $user['mother_name'] ?>ວັນ,ເດືອນ,ປີເກີດ<?= $user['mother_birth'] ?></p>
    <p style="margin-left: 90px;">ເຊື້ອຊາດ<?= $user['mother_Race'] ?>ສັນຊາດ<?= $user['mother_national'] ?>ອາຊິບ<?= $user['mother_employment'] ?>ປັດຈຸບັນຢູ່ໜ່ວຍ<?= $user['mother_nuay'] ?></p>
    <p style="margin-left: 90px;">ບ້ານເກີດ<?= $user['mother_village'] ?>ເມືອງ<?= $user['morther_district'] ?>ແຂວງ<?= $user['mother_province'] ?></p>
    <p style="margin-left: 80px;">ຊື່ ແລະ ນາມສະກຸນ, ອາຍຸ, ອາຊິບ, ບ່ອນຢູ່ຂ້ອງອ້າຍ, ເອື້ອຍ, ນ້ອງຄິງ ຂອງຕົນ</p>
    <p style="margin-left: 80px;"> <?= $user['family_name'] ?></p>
   
    <p style="margin-left: 80px;">  ຂ້າພະເຈົ້າຂໍຢັ້ງຢືນວ່າ ຊິວະປະຫວັດນີ້ຖືກຕ້ອງຕາມຄວາມເປັນຈິງແທ້ທຸກປະການ, ຖ້າຜິດຈາກຄວາມຈິງ</p>
    <p style="margin-left: 90px;">ຂ້າພະເຈົ້າຂໍຮັບຜິດຊອບຕາມກົດໝາຍ</p>
    <p style="margin-left: 100px;">ທີ່<?= $user['address'] ?> ວັນທີ<?= $user['date'] ?> </p>
    </div>
        <p>aaaaaຄຳເຫັນ ແລະ ລາຍເຊັນນາຍບ້ານaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaລາຍເຊັນເຈົ້າຂອງປະຫວັດ</p> 
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