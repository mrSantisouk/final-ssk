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
            <p style=" font-size:16;">ຊື່ອົງການຈັດຕັ້ງປະກາດໃຊ້ເອກະສານ</p>
            <p style=" font-size:16;">ເລກທີ......../.......</p>
            <p style=" font-size:16;">ວັນທີ <?php echo date("d")?>ເດືອນ <?php echo date("m")?>ປີ <?php echo date("Y")?></p>
             <p style=" font-size:16;">ໃບຢັ້ງຢືນ</p>
        
    </center>
    <p style="margin-left: 90px;">ຊື່ອົງການຈັດຕັ້ງ <?= $user['organization'] ?> ຢັ້ງຢືນວ່າ <?= $user['name'] ?></p>
    <p style="margin-left: 110px;">ອາຍຸ<?= $user['old'] ?>ປີ,ວັນທີ, ເດືອນ, ປີ ເຂົ້າສັງກັດລັດ<?= $user['sungkut_date'] ?>ຕໍາແໜ່ງ<?= $user['Position'] ?></p>
    <p style="margin-left: 90px;">ໜ້າທີ່ຮັບຜິດຊອບ<?= $user['Responsibilities'] ?> ສັງກັດ<?= $user['sungkut'] ?></p>
    <p style="margin-left: 90px;">ຜູ້ກ່ຽວແມ່ນ<?= $user['person'] ?></p>
   
    <p style="margin-left: 80px;">ຊື່ອົງການຈັດຕັ້ງຫ້ອງການບ້ານດອນແດງຢັ້ງຢືນວ່າຜູ້ກ່ຽວຢູ່ໃນຄວາມຮັບຜິດຊອບຂອງພວກເຮົາຢ່າງແທ້ຈິງ.</p>
    <center><p >ດັ່ງນັ້ນ, ຈົ່ງອອກໃບຢັ້ງຢືນສະບັບນີ້ນຳໃຊ້ເພືອເປັນຫຼັກຖານ.</p></center>
    <p style="margin-left: 100px;">ຕໍາແໜ່ງຫົວໜ້າອົງການຈັດຕັ້ງ </p>
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