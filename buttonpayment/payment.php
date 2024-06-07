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
    <link rel="stylesheet" href="./pay.css"
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
  .container {
      max-width: 1200px;
      margin: 0 auto;
    }
    body {
      font-family: 'Phetsarath', sans-serif;
    }
    h2 {
      font-family: "Noto Sans Lao", sans-serif;
    }
    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      font-family: 'Phetsarath', sans-serif;
    }
    .price-box {
      width: 30%;
      padding: 20px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 10px;
      position: relative;
      font-family: 'Phetsarath', sans-serif;
    }
    .price-box img {
      max-width: 100%;
      height: auto;
      display: block;
      cursor: pointer;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.9);
    }
    .modal-content {
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 600px;
      background-color: #fff;
      border-radius: 5px;
      font-family: 'Phetsarath', sans-serif;
    }
    .modal-content img {
      width: 100%;
      height: auto;
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    .button:hover {
      background-color: #45a049;
    }
    .price {
      font-size: 24px;
      font-weight: bold;
      margin-top: 10px;
    }
    .price-box:hover {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .nav{
    background-color: #000080;
    
}

  </style>
  <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Noto Sans Lao", sans-serif}
        #team h2 {
  color: #000000; /* Text color */
  font-size: 36px; /* Adjust font size as needed */
  margin-bottom: 32px;
  font-family: "Noto Sans Lao", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  line-height: 1.5;
  font-size: 80px;
}
#team p{

  color: #000000; /* Text color */
  font-size: 36px; /* Adjust font size as needed */
  margin-bottom: 32px;
  font-family: "Noto Sans Lao", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  line-height: 1.5;
  font-size: 40px;
}


     /* Style for news items */
/* Work Section */

#work h2 {
  color: #f1f1f1; /* Text color */
  font-size: 36px; /* Adjust font size as needed */
  margin-bottom: 32px;
  font-family: "Noto Sans Lao", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  line-height: 1.5;
  font-size: 80px;
}
#form h2{

  color: #000000; /* Text color */
  font-size: 36px; /* Adjust font size as needed */
  margin-bottom: 32px;
  font-family: "Noto Sans Lao", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  line-height: 1.5;
  font-size: 80px;
}



/* Style for individual items within the work section can be added here */

.news-item {
    display: inline-block;
    margin: 10px;
    width: 360px;
    cursor: pointer;
    margin: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    
}

.news-image {
    width: 100%;
    height: auto;
}

.news-content {
    padding: 15px;
}

.news-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 14px;
    color: #666;
  font-family: "Noto Sans Lao", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  line-height: 1.5;
  font-size: 16px;
}



.news-description {
    margin-top: 10px;
}

/* Style for image popup */
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

.popup-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

.popup-content img {
    width: 100%;
    height: auto;
    display: block;
}

.close {
    color: #fff;
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
}
        /* Navbar */
.w3-top {
  position: sticky;
  top: 0;
  z-index: 1000;
}

.w3-bar {
  width: 100%;
  overflow: hidden;
  background-color: #4CAF50;
}

.w3-bar-item {
  padding: 8px 16px;
  float: left;
}

.w3-button {
  background-color: inherit;
  border: none;
  color: white;
  padding: 12px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.w3-button:hover {
  background-color: #555;
}

.w3-hide-medium {
  display: none;
}

.w3-hide-large {
  display: none;
}

.w3-dropdown-hover {
  position: relative;
  display: inline-block;
}

.w3-dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.w3-dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.w3-dropdown-content a:hover {background-color: #f1f1f1}

.w3-dropdown-hover:hover .w3-dropdown-content {
  display: block;
}

.w3-bar-item:hover, .w3-dropdown-hover:hover .w3-button {
  background-color: #555;
}

@media only screen and (max-width: 600px) {
  .w3-bar-item {
    float: none;
    display: block;
    text-align: left;
  }
  .w3-hide-small {
    display: none;
  }
  .w3-dropdown-hover:hover .w3-dropdown-content {
    display: none;
  }
  .w3-dropdown-hover:hover .w3-button {
    background-color: inherit;
  }
}
/* Navbar */
.w3-top {
  position: sticky;
  top: 0;
  z-index: 1000;
}

.w3-bar {
  width: 100%;
  overflow: hidden;
  background-color: #000000;
}

.w3-bar-item {
  padding: 8px 16px;
  float: left;
}

.w3-button {
  background-color: inherit;
  border: none;
  color: white;
  padding: 12px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.pay{
    text-align: center;
    background-color: #555;
    padding: 12px 16px;
    font-size: 35px;
    color: #f1f1f1;
}
a{
    color: #f9f9f9;
}
.hidden{
		display: none;
    
       
	}
	.show{
		display: block;
        width: 30vh;
        align-items: center;
        margin-left: auto;
  margin-right: auto;
	}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    

<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="../index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>ໜ້າຫຼັກ</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ໂຄງຮ່າງການຈັດຕັ້ງ</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ແຈ້ງການ </a>
  <a href="#notice" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ການເຄື່ອນໄຫວ</a>
  <a href="#form" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ໃບຄຳຮ້ອງ</a>
  <a href="../h2.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ລູກບ້ານ</a>
  <a href="../h.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ຜູ້ພັກເຊົ່າ</a>
  
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ຕິດຕໍ່</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div> 
 <div class="pay">
    ກາລຸນາຊຳລະເງິນ
 </div>
<td colspan="12">
                          
                            
                            <!-- Modal -->
                           

                                <form method="POST" name="adminaction">
                                <div class="modal-body">
                                <!-- <fieldset>
                                    <select class="custom-select" name="status" required="">
                                        <option value="">ກາລຸນາເລືອກຊຳລະ</option>
                                        <option value="1">ເງິນໂອນ </option>
                                        <option value="2">ເງິນສົດ</option>
                                    </select></p>
                                    </fieldset>
                                    
                                    <br>
                                    <fieldset> -->
		<select name="passport" id="passport" class="passport  custom-select">
			<option value="" selected>ກາລຸນາເລືອກຊຳລະ</option>
			<option value="Yes">ເງິນໂອນ</option>
			<option value="No">ເງິນສົດ</option>
			</select>
		</fieldset>
		<div class="hidden" id="pDetails">
		<fieldset>
		<img src="./qrcode.jpg" alt="Flowers in Chania " width="50px" height="50px">
		</fieldset>
		<fieldset>
            <h6>ກາລຸນາສົ້ງ qr ຊຳລະເງິນ</h6>
		<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"  />
		</fieldset>
			</div>
		<fieldset>
                                    <p><textarea id="textarea1" name="description" class="form-control" name="description" placeholder="ໝາຍເຫດ" row="5" maxlength="500" ></textarea></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ອອກ</button>
                                    <button  class="btn btn-success" name="update" > <a href="../from/frombaikhumhong.php">ຍືນຍັນ</a></button>
                                </div>
                                </div>
                            </div>
                            </div>

                            </td>
                            <script>
                            $('.passport').change(function(){
                                var responseID = $(this).val();
                                if(responseID =="Yes"){
                                    $('#pDetails').removeClass("hidden");
                                    $('#pDetails').addClass("show");
                                } else{
                                    $('#pDetails').removeClass("show");
                                    $('#pDetails').addClass("hidden");
                                }
                                console.log(responseID);
                            });
	</script>
                            </body>
 </html>