<?php
session_start();
error_reporting(0);
include('../config.php');

if (!isset($_SESSION['user_login'])) 
{ // If the user is not logged in
    header("location: login.php"); // Redirect to the login page
}else{

    $data = [
        'organization' => 'test organization',
        'name' => 'test name'
   ];
   
   $sql = 'INSERT INTO from_yungyuen(organization, name) VALUES(:organization, :name)';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
   
   echo "Post saved successfully!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="addemp" method="POST">  
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຊື່ອົງການຈັດຕັ້ງ</label>
                                            <textarea class="form-control" name="organization" type="text" length="100" id="example-text-input" rows="1" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">ຊື່ ແລະ ນາມສະກຸນ</label>
                                            <textarea class="form-control" name="name" type="text"  length="100" id="example-text-input" rows="1" ></textarea>                                                     
                                        </div>
</div>        
</form>
</body>
</html>
<?php
}
?>