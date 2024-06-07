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
            <p style=" font-size:16;">ແຂວງນະຄອນຫຼວງວຽງຈັນ</p>
            <p style=" font-size:16;">ເມືອງຈັນທະບູລີ</p>
            <p style=" font-size:16;">ບ້ານດອນແດງ</p>
             <p style=" font-size:16;">ເລກທີ<?= $user['from_number'] ?></p>
             <p style=" font-size:16;">ໃບຢັ້ງຢືນທີ່ຢູ່</p>
        
    </center>
    <p style="margin-left: 90px;">ນາຍບ້ານດອນແດງ ,ເມືອງຈັນທະບູລີ ,ແຂວງນະຄອນຫຼວງວຽງຈັນ </p>
    <p style="margin-left: 110px;">ຂໍຢັ້ງຢືນວ່າ ທ້າວ ຫຼື ນາງ<?= $user['name'] ?>ອາຍຸ<?= $user['old'] ?>ປີ,ອາຊິບ<?= $user['employment'] ?>ສັນຊາດ<?= $user['national'] ?></p>
    <p style="margin-left: 90px;">ປະຈຸບັນຢູ່ບ້ານ<?= $user['current'] ?> ຄຸ້ມ<?= $user['khoum'] ?>ໜ່ວຍ<?= $user['nuay'] ?>ເຮືອນເລກທີ<?= $user['home_number'] ?></p>
    <p style="margin-left: 90px;">ໄດ້ຈົດເຂົ້າສໍາມະໂນຄົວເລກທີ<?= $user['family_namber'] ?>ລົງວັນທີ<?= $user['date'] ?>ເມືອງ<?= $user['district'] ?></p>
    <p style="margin-left: 90px;">ແຂວງ<?= $user['province'] ?>ເປັນລູກຂອງທ້າວ<?= $user['father_name'] ?> ແລະ ນາງ<?= $user['mother_name'] ?></p>
    <p style="margin-left: 90px;">ທີ່ບ້ານ<?= $user['father_village'] ?>ເມືອງ<?= $user['father_district'] ?>ແຂວງ<?= $user['father_province'] ?></p>
    <p style="margin-left: 90px;">ຜູ້ກ່ຽວຢູ່ໃນຄວາມຮັບຜິດຊອບຂອງພວກເຮົາ ແລະ ຢູ່ໃນການຈັດຕັ້ງຂອງພວກເຮົາຢ່າງແທ້ຈິງ.</p>
    <p style="margin-left: 80px;">ດັ່ງນັ້ນ, ຈົ່ງອອກໃບຢັ້ງຢືນສະບັບນີ້ໃຫ້ຜູ້ກ່ຽວໄວ້ເປັນຫຼັກຖານ. ຖ້າຜູ້ກ່ຽວບໍ່ມີພຶດຕິກໍາທີ່ຕໍ່ຕ້ານກັບປະຊາຊົນ ແລະ</p>
    <p style="margin-left: 80px;">ອໍານາດການປົກຄອງຂອງລັດແລ້ວ. ຂໍໃຫ້ພະນັກງານທີ່ກ່ຽວຂ້ອງໄດ້ອໍານວຍຄວາມສະດວກຕາມທາງທີ່ຄວນດ້ວຍ.</p>
    <p style="margin-left: 80px;">ໃບຢັ້ງຢືນສະບັບນີ້ໃຊ້ເພື່ອ <?= $user['saiphuea'] ?>ແລະ ຢັ້ງຢືນວ່າຜູ້ກ່ຽວຢູ່ໃນ</p>
    <p style="margin-left: 80px;">ຄວາມປົກຄອງຂອງພວກເຮົາຢ່າງແທ້ຈິງ.</p>
    <center><p >ຮຽນມາດ້ວຍຄວາມນັບຖືຢ່າງສູງ.</p></center>
    <p style="margin-left: 100px;">ວັນທີ../../..</p>
    </div>
        <p>aaaaaນາຍບ້ານaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa ຜູ້ຮ້ອງຂໍ</p> 
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