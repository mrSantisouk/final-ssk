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
             <p style=" font-size:16;">ໃບຄຳຮ້ອງ</p>
        
    </center>
    <p style="margin-left: 90px;">ຮຽນ:<?= $user['hn'] ?></p>
    <p style="margin-left: 90px;">ເລື່ອງ:<?= $user['story'] ?></p>
    <p style="margin-left: 80px;">ຊື່ ແລະ ນາມສະກຸນ<?= $user['name'] ?> ອາຍຸ<?= $user['old'] ?> ປີ, ສັນຊາດ<?= $user['national'] ?></p>
    <p style="margin-left: 80px;">ອາຊິບ<?= $user['employment'] ?> ໄດ້ຈົດເຂົ໊າສຳມະໂນຄົວເລກທີ<?= $user['family_number'] ?> ລົງວັນທີ<?= $user['date'] ?></p>
    <p style="margin-left: 80px;">ປັດຈຸບັນຢູ່ໜ່ວຍ<?= $user['new_nuay'] ?> ບ້ານ<?= $user['vinllage'] ?> ເມືອງ<?= $user['district'] ?> ແຂວງ<?= $user['province'] ?></p>
    <p style="margin-left: 90px;">ຂໍຖືເປັນກຽດຢ່າງສູງຮຽນມາຍັງທ່ານ ແລະ ການຈັດຕັ້ງ.</p>
    <p style="margin-left: 90px;">ເຮົາເອງມີຈຸດປະສົງ:<?= $user['joutpasong'] ?></p>
    <p style="margin-left: 100px;"></p>
    <p style="margin-left: 100px;">ດັ່ງນັ້ນ: ຈຶ່ງໄດ້ຮ້ອງຂໍມາຍັງທ່ານ ການຈັດຕັ້ງເພື່ອພິຈາລະນາ ແລະ ເຫັນສົມຄວນດ້ວຍ.</p>
    <center><p >ຮຽນມາດ້ວຍຄວາມນັບຖືຢ່າງສູງ.</p></center>

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