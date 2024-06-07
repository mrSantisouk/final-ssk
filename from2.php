<?php
session_start();
if (!isset($_SESSION['user_login'])) { // If the user is not logged in
    header("location: login.php"); // Redirect to the login page
    exit;
}

$user = $_SESSION['user_login'];

// Redirect based on user level
if ($user['level'] == 'administrator') {
    header("location: admin.php"); // Redirect to the admin page
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Phetsarath:wght@100..900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="./assets/images/icon/favicon.ico">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/themify-icons.css">
  <link rel="stylesheet" href="./assets/css/metisMenu.css">
  <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/css/slicknav.min.css">
  <!-- amchart css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- others css -->
  <link rel="stylesheet" href="./assets/css/typography.css">
  <link rel="stylesheet" href="./assets/css/default-css.css">
  <link rel="stylesheet" href="./assets/css/fonts.css">
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
  <!-- modernizr css -->
  <script src="./assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <title>Price Boxes</title>
  <style>
    /* Add your CSS styles here */
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }
  body{
    font-family: 'Phetsarath', sans-serif;
  }
  h2{
    font-family: 'Phetsarath', sans-serif;

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
      font-family: 'Phetsarath', sans-serif; /* Apply the Phetsarath font */
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
      font-family: 'Phetsarath', sans-serif; /* Apply the Phetsarath font */
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
    .price-box {
      width: 30%;
      padding: 20px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 10px;
      position: relative;
      transition: box-shadow 0.3s;
      font-family: 'Phetsarath', sans-serif; /* Apply the Phetsarath font */
    }

    .price-box:hover {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a style="font-family: Noto Sans Lao;" class="navbar-brand fw-bold text-uppercase" href="#">ເວັບໄຊຫ້ອງການບ້ານດອນແດງ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php" style="font-family: Noto Sans Lao;">
                        <i class="bi bi-house-fill me-1"></i>ໜ້າຫຼັກ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#" style="font-family: Noto Sans Lao;">
                        <i class="bi bi-people-fill me-1"></i>ແຈ້ງການ
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        ໃບຄຳຮ້ອງ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <a target="_blank" href="print-details.php?id=<?=$row['id']?>" class="btn btn-sm btn-primary"> <i class="fa fa-file-pdf-o"></i> Print  Details</a> -->
                        <li><a class="dropdown-item" target="_blank" href="print-details.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-houses-fill me-2"></i>ໃບຢັ້ງຢືນທີ່ຢູ່</a></li>
                        <li><a class="dropdown-item" target="_blank" href="print-details2.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ໃບຄຳຮ້ອງ</a></li>
                        <li><a class="dropdown-item" target="_blank" href="print-details3.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-journals me-2"></i>ໃບຢັ້ງຢືນ</a></li>
                        <li><a class="dropdown-item" target="_blank" href="print-details4.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ໃບຊີວະປະຫວັດ</a></li>
                        <li><a class="dropdown-item" target="_blank" href="print-details5.php?id=<?=$row['id']?>" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ນັດໝາຍ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Noto Sans Lao;">
                        ລາຍງານ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="" style="font-family: Noto Sans Lao;"><i class="bi bi-houses-fill me-2"></i>ລາຍງານໃບຢັ້ງຢືນທີ່ຢູ່</a></li>
                        <li><a class="dropdown-item" href="profile.php" style="font-family: Noto Sans Lao;"><i class="bi bi-people-fill me-2"></i>ລາຍງານໃບຄຳຮ້ອງ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journals me-2"></i>ລາຍງານໃບຢັ້ງຢືນ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ລາຍງານໃບຊີວະປະຫວັດ</a></li>
                        <li><a class="dropdown-item" href="#" style="font-family: Noto Sans Lao;"><i class="bi bi-journal-text me-2"></i>ລາຍງານນັດໝາຍ</a></li>
                    </ul>
                </li>
            </ul>
            <li style="font-family: Noto Sans Lao;" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ສະບາຍດີ<?php echo $user['fullname']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">ຂໍ້ມູນສ່ວນຕົວ</a></li>
                    <li><a class="dropdown-item" href="logout_action.php">ອອກ</a></li>
                </ul>
            </li>
        </div>
    </div>
</nav>
<div class="container">
    <div  style="font-family:'Phetsarath', sans-serif ;" class="row" id="price-boxes">
        <?php
        // Function to generate price box
        function generatePriceBox($image, $title, $storage, $emails, $domains, $price) {
            echo "<div class='price-box'>";
            echo "<img src='" . $image . "' alt='" . $title . "' onclick='openModal(\"" . $image . "\", \"" . $title . "\", \"" . $storage . "\", \"" . $emails . "\", \"" . $domains . "\", \"" . $price . "\")'>";
            echo "<h2>" . $title . "</h2>";
            echo "<ul>";
            echo "<li>" . $storage . " Storage</li>";
            echo "<li>" . $emails . " Emails</li>";
            echo "<li>" . $domains . " Domains</li>";
            echo "</ul>";
            echo "<p class='price'>" . $price . "</p>";
            echo "<button class='button'>Sign Up</button>";
            echo "</div>";
        }

        // Array of price boxes with image URLs
        $priceBoxes = array(
            array(
                "image" => "from1.jpeg",
                "title" => "ໃບຄຳຮ້ອງ",
                "storage" => "10GB",
                "emails" => "10",
                "domains" => "10",
                "price" => "$10 per month"
            ),
            array(
                "image" => "from2.jpeg",
                "title" => "ໃບຊືວາປະຫວັດ",
                "storage" => "25GB",
                "emails" => "25",
                "domains" => "25",
                "price" => "$25 per month"
            ),
            array(
                "image" => "from3.jpeg",
                "title" => "ໃບຢັ່ງຢືນທີ່ຢູ່",
                "storage" => "50GB",
                "emails" => "50",
                "domains" => "50",
                "price" => "$50 per month"
            ),
            array(
                "image" => "fromm4.jpeg",
                "title" => "ໃບຢັ່ງຢືນ",
                "storage" => "50GB",
                "emails" => "50",
                "domains" => "50",
                "price" => "$50 per month"
            )

        );

        // Generate price boxes
        foreach ($priceBoxes as $box) {
            generatePriceBox($box['image'], $box['title'], $box['storage'], $box['emails'], $box['domains'], $box['price']);
        }
        ?>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modalImg" src="" alt="">
        <h2 id="modalTitle"></h2>
        <ul id="modalDetails">
            <li id="modalStorage"></li>
            <li id="modalEmails"></li>
            <li id="modalDomains"></li>
        </ul>
        <p id="modalPrice" class="price"></p>
        <button href="h.php" class="button">ສັ່ງຊື່</button>
    </div>
</div>

<script>
    // Add your JavaScript code here
    function openModal(image, title, storage, emails, domains, price) {
        document.getElementById("modalImg").src = image;
        document.getElementById("modalTitle").innerText = title;
        document.getElementById("modalStorage").innerText = storage + " Storage";
        document.getElementById("modalEmails").innerText = emails + " Emails";
        document.getElementById("modalDomains").innerText = domains + " Domains";
        document.getElementById("modalPrice").innerText = price;
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
