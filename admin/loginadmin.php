<?php
    session_start();
    include('../from/dbconn.php');
    if(isset($_POST['signin'])){

    $uname=$_POST['username'];
    $password=($_POST['password']);
    $sql ="SELECT Username,Password FROM tbl_admin WHERE UserName=:uname and Password=:password";
    
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0)
    {
    $_SESSION['alogin']=$_POST['username'];
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>

</style>
<body class="text-center">

    <main class="form-signin">
    <form name="signin" method="POST">
         <div class="bg-img">
            <div class="content">
            <header style="font-family: Noto Sans Lao;">ເຂົ້າສູ່ລະບົບ</header>
            <form action="#">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" id="floatingInput" name="username" placeholder="Username">
                  
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <div class="pass">
                  
               </div>
               <div class="field">
                  <input type="submit"  name="signin" value="LOGIN">
               </div>
            </form>
            <div style="font-family: Noto Sans Lao;" class="login">
               ລົງທະບຽນ
            </div>
            <!-- <div class="links">
               <div class="facebook">
               <a href="user.php">
               <input class="facebook" type="button" value="ລູກບ້ານ">
               </a>

               </div>
               <div class="instagram">
               <a href="user.php">
               <input class="instagram" type="button" value="ຜູ່ພັກເຊົ່າ">
               </a>
                 
               </div>
            </div> -->
          
            <div class="signup">
               go to 
               <a href="../login.php">Admin</a>
            </div>
         </div>
         
        <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
         </script>
            <!-- <h1 class="h3 mb-3 fw-normal">ເຂົ້າສູ່ລະບົບ</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                <label for="floatingInput">ຊື່ ແລະ ນາມສະກຸນ</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">ລະຫັດ</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">ຕົກລົງ</button>
            <a href="register.php" class="w-100 btn btn-lg btn-secondary mt-3">ລົງທະບຽນ</a> -->
    </form>
    </main>

</body>

</html>