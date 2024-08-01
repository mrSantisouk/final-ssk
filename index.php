<?php
include "function.php";
if (isset($_POST['save'])) {
    $Feedback_date = $_POST['Feedback_date'];
    $Feedback_detail = $_POST['Feedback_detail'];
    
    $query = "INSERT INTO tbl_feedback (Feedback_date, Feedback_detail) VALUES (
                '$Feedback_date', '$Feedback_detail')";
    $result = mysqli_query($objCon, $query);
    
    if ($result) {
        // Success message or redirection
        // echo 'Successfully';
    } else {
        // Error handling
        echo "Error: " . $query . "<br>" . mysqli_error($objCon);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap" rel="stylesheet">
</head>
<body id="myPage">
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
/* Center the footer content */


        
    </style>


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>ໜ້າຫຼັກ</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ໂຄງຮ່າງການຈັດຕັ້ງ</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ແຈ້ງການ </a>
  <a href="#notice" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ການເຄື່ອນໄຫວ</a>
  <a href="#form" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ໃບຄຳຮ້ອງ</a>
  <a href="h2.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ລູກບ້ານ</a>
  <a href="h.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ຜູ້ພັກເຊົ່າ</a>
  
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ຕິດຕໍ່</a>
  <a href="logout_action.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">logout</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div> 

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="kanbn.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  
</div>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>ໂຄງຮ່າງການຈັດຕັ້ງ</h2>
<p>ຫ້ອງການບ້ານດອນແດງ</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Johnny Walker</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Jan Ringo</h3>
  <p>Boss man</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Kai Ringo</h3>
  <p>Fixer</p>
</div>

</div>
</div>


<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1 w3-center" id="work">
<h2>ແຈ້ງການ</h2>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php
      // Array of news articles with multiple images
      $news = array(
          array(
              "title" => "News Title 1",
              "description" => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
              "images" => array("news1.jpg", "news2.jpg", "news3.jpg")
          ),
          array(
              "title" => "News Title 2",
              "description" => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
              "images" => array("news4.jpg", "news5.jpg", "news6.jpg")
          ),
          array(
            "title" => "News Title 2",
            "description" => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
            "images" => array("news4.jpg", "news5.jpg", "news6.jpg")
        ),
        array(
            "title" => "News Title 2",
            "description" => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
            "images" => array("news4.jpg", "news5.jpg", "news6.jpg")
        ),
        array(
            "title" => "News Title 2",
            "description" => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
            "images" => array("news4.jpg", "news5.jpg", "news6.jpg")
        ),
          // Add more news articles as needed
      );

      // Loop through news articles and generate HTML
      foreach ($news as $article) {
          echo '<div class="news-item" onclick="openModal(\'' . $article['title'] . '\', \'' . $article['description'] . '\', [' . "'" . implode("','", $article['images']) . "'" . '])">';
          echo '<img src="' . $article['images'][0] . '" class="news-image">';
          echo '<div class="news-content">';
          echo '<h3 class="news-title">' . $article['title'] . '</h3>';
          echo '<p class="news-description">' . $article['description'] . '</p>';
          echo '</div>';
          echo '</div>';
      }
      ?>
    </div>
  </div>

  <!-- Popup -->
  <div id="imagePopup" class="popup" onclick="closePopup()">
    <div class="popup-content" id="popupContent">
      <span class="close" onclick="closePopup()">&times;</span>
    </div>
  </div>

  <script>
    // Add your JavaScript code here
    function openModal(title, description, images) {
      var popupContent = document.getElementById('popupContent');
      popupContent.innerHTML = '';

      var titleElement = document.createElement('h2');
      titleElement.textContent = title;
      popupContent.appendChild(titleElement);

      var descriptionElement = document.createElement('p');
      descriptionElement.textContent = description;
      popupContent.appendChild(descriptionElement);

      images.forEach(function(imageSrc) {
          var img = document.createElement('img');
          img.src = imageSrc;
          img.className = 'popup-image';
          popupContent.appendChild(img);
      });

      document.getElementById('imagePopup').style.display = 'block';
    }

    function closePopup() {
      document.getElementById('imagePopup').style.display = 'none';
    }
    
  </script>

</body>
</div>

<!-- Work Row 2-->
<div class="w3-container w3-padding-64 w3-center" id="notice">
<h2>ການເຄື່ອນໄຫວ</h2>
<style>
#notice h2 {
  color: #000000; /* Text color */
  font-size: 36px; /* Adjust font size as needed */
  margin-bottom: 32px;
  font-family: "Noto Sans Lao", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  line-height: 1.5;
  font-size: 80px;
}
</style>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="/w3images/snow.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>Customer 1</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>
<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="/w3images/snow.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>Customer 1</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
  <div class="w3-container">
  <h3>Customer 2</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <h3>Customer 3</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

</div>
<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- form Row -->
<!-- <div class="w3-row-padding w3-center w3-padding-64" id="form">
    <h2>ໃບຄຳຮ້ອງ</h2>
    
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
       
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>
</div> -->

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">ຕິດຕໍ່ສອບຖາມ</span></div>
      <h3>ສະຖານທີ່</h3>
      <p>ຫ້ອງການປົກຄອງບ້ານດອນແດງ</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  ນະຄອນຫຼວງວຽງຈັນ, ຈັນທະບູລີ, ດອນແດງ</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1095.9724048566106!2d102.60352408538937!3d18.005861475255877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312468195beaf527%3A0x5588f8be86a35edc!2z4Lqa4LuJ4Lqy4LqZ4LqU4Lqt4LqZ4LuB4LqU4LqHLOC7gOC6oeC6t-C6reC6h-C6iOC6seC6meC6l-C6sOC6muC6ueC6peC6tQ!5e0!3m2!1sth!2sla!4v1718301460455!5m2!1sth!2sla" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   <div class="w3-col m6">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">ແຜນທີ່</span></div>

    </div>
    <div class="w3-col m6">
  <form method="POST">
        
      
      <div class="w3-section">      
      <label>ວັນທີ່</label>
      <input class="w3-input" type="date" name="Feedback_date" required>
    </div>  
    <div class="w3-section">      
      <label>ຄຳຕິຊົມ</label>
      <textarea class="w3-input" name="Feedback_detail" required></textarea>
    </div>
    <button type="submit"  name="save" class="w3-button w3-right w3-theme">ສົ່ງ</button>
  </form>
</div>

<!-- Popup -->
<div id="popupMessage" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-theme-l2">
      <span onclick="closePopup()" class="w3-button w3-display-topright">&times;</span>
      <h3>Thank You!</h3>
      <p>Your message has been submitted successfully.</p>
    </div>
  </div>
</div>

<script>
  document.getElementById("commentForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    showPopup(); // Display popup
  });

  function showPopup() {
    document.getElementById('popupMessage').style.display = 'block';
  }

  function closePopup() {
    document.getElementById('popupMessage').style.display = 'none';
  }
</script>
  </form>
  
</div>

    </div>
    
  </div>
  
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
 <!-- footer.php -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>ຕິດຕາມຂໍ້ມູນຂ່າວສານໄດ້ທີ່</h4>
  <a class="w3-button w3-large w3-teal" href="https://www.facebook.com/your-facebook-page" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
</footer>

</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
